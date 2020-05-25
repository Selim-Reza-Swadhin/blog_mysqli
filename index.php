<?php
include_once('resources/init.php');

//  <!-- Pagination -->
$per_page= 4;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$start_form = ($page - 1) * $per_page;

//    <!-- Pagination -->


$id = $_GET['id'];
$cat_id = $_GET['cat_id'];
    $query = "SELECT
              `posts`.`id` AS `post_id` ,
               `categories`.`id` AS `category_id`,
               `title`,`contents`,`date_posted`,
               `categories`.`name`
               FROM `posts`
               INNER JOIN `categories` ON `categories`.`id` = `posts`.`cat_id`" ;
    if(isset($id)){
        $id = (int)$id;
        $query .= " WHERE `posts`.`id` = {$id} ";
    }
    if(isset($cat_id)){
        $cat_id = (int)$cat_id;
        $query .= " WHERE `cat_id` = {$cat_id} ";
    }

    $query .= "ORDER BY `post_id` DESC LIMIT $start_form, $per_page";


    $query = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($query)){
        $posts[] = $row;
    }

//$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//$query = "select * from posts order by id desc";
//$posts = mysqli_query($conn, $query);
?>

<!--======================= Read more ==============================-->
<?php
function textShorten($text, $limit=700){
    $text = $text. " ";
    $text = substr($text, 0, $limit);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text. " .....";
    return $text;
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
                    foreach ($posts as $post) {
                        ?>
                        <header class="entry-header">

                            <h2 class="entry-title">
                                <h2><a href='index.php?id=<?= $post['post_id']; ?>'><?= $post['title']; ?></a></h2>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li> <?= date('d-m-y h:i:s:a', strtotime($post['date_posted'])); ?></li>
                                    <span class="meta-sep">&bull;</span>
                                    <li><a href="#" title="" rel="category tag">In <a
                                                    href='manage_category.php?id=<?= $post['category_id']; ?>'><?= "<font color='green'>" . $post['name'] . "</font>"; ?></a>
                                    </li>
                                    <span class="meta-sep">&bull;</span>
                                    <li><!-- Blogger user--></li>
                                </ul>
                            </div>

                        </header>

                        <div class="entry-content clear">
                            <p style="text-align: justify"><?= textShorten(nl2br($post['contents']), 600); ?></p>
                            <a class="read" href="readmore.php?id=<?= $post['post_id'];?>">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>

                        <?php
                    }
                    ?>

                        <!-- Pagination Start -->
                        <?php
                        $query = "SELECT * FROM posts";
                        $result= mysqli_query($conn, $query);
                        $total_rows = mysqli_num_rows($result);
                        $total_pages = ceil($total_rows / $per_page);

                        echo "<span class='pagination'><a href='index.php?page=1'>".'First Page'."</a>";

                        for($i = 1; $i <= $total_pages; $i++){
                            echo "<a href='index.php?page=".$i."'>".$i."</a>";
                        }

                        echo"<a href='index.php?page=$total_pages'>".'Last Page'."</a></span>"?>
                        <!-- Pagination End -->
                        <!-- Counter Page -->
                    <tr>
                        <td></td>
                        <td>
                            <?php

                            $filename = "counter.txt";
                            $fp = fopen($filename, 'r');
                            $counter = fread($fp, filesize($filename));
                            fclose($fp);
                            $counter = $counter + 1;
                            echo "<p class='total clear'>Total Page Viewers : ".$counter."</p>";
                            $fp = fopen($filename, 'w');
                            fwrite($fp, $counter);
                            fclose($fp);
                            ?>
                        </td>
                    </tr>


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