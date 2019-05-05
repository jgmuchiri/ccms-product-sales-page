<?php
//error_reporting(E_ALL);
include "config.php";

require_once 'Charge.php';

if (isset($_POST['pay'])) {
    $charge = new Charge();
    $charge->pay();
}

//add this code for any page that required affiliates
require_once 'Affiliates.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo Config::settings('site_name'); ?></title>
    <meta name="description" content="Increase donations made online Increase overall giving Collect contributions for special events, concerts or ticket sales.">
    <meta name="title" content="GIVEu - Church content management syste with online giving">
    <meta name="author" content="A&M Digital Technologies">
    <meta name="keywords" content="church,cms,church cms,church content management system, church content management system, online giving,give,tithe,offering,online offering,contribution,contribution,support">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow"/>

    <link rel="icon" type="image/png" href="/favicon.png"/>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/fonts/fa/font-awesome.css" rel="stylesheet">

<!--    <META name="robots" content="noindex, nofollow"/>-->

    <script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', '<?php echo Config::settings("g-analytics"); ?>', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<!-- Header -->
<header id="layout-header">

    <!-- Nav -->
    <nav id="layout-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if (isset($jvzoo)): ?>
                <a class="navbar-brand" style="background-image: url('/assets/img/logo.png');"
                   href="/">&nbsp;&nbsp;</a>
                <?php else: ?>
                <a class="navbar-brand" style="background-image: url('/assets/img/logo.png');"
                   href="/">&nbsp;&nbsp;</a>
                <?php endif;?>
            </div>
            <div class="collapse navbar-collapse navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a class="nav-item" href="#features">Features</a></li>
                    <li class=""><a class="nav-item" href="#pricing">Pricing</a></li>
                    <li class=""><a class="nav-item" href="http://amdtllc.com/#contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div>
        </div>
    </nav>
</header>
