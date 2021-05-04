<?php
if (!$_GET['token'] && !$_GET['invalid']) {
    echo '
      <!doctype html>
      <html>
      <head>
      </head>
      <body>
        <script>
          var locHash = window.location.hash;
          locHash = locHash.substr(locHash.indexOf("access_token=") + 13);
          locHashToken = locHash.substr(0, locHash.indexOf("&expires_in"));

          if (locHashToken.length != 0) {
            window.location = window.location.href.split(\'#\')[0] + "?token=" + locHashToken;
          } else {
            window.location = window.location.href.split(\'#\')[0] + "?invalid=true";
          }
        </script>
      </body>
      </html>
    ';
} else if (!$_GET['invalid']) {

    setcookie("private_id", "");
    setcookie("server", "");
    setcookie("user_auth", "");

    $db = mysqli_connect("localhost", "admin", "6B6dML1gcJG34fvC", "melody");
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $handle = curl_init();
    
    // Generate Headers
    $authHeaders = array(
      "Authorization: Bearer " . $_GET['token'],
      "Content-Length: 0"
    );

    // Set API Endpoint
    curl_setopt($handle, CURLOPT_URL, "https://discordapp.com/api/users/@me");
    curl_setopt($handle, CURLOPT_HTTPHEADER, $authHeaders);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($handle);
    $discord = json_decode($response, true);

    $responseCode = curl_getinfo($handle, CURLINFO_RESPONSE_CODE);

    $session = $db->prepare("SELECT * FROM melody_sessions WHERE id = ?");
    $session->bind_param("s", $_COOKIE['public_id']);
    $session->execute();
    $session = $session->get_result();
    $session = $session->fetch_assoc();

    if ($session['user'] == $discord['id']) {
        setcookie("private_id", $session['private_id']);
    }

    setcookie("server", $session['server']);
    setcookie("discord_data", json_encode($discord));

    $userCheck = $db->prepare("SELECT * FROM melody_users WHERE id = ?");
    $userCheck->bind_param("s", $discord['id']);
    $userCheck->execute();
    $userCheck = $userCheck->get_result();
    if ($userCheck->num_rows) {
      $user = $userCheck->fetch_assoc();
      setcookie("user_auth", $user['auth']);
      print_r($user);
    } else {
      $auth = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
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

      setcookie("user_auth", $auth);

      $userInsert = $db->prepare("INSERT INTO melody_users (id, auth) VALUES (?, ?)");
      $userInsert->bind_param("ss", $discord['id'], $auth);
      $userInsert->execute();
    }

    header("Location: https://chezzer.dev/melody?id={$session['id']}");
}
?>