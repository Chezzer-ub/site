<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modernized Rice Purity Test</title>
    <meta name="description" content="The Purity Test has historically served as a segue from O-week to true college life at Rice. It's a voluntary opportunity for O-week groups to bond, and for students to track the maturation of their experiences throughout college.">
    <meta name="keywords" content="Rice Purity Test, Rice Purity">
    <meta name="author" content="Chezzer">
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css?<?php echo filemtime("../asset/css/bootstrap.min.css")?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="purity.css?<?php echo filemtime("./purity.css")?>">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="main">
        <div class="intro">
            <h1 class="mb-4"><b>Rice Purity Test 🌄</b></h1>
            <p class="text-muted">
                The Purity Test has historically served as a segue from O-week to true college life at Rice.
                It's a voluntary opportunity for O-week groups to bond, and for students to track the maturation
                of their experiences throughout college.
            </p>
            <p class="text-danger">Caution: This is not a bucket list. Completion of all items on this test will likely result in death.</p>
        </div>
        <div class="form">
            <h5 class="mb-3"><b>Questions</b></h5>
            <div id="questions">
                <span>Have you ever...</span>
            </div>
            <h5 class="mt-4" id="calculate"><b>Calculate My Score</b></h5>
        </div>
        <div class="score">
            <div class="w-100 mt-5">
                <center>
                    <h5><b>Your score:</b></h5>
                    <h1 id="final-score"></h1>
                    <p class="text-muted" id="score-message">🎉 Nice One!</p>
                    <span class="text-muted">Share with your friends:</span>
                    <input type="text" class="form-control" id="share" value="" readonly>
                    <h6 class="button" id="try-again">Try Again</h6>
                </center>
            </div>
        </div>
        <p class="mt-5 footer-text">This site does not record, track or store any answers you give, all logic is handled client-side. We do not store any cookies for potential tracking use. If you have any inquiries please feel free to contact me on Discord: @Chezzer#6969</p>
        <p class="footer-text">Made with ❤ by <a href="/">Chezzer</a> in New Zealand.</p>
    </div>
    <script src="/site/s/jquery.js"></script>
    <script src="/asset/js/bootstrap.bundle.min.js?<?php echo filemtime("../asset/js/bootstrap.bundle.min.js")?>"></script>
    <script src="/asset/js/jquery-3.6.0.min.js?<?php echo filemtime("../asset/js/jquery-3.6.0.min.js")?>"></script>
    <script src="purity.js"></script>
</body>

</html>
