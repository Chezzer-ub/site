<?php

$db = mysqli_connect("localhost", "admin", "6B6dML1gcJG34fvC", "melody");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$authURL = "https://discord.com/oauth2/authorize?client_id=793338351145975808&redirect_uri=https%3A%2F%2Fchezzer.dev%2Fmelody%2Flink.php&response_type=token&scope=identify";

$session = $db->prepare("SELECT * FROM melody_sessions WHERE id = ?");
$session->bind_param("s", $_GET['id']);
$session->execute();
$session = $session->get_result();
$valid = $session->num_rows;
if (!$session->num_rows) {
    setcookie("private_id", "");
    setcookie("server", "");
    setcookie("user_auth", "");
    setcookie("public_id", "");
    require_once("error/invalid.php");
    die();
}
$session = $session->fetch_assoc();

if ($_COOKIE['discord_data']) {
    $discord = json_decode(urldecode($_COOKIE['discord_data']), true);

    $user = $db->prepare("SELECT * FROM melody_users WHERE id = ?");
    $user->bind_param("s", $discord['id']);
    $user->execute();
    $user = $user->get_result();
    if (!$user->num_rows) {
        setcookie("private_id", "");
        setcookie("server", "");
        setcookie("user_auth", "");
        setcookie("public_id", "");
        require_once("error/auth.php");
        die();
    }
    $user = $user->fetch_assoc();

    if ($_COOKIE['user_auth'] !== $user['auth']) {
        setcookie("private_id", "");
        setcookie("server", "");
        setcookie("user_auth", "");
        setcookie("public_id", "");
        echo "<meta http-equiv=\"Refresh\" content=\"0; url='{$authURL}'\" />";
        die();
    }

    $context = [
        "http" => [
            "method" => "GET",
            "header" => "Authorization: Bot NzkzMzM4MzUxMTQ1OTc1ODA4.X-qz6g.J_4ZUD-AYeenaibhS-Gu8LSVB0s"
        ]
      ];
      
    $server = json_decode(file_get_contents("https://discord.com/api/guilds/{$session['server']}", false, stream_context_create($context)), true);

    $voice = json_decode(file_get_contents("https://discord.com/api/channels/{$session['voice']}", false, stream_context_create($context)), true);
}

if ($_COOKIE['public_id'] !== $session['id']) {
    setcookie('public_id', $session['id']);
    echo "<meta http-equiv=\"Refresh\" content=\"0; url='{$authURL}'\" />";
    die();
}
?>
<link rel="stylesheet" href="assets/css/panel.css">
<div class="sidebar">
    <h3><img src="assets/img/icon.png" alt="" class="rounded" width="30" height="30"> melody</h3>
    <div class="screens">
        <div class="screen-item selected link" data-ref="home">
            <h5><i class="fas fa-home"></i> Home</h5>
        </div>
        <div class="screen-item link" data-ref="search">
            <h5><i class="fal fa-search"></i> Search</h5>
        </div>
        <div class="screen-item link" data-ref="browse">
            <h5><i class="fal fa-album-collection"></i> Browse</h5>
        </div>
        <div style="left: -200%; opacity: 0; position: fixed;">
            <i class="far fa-home"></i>
            <i class="fas fa-search"></i>
            <i class="fas fa-album-collection"></i>
        </div>
    </div>
    <div class="playlists">
        <div class="mt-2 mb-1"><small>PLAYLISTS</small></div>
        <ul class="playlist-list">
            <div class="mb-2 mt-2 link" data-modal="true" data-ref="newPlaylist">
                <a class="noAStyle">
                    <i class="fa fa-plus ml-1 mr-1"></i> <b>New Playlist</b>
                </a>
            </div>
            <li class="link" data-ref="f">
                test
            </li>
            <li class="link" data-ref="f">
                test
            </li>
        </ul>
    </div>
    <div class="addURL link" data-ref="addURL" data-modal="true">
        <i class="fal fa-plus mr-1" aria-hidden="true"></i> Queue URL
    </div>
    <div class="server">
        <div class="d-flex">
            <img class="avatar mr-2" width="52px" src="https://cdn.discordapp.com/icons/<?php echo $server['id']?>/<?php echo $server['icon']?>.png" alt="">
            <div style="margin:auto">
                <h5 class="name"><?php echo substr($server['name'],0,15) . '...'?></h5>
                <span class="text-muted" id="voice-channel"><i class="fas fa-circle-notch fa-spin"></i> Joining...</span>
            </div>
        </div>
    </div>
</div>
<div class="user">
    <img src="https://cdn.discordapp.com/avatars/<?php echo $discord['id']?>/<?php echo $discord['avatar']?>.png" width="40px" class="avatar" alt="">
    <div class="dropdown show">
        <a class="dropdown-toggle noAStyle name" id="accountMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $discord['username']?>
        </a>

        <div class="dropdown-menu dropdown-menu-right mt-3 bg-dark" aria-labelledby="accountMenu">
          <a class="dropdown-item" href="#">Account</a>
          <a class="dropdown-item" href="#">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="?action=logout">Log Out</a>
        </div>
    </div>
</div>
<div class="screen">
    <?php
    require("views/pages/home.php");
if ($_COOKIE['private_id']) {
    //dj
} else if ($_COOKIE['server']) {
    //listener
}
?>
</div>
<div class="player">
    <i class="fal fa-play" data-toggle="tooltip" data-placement="top" title="Play" id="play-button"></i>
    <i class="fal fa-step-forward" data-toggle="tooltip" data-placement="top" title="Next" id="skip-button"></i>
    <img class="player-art" src="https://i.ytimg.com/vi/dQw4w9WgXcQ/hqdefault.jpg?sqp=-oaymwEiCMQBEG5IWvKriqkDFQgBFQAAAAAYASUAAMhCPQCAokN4AQ==&rs=AOn4CLAZnR3UUWV7JZdULd8cRA63RoAcVQ" alt="">
    <span class="metadata">
        <span id="song-info"><b>Rick Astley</b> <span class="text-muted">Never Gonna Give You Up (Video) <i class="fal fa-external-link"></i></span></span>
        <div class="progress-bar"><div class="progress"></div></div>
    </span>
    <div class="volume">
        <i class="fal fa-volume"></i>
        <input type="range" id="player-volume" class="slider" min="0" value="100" max="100" step="5" class="mt-2">
    </div>
    <div class="actions">
        <i class="fal fa-heart"></i>
        <i class="fal fa-repeat"></i>
        <i class="fal fa-random"></i>
        <i class="fal fa-list-music"></i>
    </div>
</div>
<div class="notifs"></div>

<div class="modal fade" id="siteModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark" id="siteModalContent">
      
    </div>
  </div>
</div>

<script>
var discordInfo = <?php echo json_encode($discord)?>;
var voiceInfo = <?php echo json_encode($voice)?>;
var sessionId = "<?php echo $session['id']?>";
var selectedServer = "<?php echo $session['server']?>";
var privateKey = "<?php echo $_COOKIE['private_id']?>";
</script>
