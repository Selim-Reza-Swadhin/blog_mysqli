<?php
include_once('resources/init.php');
?>

<!--Header-->
<?php require_once 'header.php'; ?>
<!-- Content
================================================== -->
<div id="content-wrap">

    <div class="row">

        <div id="main" class="eight columns">

            <article class="entry">
                <?php
                session_unset();
                session_destroy();
                //echo "<br><b> Thank you for visiting our site</b><br>";
                header('location:login.php');
                ?>

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
