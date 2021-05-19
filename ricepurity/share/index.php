<?php

if (!$_GET['s'] && !is_numeric($_GET['s'])) {
    die();
} else {
    $score = $_GET['s'];
}

//Set the Content Type
header('Content-type: image/jpeg');

// Create Image From Existing File
$jpg_image = imagecreatefrompng('base.png');

// Allocate A Color For The Text
$white = imagecolorallocate($jpg_image, 249, 128, 64);

// Set Path to Font File
$font_path = '/home/bargrooves/public_chezzer/ricepurity/share/font.ttf';

// Set Text to Be Printed On Image
$text = $score;

// Print Text On Image
imagettftext($jpg_image, 100, 0, 90, 450, $white, $font_path, $text);

// Send Image to Browser
imagepng($jpg_image);

// Clear Memory
imagedestroy($jpg_image);
?>