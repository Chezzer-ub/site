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
        <div class="content">
            <h3 class="mb-4">What I do</h3>
            <p>
                I'm a 16 year old developer living in New Zealand. My dream is to full-time web develop for a big time company like <a href="https://rocketspark.com">Rocketspark</a>.
            </p>
            <p>
                I love making projects with elegant design and fancy features and satisfying users with quality and reliability. Check out my current projects <a href="javascript:scrollTo('#work')">down below</a>.
            </p>
            <p>
                In my free time I work at <a href="https://www.rocketspark.com/blog/post/293/meet-the-16-year-old-computer-programmer/">Rocketspark</a> as a student intern and also attend High School, working towards University (or college) next year.
            </p>
        </div>
    </div>
    <div class="site" data-aos="fade-up" id="work">
        <div class="content" style="width: 42vmax;">
            <h3 class="mb-4">Where I do it</h3>
            <p>
                I put pride & passion into all my work. Here are some of my projects that I am currently working on or have finished.
            </p>
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
                    <a href="https://www.rocketspark.com/blog/post/293/meet-the-16-year-old-computer-programmer/" target="_blank">
                        <div class="project">
                            <div class="project-label">Rocketspark</div>
                            <div class="project-tags">
                                <span class="badge rounded-pill bg-warning ml-2">JavaScript</span>
                                <span class="badge rounded-pill bg-secondary ml-2">Intern</span>
                            </div>
                            <img src="asset/img/rocketspark.webp" hover-color="rgba(90, 134, 242, .5)" width="100%" alt="" class="img-wrap project-background">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="site" data-aos="fade-up">
        <div class="content">
            <h3 class="mb-4">How I do it</h3>
            <div class="row">
                <div class="col-sm-4 mb-4">
                    <div class="tech-item" hover-color="#EFD81D6f">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#EFD81D"><path d="M0 0v512h512V0H0zm274.286 397.714c0 49.84-29.44 74.137-72.057 74.137-38.492 0-60.835-19.931-72.172-43.988l39.177-23.714c7.555 13.405 13.292 24.742 29.783 24.742 13.714 0 24.983-6.182 24.983-30.24V237.714h50.286v160zm113.543 72.995c-44.675 0-73.543-20.16-87.635-48L339.429 400c10.285 16.846 23.714 28.069 47.428 28.069 19.932 0 31.509-8.823 31.509-22.572 0-16.491-11.92-22.331-33.92-32l-12.023-5.166c-34.72-14.765-57.737-33.325-57.737-72.514 0-36.08 27.485-62.434 70.445-62.434 30.595 0 52.572 9.508 68.4 37.348L416 294.857c-8.251-14.777-17.143-20.571-30.926-20.571-14.091 0-23.028 8.937-23.028 20.571 0 14.434 8.937 20.274 29.554 29.212l12.023 5.154c40.903 17.531 63.931 35.428 63.931 75.611.012 43.315-34.011 65.875-79.725 65.875z"></path></svg>
                        <div class="d-block ml-3 my-auto">
                            <p class="m-0">JavaScript</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="tech-item" hover-color="#dd4b256f">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#dd4b25"><path d="M64 32l34.94 403.21L255.77 480 413 435.15 448 32zm308 132H188l4 51h176l-13.51 151.39L256 394.48l-98.68-28-6.78-77.48h48.26l3.42 39.29L256 343.07l53.42-14.92L315 264H148l-12.59-149.59H376.2z"></path></svg>
                        <div class="d-block ml-3 my-auto">
                            <p class="m-0">HTML5</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="tech-item" hover-color="#2965f16f">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#2965f1"><path d="M64 32l34.94 403.21L255.77 480 413 435.15 448 32zm308 132H188l4 51h176l-13.51 151.39L256 394.48l-98.68-28-6.78-77.48h48.26l3.42 39.29L256 343.07l53.42-14.92L315 264H148l-12.59-149.59H376.2z"></path></svg>
                        <div class="d-block ml-3 my-auto">
                            <p class="m-0">CSS3</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="tech-item" hover-color="#6FA6606f">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#6FA660" viewBox="0 0 512 512"><path d="M429.76 130.07L274.33 36.85a37 37 0 00-36.65 0L82.24 130.06A38.2 38.2 0 0064 162.83V349a38.26 38.26 0 0018.24 32.8L123 406.14l.23.13c20.58 10.53 28.46 10.53 37.59 10.53 32.14 0 52.11-20.8 52.11-54.29V182a8.51 8.51 0 00-8.42-8.58h-22.38a8.51 8.51 0 00-8.42 8.58v180.51a15 15 0 01-6.85 13.07c-5.9 3.6-14.47 2.84-24.14-2.15l-39.06-23.51a1.1 1.1 0 01-.48-.92V165.46a1.32 1.32 0 01.59-1.06l151.84-93a.82.82 0 01.73 0l151.93 93a1.34 1.34 0 01.55 1.1V349a1.28 1.28 0 01-.45 1l-152.06 90.65a1.22 1.22 0 01-.8 0l-38.83-23.06a7.8 7.8 0 00-7.83-.41l-.34.2c-10.72 6.35-13.6 8-23.54 11.62-1.62.59-5.43 2-5.76 5.77s3.29 6.45 6.51 8.32l51.9 31.87a35.67 35.67 0 0018.3 5.07h.58a35.87 35.87 0 0017.83-5.07l155.43-93.13A38.37 38.37 0 00448 349V162.83a38.21 38.21 0 00-18.24-32.76z"></path><path d="M307.88 318.05c-37.29 0-45.24-10.42-47.6-27.24a8.43 8.43 0 00-8.22-7.32h-19.8a8.44 8.44 0 00-8.26 8.58c0 14.58 5.12 62.17 83.92 62.17 24.38 0 44.66-5.7 58.63-16.49S388 311.26 388 292.55c0-37.55-24.5-47.83-72.75-54.55-49.05-6.82-49.05-10.29-49.05-17.89 0-5.47 0-18.28 35.46-18.28 25.23 0 38.74 3.19 43.06 20a8.35 8.35 0 008.06 6.67h19.87a8.24 8.24 0 006.16-2.86 8.91 8.91 0 002.12-6.44c-2.57-35.55-28.56-53.58-79.24-53.58-46.06 0-73.55 20.75-73.55 55.5 0 38.1 28.49 48.87 71.29 53.33 50 5.17 50 12.71 50 19.37.03 10.38-4.28 24.23-41.55 24.23z"></path></svg>
                        <div class="d-block ml-3 my-auto">
                            <p class="m-0">Node.js</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="tech-item" hover-color="#21609B6f">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 121.74" style="enable-background:new 0 0 122.88 121.74" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#21609B;}</style><g><path class="st0" d="M120.03,90.36l-0.55,1.43c-9.37,18.25-25.98,29.45-49.67,29.94c-11.07,0.23-21.63-2.61-28.52-5.7 C26.41,109.35,13.9,96.95,7.07,83.71c-9.8-18.98-11.57-45.39,8.81-65.11c0.31,0-2.47,4.28-2.16,4.28l-0.56,1.83 c-14.69,45.98,30.56,85.38,74.54,80.88C98.28,104.49,111.76,98.7,120.03,90.36L120.03,90.36L120.03,90.36z M120.03,90.36 L120.03,90.36L120.03,90.36L120.03,90.36z"></path><path class="st0" d="M93.41,71.35c11.07,0.08,22.62-5.1,29.47-12.36c-5.99,15.2-23.33,24.97-46.58,21.86 c-19.47-2.61-38.01-22.2-39.92-41.83c-1.4-14.29,3.58-22.81,11.79-33.16c-2.85,5.41-3.92,9.58-4.18,12.24 C40.86,49.02,68.67,71.19,93.41,71.35L93.41,71.35L93.41,71.35z M93.41,71.35L93.41,71.35L93.41,71.35L93.41,71.35z"></path><path class="st0" d="M121.77,32.97c-1.72,3.95-11.62,11.4-16,12.33c-17.32,3.69-28.41-4.52-34.22-13.87 c-0.86-1.4-2.46-5.21-2.75-6.18C66.55,17.59,67.58,6,74.3,0c-2.02,5.7-2.32,12.33-1.25,16.64c0.65,2.6,2.61,7.15,4.58,10.01 c3.58,5.21,5.85,6.47,10.46,9.24c2.07,1.24,4.3,2.24,5.26,2.52C97.71,39.69,106.92,43.07,121.77,32.97L121.77,32.97L121.77,32.97z M121.77,32.97L121.77,32.97L121.77,32.97L121.77,32.97z"></path></g></svg>
                        <div class="d-block ml-3 my-auto">
                            <p class="m-0">jQuery</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="tech-item" hover-color="#8B5CF66f">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#prefix__clip0)" fill="#8B5CF6"><path d="M2.778 8.054h3.098c.91.01 1.569.354 1.977 1.03.409.677.544 1.6.405 2.772a6.6 6.6 0 01-.358 1.576c-.178.515-.424.98-.74 1.393-.386.526-.798.859-1.237 1-.44.142-.894.212-1.364.212H3.17l-.44 2.879H1.126L2.778 8.054zm1.353 1.727l-.694 4.545c.046.01.093.015.139.015h.162c.74.01 1.356-.086 1.85-.288.493-.212.824-.95.994-2.212.138-1.06 0-1.671-.417-1.833-.408-.161-.92-.237-1.537-.227-.093.01-.181.015-.266.015h-.243l.012-.015M10.088 5.16h1.596l-.451 2.894h1.433c.787.02 1.372.233 1.758.636.393.404.508 1.172.346 2.303l-.774 5.044h-1.619l.74-4.817c.077-.505.054-.863-.07-1.075-.122-.212-.388-.318-.797-.318l-1.283-.016-.948 6.226H8.424l1.664-10.876zM16.484 8.054h3.098c.91.01 1.568.354 1.977 1.03.408.677.543 1.6.404 2.772a6.6 6.6 0 01-.358 1.576c-.177.515-.424.98-.74 1.393-.385.526-.798.859-1.237 1-.44.142-.894.212-1.364.212h-1.387l-.44 2.879H14.83l1.654-10.862zm1.352 1.727l-.693 4.545c.046.01.092.015.138.015h.162c.74.01 1.357-.086 1.85-.288.493-.212.825-.95.994-2.212.139-1.06 0-1.671-.416-1.833-.409-.161-.921-.237-1.538-.227-.092.01-.18.015-.266.015h-.242l.011-.015"></path></g><defs><clipPath id="prefix__clip0"><path fill="#fff" transform="translate(1.125 4.875)" d="M0 0h21.813v14.291H0z"></path></clipPath></defs></svg>
                        <div class="d-block ml-3 my-auto">
                            <p class="m-0">PHP</p>
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
