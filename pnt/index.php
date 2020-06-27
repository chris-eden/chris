<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/icone-infogerance.gif" type="image/x-icon">
    <meta name="description" content="">


    <title>Home</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.com">
                         <img src="assets/images/icone-infogerance.gif" alt="Mobirise" title="" style="height: 5rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-danger display-4" href="https://mobirise.com">PERSONNE NE CONNAIS TOUT</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">

                <li class="nav-item">
                    <a class="nav-link link text-black display-7" href="index.html">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn">Acuille</span></a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-black display-7" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbri-add-submenu mbr-iconfont mbr-iconfont-btn"></span>

                        Services
                    </a><div class="dropdown-menu"><div class="dropdown">
                            <a class="dropdown-item dropdown-toggle text-black display-7" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="false">
                                <span class="mbrib-responsive mbr-iconfont mbr-iconfont-btn"></span>POO</a>
                            <div class="dropdown-menu dropdown-submenu">
                                <a class="dropdown-item text-black display-7" href="#">HTML</a>
                                <a class="dropdown-item text-black display-7" href="#">CSS</a>
                                <a class="dropdown-item text-black display-7" href="#">PHP</a>
                                <a class="dropdown-item text-black display-7" href="#">JAVA</a>
                                <a class="dropdown-item text-black display-7" href="#">C#</a>
                                <a class="dropdown-item text-black display-7" href="#">PYTHON</a>
                            </div></div><div class="dropdown">
                            <a class="dropdown-item text-black dropdown-toggle display-7" href="https://mobirise.com" aria-expanded="false" data-toggle="dropdown-submenu">
                                <span class="mobi-mbri mobi-mbri-responsive mbr-iconfont mbr-iconfont-btn"></span>PRGR MB</a>
                            <div class="dropdown-menu dropdown-submenu">
                                <a class="dropdown-item text-black display-7" href="android.html" aria-expanded="false">
                    <span class="socicon socicon-android mbr-iconfont mbr-iconfont-btn">

                </span>Android</a>
                                <a class="dropdown-item text-black display-7" href="blackberry.php" aria-expanded="false">
                                    <span class="socicon socicon-blackberry mbr-iconfont mbr-iconfont-btn">

                                    </span>BlackBerry</a>
                                <a class="dropdown-item text-black display-7" href="iso.html" aria-expanded="false">
                        <span class="socicon socicon-apple mbr-iconfont mbr-iconfont-btn">

                        </span>ISO</a>
                            </div>
                        </div>
                        <div class="dropdown"><a class="dropdown-item dropdown-toggle text-black display-7" href="https://mobirise.com" aria-expanded="true" data-toggle="dropdown-submenu">
                                <span class="socicon socicon-internet mbr-iconfont mbr-iconfont-btn">
                                </span>RESAU</a>
                            <div class="dropdown-menu dropdown-submenu">
                                <a class="dropdown-item text-black display-7" href="#" aria-expanded="false">RESEAU 1</a>
                                <a class="dropdown-item text-black display-7" href="#" aria-expanded="false">RESEAU 2</a>
                                <a class="dropdown-item text-black display-7" href="#" aria-expanded="false">ADRESSAGE IP</a>
                            </div></div></div></li><li class="nav-item">
                    <a class="nav-link link text-black display-7" href="About_Us.html"><span class="mbri-users mbr-iconfont mbr-iconfont-btn">

                        </span>

                        About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-7" href="login.php">LOGOUT</a>
                    <h3> bienvenue <?= $_SESSION['username'] ?></h3>
                </li>

            </ul>

        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/i">free web creation software</a></section>
<section class="header3 cid-rVddvzkXkG mbr-parallax-background" id="header3-7">



    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 45%;">
                <img src="assets/images/imagescaa64vdy-554x554.jpg" alt="Mobirise" title="">
            </div>

            <div class="media-content">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">Personne ne connais tout</h1>

                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-5">
                        Full width intro with image background, color overlay and a picture on the left. You can easily change the size of image in block parameters.
                    </p>
                </div>
                <div class="mbr-section-btn"><a class="btn btn-md btn-primary-outline display-4" href="#">
                        <span class="mobi-mbri mobi-mbri-question mbr-iconfont mbr-iconfont-btn">

                        </span>EN SAVOIR PLUS</a></div>
            </div>
        </div>
    </div>

</section>

<section once="footers" class="cid-rVdcappcPw" id="footer7-5">





    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">





                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="mbr-bold text-danger" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="mbr-bold text-danger" href="#" target="_blank">Services</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7"></li>
                    <li class="foot-menu-item mbr-fonts-style display-7"></li>
                    <li class="foot-menu-item mbr-fonts-style display-7"></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">






                    <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7"><em>
                        © Copyright 2020 Pesonne ne connais ne tout</em></p>
            </div>
        </div>
    </div>
</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/nav-dropdown.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/theme/js/script.js"></script>


</body>
</html>
