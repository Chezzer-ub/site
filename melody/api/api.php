<?php
$db = mysqli_connect("localhost", "admin", "6B6dML1gcJG34fvC", "melody");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$req = str_replace("/melody/api/", "", $_SERVER['REQUEST_URI']);
$req = explode("?", $req)[0];

function checkAuth() {
    global $db;
    $valid = true;
    $discord = json_decode(urldecode($_COOKIE['discord_data']), true);
    $user = $db->prepare("SELECT * FROM melody_users WHERE id = ?");
    $user->bind_param("s", $discord['id']);
    $user->execute();
    $user = $user->get_result();
    if (!$user->num_rows) {
        $valid = false;
    }
    $user = $user->fetch_assoc();
    if ($_COOKIE['user_auth'] !== $user['auth']) {
        $valid = false;
    }
    return $valid;
}

switch($req) {
    case "youtube/getVideo":
        if ($_GET['id']) {
            require 'youtube/vendor/autoload.php';
            $youtube = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyDjz_hzvyWfDowo8Nr4yWLwlGx_XYRvGoI'));
            $video = $youtube->getVideoInfo($_GET['id']);
            header('Content-Type: application/json');
            echo json_encode($video);
        }
    break;
    
    case "screen":
        if ($_POST['url']) {
            if (file_exists("../views/pages/{$_POST['url']}.php")) {
                require "../views/pages/{$_POST['url']}.php";
            } else {
                require "../views/error/exist.php";
            }
        }
    break;
    case "getSession":
        $_POST = json_decode(file_get_contents("php://input"), true);
        if ($_POST['pass'] == "melody278359") {
            $session = $db->prepare("SELECT * FROM melody_sessions WHERE id = ?");
            $session->bind_param("s", $_POST['id']);
            $session->execute();
            $session = $session->get_result();
        
            if ($session->num_rows) {
                $session = $session->fetch_assoc();
        
                //header("content-type: application/json");
        
                echo json_encode($session);
            } else {
                header("content-type: application/json");
                echo json_encode("{}");
            }
        }
    break;
    case "newSession": 
        $_POST = json_decode(file_get_contents("php://input"), true);
        function gen_uuid() {
            return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                // 32 bits for "time_low"
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
    
                // 16 bits for "time_mid"
                mt_rand( 0, 0xffff ),
    
                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 4
                mt_rand( 0, 0x0fff ) | 0x4000,
    
                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
                mt_rand( 0, 0x3fff ) | 0x8000,
    
                // 48 bits for "node"
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
            );
        }
        
        if ($_POST['user'] && $_POST['voice'] && $_POST['server']) {
    
            $id = md5(rand());
            $time = time();
            $voice = $_POST['voice'];
            $user = $_POST['user'];
            $server = $_POST['server'];
            $private = gen_uuid();

            $sessionData = $db->prepare("SELECT * FROM melody_sessions WHERE server = ? AND user = ?");
            $sessionData->bind_param("ss", $server, $user);
            $sessionData->execute();
            $sessionData = $sessionData->get_result();

            if ($sessionData->num_rows) {
                
                $sessionData = $sessionData->fetch_assoc();

                header('Content-Type: application/json');
                echo json_encode(array(
                    "id" => $sessionData['id']
                ));
                die();
            }
    
            $statCheck = $db->prepare("SELECT id FROM melody_stats WHERE id = ?");
            $statCheck->bind_param("s", $server);
            $statCheck->execute();
            $statCheck = $statCheck->get_result();
            if (!$statCheck->num_rows) {
                $statInsert = $db->prepare("INSERT INTO melody_stats (id) VALUES (?)");
                $statInsert->bind_param("s", $server);
                $statInsert->execute();
            }
    
            $session = $db->prepare("INSERT INTO melody_sessions (id, voice, user, server, date_created, private_id) VALUES (?, ?, ?, ?, ?, ?)");
            $session->bind_param("ssssss", $id, $voice, $user, $server, $time, $private);
            $session->execute();
    
            header('Content-Type: application/json');
            echo json_encode(array(
                "id" => $id
            ));
            die();
        }
    break;
    case "updateStats": 
        $_POST = json_decode(file_get_contents("php://input"), true);
        if ($_POST['id'] == "all") {
            $update = $db->prepare("UPDATE melody_stats SET data = ?");
            $update->bind_param("s", $_POST['data']);
        } else {
            $update = $db->prepare("UPDATE melody_stats SET data = ? WHERE id = ?");
        $update->bind_param("ss", $_POST['data'], $_POST['id']);
        }
        $update->execute();
    break;
    case "stats":
        $stats = $db->prepare("SELECT * FROM melody_stats WHERE id = ?");
        $stats->bind_param("s", $_GET['id']);
        $stats->execute();
        $stats = $stats->get_result();
        $stats = $stats->fetch_assoc();
        header('Content-Type: application/json');
        echo json_encode(json_decode($stats['data']));
    break;
}
?>