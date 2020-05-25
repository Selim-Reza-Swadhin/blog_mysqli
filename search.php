<?php
include_once('resources/init.php');

//search option

if (!isset($_GET['search']) || $_GET['search'] == NULL) {
    //header("Location:404.php");
    echo 'Not Found';
} else {
    $search = $_GET['search'];
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
                $query = "SELECT * FROM posts WHERE title LIKE '%$search%' || contents LIKE '%$search%'";
                $post = mysqli_query($conn, $query);
                if ($post) {
                    while ($result = mysqli_fetch_assoc($post)) {?>
                        <header class="entry-header">

                            <h2 class="entry-title">
                                <h2><a href='index.php?id=<?= $result['post_id']; ?>'><?= $result['title']; ?></a></h2>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li> <?= date('d-m-y h:i:s:a', strtotime($result['date_posted'])); ?></li>
                                    <span class="meta-sep">&bull;</span>
                                    <?php //foreach($postss as $poost){?>
                                    <li>
                                        <a href="#" title="" rel="category tag">In
                                            <a href='category.php?id=<?php //echo $poost['category_id']; ?>' ><?php //echo "<font color='green'>".$poost['name']."</font>"; ?></a>
                                    </li>
                            <?php //} ?>
                                    <span class="meta-sep">&bull;</span>
                                    <li><!-- Blogger user--></li>
                                </ul>
                            </div>
                        </header>
                            <div class="entry-content">
                                <p><?= nl2br($result['contents']); ?></p>
                            </div>


                    <?php }}else{?>
               <h3 style="color: red; text-align: center">Your Search Query Not Found !!</h3>;
                <?php } ?><!-- End if loop -->

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
