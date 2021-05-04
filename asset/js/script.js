$(document).ready(function(){
    $(document).mousemove(function(event){
        $(".cursor-follow").css("left", event.pageX);
        $(".cursor-follow").css("top", event.pageY-document.documentElement.scrollTop);
        $(".cursor-follow").css("display", "inherit");
        $(".cursor-ring").css("display", "inherit");
        if ($(event.target).attr("hover-color")) {
            $(".cursor-ring").css({
                background: $(event.target).attr("hover-color"),
                width: "32px",
                height: "32px",
                margin: "-12px 0 0 -12px"
            })
        } else if (event.target.localName == "a" || event.target.parentNode.localName == "a") {
            $(".cursor-ring").css({
                background: "rgba(255,255,255,.1)",
                width: "32px",
                height: "32px",
                margin: "-12px 0 0 -12px"
            })
        } else {
            $(".cursor-ring").css({
                background: "rgba(255,255,255,.1)",
                width: "28px",
                height: "28px",
                margin: "-11px 0 0 -11px"
            })
        }

        setTimeout(() => {
            $(".cursor-ring").css("top", event.pageY-document.documentElement.scrollTop);
            $(".cursor-ring").css("left", event.pageX);
        }, 150)
    });

    window.addEventListener ('mousedown', e => {
        $(".cursor-ring").addClass("down");
    })
    
    window.addEventListener ('mouseup', e => {
        setTimeout(() => {
            $(".cursor-ring").removeClass("down");
        }, 100)
    })

    setInterval(() => {
        $("#time").html(moment().tz('Pacific/Auckland').format('dddd h:mm:ss A'))
    }, 1000)
    $("#time").html(moment().tz('Pacific/Auckland').format('dddd h:mm:ss A'))

    function updateStats() {
        $.getJSON("https://api.lanyard.rest/v1/users/195979856733929472", (data) => {
            data = data.data;
            if (data.listening_to_spotify) {
                $("#spotify").html(`<a class="noAStyle" target="_blank" href="https://open.spotify.com/track/${data.spotify.track_id}"><b>${data.spotify.song}</b> by <i>${data.spotify.artist}</i></a>`);
            } else {
                $("#spotify").html("Not listening to anything")
            }
            if (data.active_on_discord_mobile && !data.active_on_discord_desktop) {
                $("#status").html(`I am currently active on my phone, I am probably out or sleeping, depends on the time.`)
            } else if (data.active_on_discord_desktop) {
                $("#status").html(`I am currently active on my computer, feel free to message me any time.`)
            } else {
                $("#status").html(`I am currently not active right now, I am most likely out or sleeping, feel free to message me but I will not respond immediately.`)
            }

            $("#activity").html("");
            data.activities.forEach((item, i) => {
                if (item.id !== "spotify:1" && item.id !== "custom") {
                    $("#activity").append(`<p><span><i class="fas fa-gamepad"></i> ${item.name}</span></p>`);
                }
            })
        })
    }

    setTimeout(() => {
        AOS.init();
    }, 250)

    updateStats();
    setInterval(updateStats, 10000);
});