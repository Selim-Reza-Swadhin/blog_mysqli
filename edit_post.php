<?php
include_once('resources/init.php');


if (!isset($_GET['id']) || $_GET['id'] == NULL) {
    echo "<script>window.location='manage_post.php';</script>";
    //    header("Location:manage_post.php");
} else {
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
                    <header class="entry-header">
                        <?php
                        if (isset($errors) && !empty($errors)) {
                            echo "<ul><li>", implode("</li><li>", $errors), "</li></ul>";
                        }
                        ?>
                        <h2 class="entry-title">
                            <h2>Edit Post And Category</h2>
                        </h2>

                        <div class="entry-meta">

                            <?php
                            $query = "select * from posts where id='$id'";
                            $post = mysqli_query($conn, $query);
                            if ($post) {
                                while ($postresult = mysqli_fetch_assoc($post)) {
                                    ?>

                                    <form action='' method='post'>
                                        <div>
                                            <label for='title'>Title</label>
                                            <input type='text' name='title' value='<?= $postresult['title']; ?>'/>
                                        </div>
                                        <div>
                                            <label for='contents'>Content</label>
                                            <textarea name='contents' cols='80'
                                                      rows='15'><?= $postresult['contents']; ?></textarea>
                                        </div>
                                        <div>
                                            <label for='category'>Category</label>
                                            <select id="select" name="category">
                                                <?php
                                                $query = "SELECT * FROM categories";
                                                $category = mysqli_query($conn, $query);
                                                if ($category) {
                                                while ($result = mysqli_fetch_assoc($category)) {
                                                ?>
                                                <option
                                                    <?php
                                                    if ($postresult['cat_id'] == $result['id']) { ?>

                                                        selected="selected" ;

                                                        <?php } ?>value="<?= $result['id']; ?>"><?= $result['name']; ?></option>

                                                <?php }
                                                } ?><!-- End if and while loop -->

                                            </select>
                                        </div>
                                        <p><input type='submit' name="submit" value='Add Post'/></p>
                                    </form>
                                <?php }
                            } ?>
                        </div>

                    </header>


                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $title = trim($_POST['title']);
                        $contents = trim($_POST['contents']);
                        $title = mysqli_real_escape_string($conn, $title);
                        $contents = mysqli_real_escape_string($conn, $contents);
                        $category = mysqli_real_escape_string($conn, $_POST['category']);


                        if (!empty($title) && !empty($contents) && !empty($category)) {

                            $query = "UPDATE posts
                      SET
                      title       = '$title',
                      contents    = '$contents',
                      cat_id    = '$category'
                      WHERE id    ='$id'";

                            $inserted_row = mysqli_query($conn, $query);

                            if ($inserted_row) {

                                echo "<span style='color: green'>Post Updated Successfully.</span>";

                            } else {

                                echo "<span style='color: red'>Post Not Updated Successfully.</span>";
                            }
                        }

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