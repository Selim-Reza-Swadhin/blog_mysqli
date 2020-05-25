<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>K!</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
     ================================================== -->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/pagination.css">

    <!--
    Font-awesome
    =======================================-->
    <link rel="stylesheet" href="css/css/all.min.css">

    <!-- Script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- Favicons
     ================================================== -->
    <link rel="shortcut icon" href="favicon.png">
    <style>
        body {
            background: url(css/img/header-content-bg_@2x1.png) repeat fixed 0 0 #fff;
        }
    </style>

</head>

<body>

<!-- Header
================================================== -->
<header id="top">

    <div class="row">

        <div class="header-content twelve columns">

            <h1 id="logo-text"><a href="index.php" title="">Blog</a></h1>
            <p id="intro">You want to be at my level? CLIMB BITCH!</p>

        </div>

    </div>

    <nav id="nav-wrap">

        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

        <div class="row">

            <ul id="nav" class="nav">
                <li class="current"><a href="index.php">Home</a></li>
                <?php
                if (isset($_SESSION['selimName'])) {?>
                <li class="has-children"><a href="#">Dropdown</a>
                    <ul>
                        <li><a href="#">Submenu 01</a></li>
                        <li><a href="#">Submenu 02</a></li>
                        <li><a href="#">Submenu 03</a></li>
                    </ul>
                </li>
                <li><a href="#">Demo</a></li>
                <li><a href="#">Archives</a></li>
                <li class="has-children"><a href="#">Blog</a>
                    <ul>
                        <li><a href="#">Blog Entries</a></li>
                        <li><a href="#">Single Blog</a></li>
                    </ul>
                </li>
                <li><a href="admin.php">Admin</a></li>
                <?php } ?>
                <li><a href="page.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <style>
                    .navimg{width: 35px;height: 40px; border-radius: 50%;margin-left: 20px;}
                </style>
                <?php if (isset($_SESSION['selimImage'])) {?>
                <li><a href=""><img class="navimg" src="<?= $_SESSION['selimImage']?>" alt="no image"></a></li>
                <?php } ?>
                <?php if (isset($_SESSION['selimName'])) {?>
                <li>
                    <a href="" style="color: blue;"><?= $_SESSION['selimName'];?></a>
                </li>
                <?php } ?>

                <!-- Main Session Variable Start -->

                <?php
                if (!isset($_SESSION['selimName'])) {
                    echo "<li><a href='login.php'>LogIn</a></li>";
                }
                if (isset($_SESSION['selimName'])) {
                    echo "<li><a style='color: #F72322;' href='logout.php'>Logout</a></li>";
                }
                ?>
            </ul> <!-- end #nav -->

        </div>

    </nav> <!-- end #nav-wrap -->

</header> <!-- Header End -->
