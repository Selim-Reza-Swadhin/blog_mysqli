<?php
include_once('resources/init.php');
//$posts = get_posts(null,$_GET['id']);
//$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//$id = $_GET['id'];
//$query = "select * from posts where id='$id'";
//$posts = mysqli_query($conn, $query);

//categories table
//$cat_query = "select * from categories";
//$cat_posts = mysqli_query($conn, $cat_query);
?>

<?php
$id = $_GET['id'];
//$cat_id = $_GET['cat_id'];
$query = "SELECT
              `posts`.`id` AS `post_id` ,
               `categories`.`id` AS `category_id`,
               `title`,`contents`,`date_posted`,
               `categories`.`name`
               FROM `posts`
               INNER JOIN `categories` ON `categories`.`id` = `posts`.`cat_id`WHERE `posts`.`cat_id` = {$id}";
//if(isset($id)){
//    $id = (int)$id;
//    $query .= " WHERE `posts`.`id` = {$id} ";
//}
//if(isset($cat_id)){
//    $cat_id = (int)$cat_id;
//    $query .= " WHERE `cat_id` = {$cat_id} ";
//}

//$query .= "ORDER BY `post_id` DESC";


$query = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($query)) {
    $posts[] = $row;
}
?>


    <script type="text/javascript">
        function confirm_delete() {
            return confirm("Are you sure you want to delete this record?");
        }
    </script>

    <!--Header-->
<?php require_once 'header.php'; ?>

    <!-- Content
    ================================================== -->
    <div id="content-wrap">

        <div class="row">

            <div id="main" class="eight columns">

                <article class="entry">
                    <?php
                    foreach ($posts as $post) {
                        ?>
                        <header class="entry-header">

                            <div class="entry-meta">
                                <h2 class="entry-title">
                                    <h2><a href='manage_post.php?id=<?= $post['post_id']; ?>'><?= $post['title']; ?></a></h2>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li> <?= date('d-m-y h:i:s', strtotime($post['date_posted'])); ?></li>
                                        <span class="meta-sep">&bull;</span>
                                        <li><a href="#" title="" rel="category tag">In <a
                                                        href='category.php?id=<?= $post['category_id']; ?>'><?= "<font color='green'>" . $post['name'] . "</font>"; ?></a>
                                        </li>
                                        <span class="meta-sep">&bull;</span>
                                        <li><!-- Blogger user--></li>
                                    </ul>
                                </div>
                                </p>
                                <div style="text-align: justify"><?= nl2br($post['contents']); ?></div>
                                <!--     <menu>-->
                                <!--        <ul>-->
                                <!--            <li><a href='delete_post.php?id=--><?//= $post['id'];
                                ?><!--' onclick='return confirm_delete()'><font color="red">Delete This Post</font></a>&nbsp;||</li>-->
                                <!--            <li><a href='edit_post.php?id=--><?//= $post=['id'];
                                ?><!--' ><font color="blue">Edit This Post</font></a></li>-->
                                <!--        </ul>-->
                                <!--     </menu>-->
                            </div>
                            <br><br>

                        </header>

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