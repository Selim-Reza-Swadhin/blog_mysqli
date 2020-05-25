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
                            <form action="adminLogin.php" method="post">
                                <label for="ff">Username</label>
                                <input type="text" id="ff" required="" name="uname" size="40" placeholder="Uername">
                                <input type="text" name="password" size="40" required placeholder="Password">
                                <input type="submit" name="submit">

                            </form>

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