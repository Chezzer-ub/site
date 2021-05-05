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
    <div class="site" data-aos="fade-up">
        <div class="content">
            <h1>hi, <span class="color-accent">I'm Chezzer</span></h1>
            <p>A full stack developer with experience in HTML, CSS, jQuery, PHP and NodeJS web frameworks. I love to make cool projects with a touch of art, fun, and mainly, code.</p>
            <i id="status-icon" class="fas fa-circle mr-2"></i> <div id="status" style="margin-left:.25rem" class="d-inline-flex"></div>
            <div><i class="fal fa-clock mr-2"></i> <span id="time" class="m-1"></span></div>
            <div><i class="fal fa-headphones mr-2"></i> <span id="spotify" class="m-1"></span></div>
            <div id="activity"></div>
        </div>
    </div>
    <div class="site" data-aos="fade-up">
        <div class="content" style="width: 42vmax;">
            <h3 class="mb-4">Where I do it</h3>
            <div class="row">
                <div class="col-sm-6 mb-4">
                    <a href="https://sapphireadventures.net" target="_blank">
                        <div class="project">
                            <div class="project-label">Sapphire Adventures</div>
                            <div class="project-tags">
                                <span class="badge rounded-pill bg-danger">HTML</span>
                                <span class="badge rounded-pill bg-primary ml-2">CSS</span>
                                <span class="badge rounded-pill bg-warning ml-2">JavaScript</span>
                                <span class="badge rounded-pill bg-info ml-2">PHP</span>
                            </div>
                            <img src="asset/img/sapphireadventures.net.png" hover-color="rgba(66, 187, 242, .5)" width="100%" alt="" class="img-wrap project-background">
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 mb-4">
                    <a href="https://upbeatradio.net" target="_blank">
                        <div class="project">
                            <div class="project-label">UpBeat Radio</div>
                            <div class="project-tags">
                                <span class="badge rounded-pill bg-danger">HTML</span>
                                <span class="badge rounded-pill bg-primary ml-2">CSS</span>
                                <span class="badge rounded-pill bg-warning ml-2">JavaScript</span>
                                <span class="badge rounded-pill bg-info ml-2">PHP</span>
                            </div>
                            <img src="asset/img/upbeatradio.net.png" hover-color="rgba(33, 116, 183, .5)" width="100%" alt="" class="img-wrap project-background">
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 mb-4">
                    <a href="https://bargrooves.live/player" target="_blank">
                        <div class="project">
                            <div class="project-label">Bargrooves</div>
                            <div class="project-tags">
                                <span class="badge rounded-pill bg-danger">HTML</span>
                                <span class="badge rounded-pill bg-primary ml-2">CSS</span>
                                <span class="badge rounded-pill bg-warning ml-2">JavaScript</span>
                                <span class="badge rounded-pill bg-info ml-2">Express</span>
                            </div>
                            <img src="asset/img/bargrooves.live.png" hover-color="rgba(132, 27, 132, .5)" width="100%" alt="" class="img-wrap project-background">
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 mb-4">
                    <a href="https://chezzer.dev/ricepurity" target="_blank">
                        <div class="project">
                            <div class="project-label">Modenized Rice Purity Test</div>
                            <div class="project-tags">
                                <span class="badge rounded-pill bg-danger">HTML</span>
                                <span class="badge rounded-pill bg-primary ml-2">CSS</span>
                                <span class="badge rounded-pill bg-warning ml-2">JavaScript</span>
                                <span class="badge rounded-pill bg-info ml-2">PHP</span>
                                <span class="badge rounded-pill bg-info ml-2">PHP Image</span>
                            </div>
                            <img src="asset/img/ricepurity.png" hover-color="rgba(22, 198, 12, .5)" width="100%" alt="" class="img-wrap project-background">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="site" data-aos="fade-up">
        <div class="content" style="width: 42vmax;">
            <h3 class="mb-4">How I do it</h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="tech-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#EFD81D"><path d="M0 0v512h512V0H0zm274.286 397.714c0 49.84-29.44 74.137-72.057 74.137-38.492 0-60.835-19.931-72.172-43.988l39.177-23.714c7.555 13.405 13.292 24.742 29.783 24.742 13.714 0 24.983-6.182 24.983-30.24V237.714h50.286v160zm113.543 72.995c-44.675 0-73.543-20.16-87.635-48L339.429 400c10.285 16.846 23.714 28.069 47.428 28.069 19.932 0 31.509-8.823 31.509-22.572 0-16.491-11.92-22.331-33.92-32l-12.023-5.166c-34.72-14.765-57.737-33.325-57.737-72.514 0-36.08 27.485-62.434 70.445-62.434 30.595 0 52.572 9.508 68.4 37.348L416 294.857c-8.251-14.777-17.143-20.571-30.926-20.571-14.091 0-23.028 8.937-23.028 20.571 0 14.434 8.937 20.274 29.554 29.212l12.023 5.154c40.903 17.531 63.931 35.428 63.931 75.611.012 43.315-34.011 65.875-79.725 65.875z"></path></svg>
                        <div class="d-block">
                            <h2>JavaScript</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site footer" data-aos="fade-up">
        <div class="content text-center" style="margin: 0; width: 100%;">
            <a target="_blank" href="https://twitter.com/ChezzerYT" class="p-2"><i class="fab fa-twitter fa-2x"></i></a>
            <a target="_blank" href="https://open.spotify.com/user/chezzercherry" class="p-2"><i class="fab fa-spotify fa-2x"></i></a>
            <a target="_blank" href="https://instagram.com/ryancherry.nz/" class="p-2"><i class="fab fa-instagram fa-2x"></i></a>
            <a target="_blank" href="https://discord.bio/p/chezzer" class="p-2"><i class="fab fa-discord fa-2x"></i></a>
        </div>
    </div>
    <script src="asset/js/moment.js?<?php echo filemtime("./asset/js/moment.js")?>"></script>
    <script src="asset/js/bootstrap.bundle.min.js?<?php echo filemtime("./asset/js/bootstrap.bundle.min.js")?>"></script>
    <script src="asset/js/jquery-3.6.0.min.js?<?php echo filemtime("./asset/js/jquery-3.6.0.min.js")?>"></script>
    <script src="asset/js/script.js?<?php echo filemtime("./asset/js/script.js")?>"></script>
    <script src="asset/js/aos.js?<?php echo filemtime("./asset/js/aos.js")?>"></script>
</body>
</html>
