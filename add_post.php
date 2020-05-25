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
                    <header class="entry-header">
                        <?php
                        if (isset($errors) && !empty($errors)) {
                            echo "<ul><li>", implode("</li><li>", $errors), "</li></ul>";
                        }
                        ?>
                        <h2 class="entry-title">
                            <h2>Add Post</h2>
                        </h2>

                        <div class="entry-meta">
                            <form action='' method='post'>
                                <div>
                                    <label for='title'>Title</label>
                                    <input type='text' name='title' size="80"/>
                                </div>
                                <div>
                                    <label for='contents'>Content</label>
                                    <textarea name='contents' cols=80
                                              rows=10></textarea>
                                </div>
                                <div>
                                    <label for='category'>Category</label>
                                    <select name='cat_id'>
                                        <?php
                                        foreach (get_categories() as $category) {
                                            ?>
                                            <option value='<?= $category['id'] ?>'><?= $category['name'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <p><input type='submit' value='Add Post'/></p>
                            </form>
                        </div>

                    </header>

                    <?php
                    if (isset($_POST['title'], $_POST['contents'], $_POST['cat_id'])) {
                        $title = trim($_POST['title']);
                        $title = stripcslashes($title);
                        $title = htmlspecialchars($title);
                        $title = mysqli_real_escape_string($conn, $title);

                        $contents = trim($_POST['contents']);
                        $contents = stripcslashes($contents);
                        $contents = htmlspecialchars($contents);
                        $contents = mysqli_real_escape_string($conn, $contents);
                        $cat_id = trim($_POST['cat_id']);

                        if (empty($title) || empty($contents)) {
                            echo "<span style='color: orangered'>Field not empty.</span>";
                        } else {
                            $query = "INSERT INTO posts(title,contents,cat_id,date_posted) VALUES ('$title','$contents','$cat_id', now())";
                            $inserted_rows = mysqli_query($conn, $query);
                            if ($inserted_rows) {
                                echo "<span style='color: green'>Post Uploaded Successfully.</span>";
                            } else {
                                $error = "<span style='color: red'>Post Uploaded Not Successfully.</span>";
                            }
                        }
                    }
                    ?>

                    <a class="read" href="admin.php"><i class="fas fa-angle-double-left"> Back Before</i></a>
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