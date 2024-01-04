<?php function getStyles($title, $path)
{
    ?>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <!-- Shery.js -->
    <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />
    <!-- Style -->
    <link rel="stylesheet" href="<?= $path ?>CSS/style.css" />
    <link rel="stylesheet" href="<?= $path ?>CSS/sections.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper CSS -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= $path ?>Images/favicon.png" type="image/x-icon" />





<?php }
function getScript($path)
{ ?>

    <!-- JS -->
    <!-- swiper  -->
    <script src="
            https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js
            "></script>
    <!-- tilt -->
    <script src="<?= $path ?>JS/vanilla-tilt.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"
        integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"
        integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Shery -->
    <script type="text/javascript" src="https://unpkg.com/sheryjs/dist/Shery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.155.0/three.min.js"></script>
    <script src="<?= $path ?>JS/script.js"></script>
    <script src="<?= $path ?>JS/pages.js"></script>


<?php } ?>