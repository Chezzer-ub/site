<?php
if ($_GET['action'] == "logout") {
    setcookie("private_id", "");
    setcookie("server", "");
    setcookie("user_auth", "");
    setcookie("public_id", "");
    setcookie("discord_data", "");
    header("Location: /melody");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melody: A Music Bot from the Future</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        if ($_GET['id']) {
            require_once("views/panel.php");
        } else {
            require_once("views/main.php");
        }
    ?>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <?php
    if ($_GET['id']) {
        ?>
        <script src="assets/js/panel.js"></script>
        <script src="assets/js/dropzone.js"></script>
        <?php
    }
    ?>
</body>
</html>