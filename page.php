<?php include_once('resources/init.php');?>
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
    <link rel="shortcut icon" href="favicon.png" >
    <style>
        body{
            background:url(css/img/header-content-bg_@2x1.png)repeat fixed 0 0 #fff;
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
			      	<li><a href="index.php">Home</a></li>
			      	<li class="current"><a href="page.php">About</a></li>
			   	</ul> <!-- end #nav -->

	   	</div>

	   </nav> <!-- end #nav-wrap -->

   </header> <!-- Header End -->

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
					<header class="entry-header">

						<h2 class="entry-title">
							<h2>About</h2>
						</h2>

						<div class="entry-meta">
	Developer: Selim Reza Swadhin<br/>
	Bachelor of Science in Information Technology
						</div>

					</header>


					<div class="entry-content">
						<p><!--insert here--></p>
					</div>


				</article> <!-- end entry -->

   		</div> <!-- end main -->

        <!-- start sidebar -->
        <?php require_once 'sidebar.php'; ?>
        <!-- end sidebar -->

    </div> <!-- end row -->

   </div> <!-- end content-wrap -->


   <!-- Footer
   ================================================== -->
<?php require_once 'footer.php'; ?>