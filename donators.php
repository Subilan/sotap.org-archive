<?php 
$_p = $_SERVER["PHP_SELF"];
require "main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoTap Donators | 捐助者名单</title>
    <link rel="stylesheet" href="/css/mdui.min.css" />
    <link rel="icon" href="https://sotap.oss-cn-qingdao.aliyuncs.com/favicon.ico">
    <link rel="stylesheet" href="https://fonts.loli.net/css?family=Poppins:300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" href="https://fonts.loli.net/css?family=Space+Mono:400,700&display=swap"/>
    <link rel="stylesheet" href="/css/donators.css" />
    <link rel="stylesheet" href="/css/animate.css" />
    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>

<body>
    <?=$nav;?>
    <div class="mdui-theme-primary-amber mdui-theme-accent-amber">
        <div class="mdui-container">
            <div id="container" class="fadeIn faster animated donator-container">
                <h1 id="title" class="hero zoomIn faster">Donators</h1>
                <h2 id="subtitle" class="subtitle hidden">SoTap 捐助者名单</h2>
                <ul class="donator-list" id="list" style="visibility: hidden;">
                    <span id="loading-spinner" class="mdui-spinner"></span>
                </ul>
            </div>
        </div>
    </div>
    <?=$footer?>
</body>
<script src="/js/mdui.min.js"></script>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/donators.js"></script>
</html>
