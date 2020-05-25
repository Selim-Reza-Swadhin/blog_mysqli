<?php
include_once('resources/init.php');

//$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>

<!--======================= Read more ==============================-->
<?php
if (!isset($_GET['id']) || $_GET['id'] == NULL){
    header("Location:404.php");
}else{
    $id = $_GET['id'];
}
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

                $query = "SELECT * FROM posts where id=$id";
                $read_more = mysqli_query($conn, $query);

                //if ($about_us) {
                //while ($resultt = mysqli_fetch_assoc($about_us)) {
                foreach ($read_more as $post) {
                    ?>
                    <header class="entry-header">

                        <h2 class="entry-title">
                            <h2><a href='index.php?id=<?= $post['id']; ?>'><?= $post['title']; ?></a></h2>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li> <?= date('d-m-y h:i:s:a', strtotime($post['date_posted'])); ?></li>
                            </ul>
                        </div>

                    </header>


                    <div class="entry-content clear">
                        <p style="text-align: justify"><?= nl2br($post['contents']); ?></p>
                        <a class="read" href="index.php"><i class="fas fa-angle-double-left"> Back Before</i></a>
                    </div>
                    <?php
                }
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
