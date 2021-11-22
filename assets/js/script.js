function toggleTheme() {
    if ($("html").hasClass("light-theme")) {
        $("#theme").html(`
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
            </svg>
        `)
        $("html").removeClass("light-theme")
    } else {
        $("html").addClass("light-theme")
        $("#theme").html(`
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
            </svg>
        `)
    }
}

$("#theme").on("click", toggleTheme);

$(() => {
    $.getJSON("https://api.github.com/repos/chezzzer/site/commits?per_page=1", (commit) => {
        commit = commit[0];
        $("#commit").html(commit.sha.substr(0, 7));
        $("#commit-link").attr("href", commit.html_url);
    })

    updateStatus();

    $(window).scroll(function(){
        if (window.pageYOffset > 0) {
            $("footer").css("bottom", "0px")
        } else {
            $("footer").css("bottom", "-56px")
        }
    });
})

function updateStatus() {
    $.getJSON("https://api.lanyard.rest/v1/users/195979856733929472", (data) => {
        data = data.data;
        if (data.listening_to_spotify) {
            $("#spotify").html(`<i class="fab fa-spotify" style="color:#1DB954"></i> <a class="noAStyle" target="_blank" href="https://open.spotify.com/track/${data.spotify.track_id}">${data.spotify.song} by <i>${data.spotify.artist}</i></a>`);
        } else {
            $("#spotify").html("");
        }
        if (data.active_on_discord_mobile && !data.active_on_discord_desktop) {
            $("#status").html(`Mobile`)
            $("#status-icon").css("color", "#ffc107")
        } else if (data.active_on_discord_desktop) {
            $("#status").html(`Online`)
            $("#status-icon").css("color", "#198754")
        } else {
            $("#status").html(`Offline`)
            $("#status-icon").css("color", "#d4d4d4")
        }
    })
}

setInterval(updateStatus, 15000);