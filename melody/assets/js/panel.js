var globalInfo = [];
var sessionStatus = {};

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$("#player-volume").on("input", () => {
  $("#player-volume").css("background-size", `${$("#player-volume").val()}% 100%`);
  if (privateKey) {
    socket.send(JSON.stringify({"action": "volume", "value": `${$("#player-volume").val()/100}`, "session": sessionId, "key": privateKey}));
  }
})

$(".screen-item").on("click", (e) => {
  $(".screen-item i").removeClass("fas");
  $(".screen-item i").addClass("fal");
  $(e.currentTarget).children("h5").children("i").removeClass("fal");
  $(e.currentTarget).children("h5").children("i").addClass("fas");
})

$(".link").on("click", (e) => {
  $(".link").removeClass("selected");
  $(e.currentTarget).addClass("selected");
  if ($(e.currentTarget).attr("data-ref")) {
    if ($(e.currentTarget).attr("data-modal")) {
      changeView($(e.currentTarget).attr("data-ref"), true);
      $("#siteModal").modal("show");
    } else {
      changeView($(e.currentTarget).attr("data-ref"));
    }
  }
})

$(".play").on("click", (e) => {
  queue($(e.currentTarget).attr("data-url"))
})

var playing = false;
$("#play-button").on("click", (e) => {
  if (playing) {
    pause();
    playing = false;
    $("#play-button").addClass("fa-play");
    $("#play-button").removeClass("fa-pause");
  } else {
    play();
    playing = true;
    $("#play-button").addClass("fa-pause");
    $("#play-button").removeClass("fa-play");
  }
})

$("#skip-button").on("click", (e) => {
  skip()
})

async function getInfo(url) {
  if (globalInfo[url]) {
    return globalInfo[url];
  } else if (url.includes("youtube")) {
    let id = url.split("?v=")[1];
    id = id.split("?")[0];
    let data = await $.ajax({url:`api/youtube/getVideo?id=${id}`, async:false});
    return data;
  }
}

function changeView(ref, modal = false) {
  $.post("api/screen", {url: ref}, (data) => {
    if (modal) {
      $("#siteModalContent").html(data);
    } else {
      $(".screen").html(data);
    }
  })
}

function applyStats(data) {
  sessionStatus = data;
  if (data.status) {
    if (data.type == "youtube") {
      $("#song-info").html(data.youtube.title)
      $("#song-info").append(` <i onclick="window.open('${data.youtube.video_url}')" class="fal fa-external-link"></i>`)
      $(".player-art").attr("src", data.youtube.thumbnails[0].url)
      $(".progress").css("width", `${(data.playTime/1000) / Number(data.youtube.lengthSeconds) * 100}%`)
    } else if (data.type == "custom") {
      $("#song-info").html(data.link);
      $(".player-art").attr("src", "https://chezzer.dev/melody/assets/img/icon.png")
      $(".progress").css("width", `0%`)
    }
  } else {
    $("#song-info").html(`<span class="text-muted">Waiting for music...</span>`)
    $(".progress").css("width", `0%`)
    $(".player-art").attr("src", "https://chezzer.dev/melody/assets/img/icon.png")
  }
}

function updateStats() {
  if (navigator.onLine) {
    if (selectedServer) {
      $.getJSON("api/stats?id="+selectedServer, (data) => {
        applyStats(data);
      })
    }
  } else {
    addAlert("Lost Connection", "You are offline.", "danger")
  }
}

var toasti = 0;

function addAlert(header, message, type) {
  let color = "#343a40";
  if (type == "success") {
    color = "#28a745";
  } else if (type == "warning") {
    color = "#ffc107";
  } else if (type == "danger") {
    color = "#dc3545";
  } else if (type == "info") {
    color = "#17a2b8";
  }
  $(".notifs").append(`
  <div class="toast fade" id="toast-${toasti}" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="${color}" width="100%" height="100%"></rect></svg>
      <strong class="mr-auto">${header}</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      ${message}
    </div>
  </div>
  `)
  $('#toast-'+toasti).toast({
    delay: 5000
  })
  $('#toast-'+toasti).toast('show')
  toasti++;
}

function queue(id) {
  playing = true;
  $("#play-button").addClass("fa-pause");
  $("#play-button").removeClass("fa-play");
  if (socket) {
    socket.send(JSON.stringify({"action": "queue", "url": id, "session": sessionId}));
  } else {
    addAlert("Could not play...", "Connection not open.", "danger");
  }
}

function skip() {
  playing = true;
  if (privateKey) {
    socket.send(JSON.stringify({"action": "skip", "key": privateKey, "session": sessionId}));
  } else {
    addAlert("Warning", "You do not have permission to skip the current song.", "warning");
  }
}

function play() {
  socket.send(JSON.stringify({"action": "resume", "key": privateKey, "session": sessionId}));
}

function pause() {
  socket.send(JSON.stringify({"action": "pause", "key": privateKey, "session": sessionId}));
}

updateStats();
var statInterval = setInterval(updateStats, 5000);

var socket;
setTimeout(() => {
  socket = new WebSocket("wss://chezzer.dev/melody/ws");

  socket.onopen = function(e) {
    socket.send(JSON.stringify({"action": "join", "session": sessionId, "key": privateKey}));
  }

  socket.onmessage = function(event) {
    let message = {};
    try {
      message = JSON.parse(event.data);
    } catch {
      addAlert("Error", "Something went wrong.", "danger");
    }

    if (message.event == "ready") {
      $("#voice-channel").html(`<i class="fas fa-volume"></i> ${voiceInfo['name']}`)
    } else if (message.event == "info") {
      let stat = {
        youtube: message.body,
        type: message.type,
        status: true,
        playTime: 0
      }
      clearInterval(statInterval);
      applyStats(stat)
      statInterval = setInterval(updateStats, 5000);
      globalInfo[message.link] = message.body
    } else if (message.event == "error") {
      if (typeof message.body === 'string') {
        addAlert("Error", message.body, "danger")
      } else {
        if (message.body.code == "ECONNRESET") {
          addAlert("Error", "Unable to play that, please try again.", "danger")
        }
      }
    }
  };

  socket.onclose = function(event) {
    $("#voice-channel").html(`<i class="fas fa-times"></i> Closed`)
    addAlert("Lost Connection", `${event.wasClean ? event.reason : "Server is not responding."}`, "danger")
  }

  socket.onerror = function(error) {
    $("#voice-channel").html(`<i class="fas fa-times"></i> Error`)
    addAlert("Error", "An unknown error occurred.", "danger")
  };
}, 3000)