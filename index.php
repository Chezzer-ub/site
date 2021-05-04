<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hi, I'm Chezzer</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css?<?php echo filemtime("./asset/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="asset/css/style.css?<?php echo filemtime("./asset/css/style.css")?>">
    <link rel="stylesheet" href="asset/css/aos.css?<?php echo filemtime("./asset/css/aos.css")?>">
    <link rel="stylesheet" href="https://use.typekit.net/fmi6uwl.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/favicon.ico?<?php echo filemtime("./")?>" type="image/x-icon">
    <link rel="icon" href="/favicon.ico?<?php echo filemtime("./")?>" type="image/x-icon">
</head>
<body>
    <div class="cursor-ring"></div>
    <div class="cursor-follow"></div>
    <div class="site">
        <div class="first" data-aos="fade-up">
            <div class="inner">
                <h1>hi, <span class="color-accent">I'm Chezzer</span></h1>
                <p>A full stack developer with experience in HTML, CSS, jQuery, PHP and NodeJS web frameworks. I love to make cool projects with a touch of art, fun, and mainly, code.</p>
                <di id="status"></di>
                <div><i class="fas fa-clock mr-2"></i> <span id="time"></span></div>
                <div><i class="fab fa-spotify mr-2"></i> <span id="spotify"></span></div>
                <div id="activity"></div>
            </div>
        </div>
        <div class="second" data-aos="fade-up">
            <div class="inner">
                <h1>What I do</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <div style="background:url(asset/img/sapphire.png)" class="img-wrap project"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="asset/js/moment.js?<?php echo filemtime("./asset/js/moment.js")?>"></script>
    <script src="asset/js/bootstrap.bundle.min.js?<?php echo filemtime("./asset/js/bootstrap.bundle.min.js")?>"></script>
    <script src="asset/js/jquery-3.6.0.min.js?<?php echo filemtime("./asset/js/jquery-3.6.0.min.js")?>"></script>
    <script src="asset/js/script.js?<?php echo filemtime("./asset/js/script.js")?>"></script>
    <script src="asset/js/aos.js?<?php echo filemtime("./asset/js/aos.js")?>"></script>
</body>
</html>