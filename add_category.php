<?php include_once('resources/init.php'); ?>


    <!--Header-->
<?php require_once 'header.php'; ?>

    <!-- Content
    ================================================== -->
    <div id="content-wrap">

        <div class="row">

            <div id="main" class="eight columns">

                <article class="entry">
                    <header class="entry-header">
                        <?php if (isset($error)) {
                            echo $error;
                        }?>
                        <h2 class="entry-title">
                            <h2>Add Category</h2>
                        </h2>

                        <div class="entry-meta">
                            <form action='' method='post'>
                                <label for='name'>Name </label>
                                <input type='text' name='name'/>
                                <input type='submit' value='Add Category'/>
                            </form>
                        </div>

                        <?php
                       // $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
                        if (isset($_POST['name'])) {
                           $name = trim($_POST['name']);
                           $name = stripcslashes($name);
                           $name = htmlspecialchars($name);
                           $name = mysqli_real_escape_string($conn, $name);

                            if (empty($name)) {
                                echo $error = '<span style="color: red">You must submit the category name</span>';
                            } else if (count($name) > 1) {
                                echo $error = '<span style="color: red">That category already exists</span>';
                            } else if (strlen($name) > 24) {
                                echo $error = '<span style="color: red">The category name only be up to 24 characters only</span>';
                            }

                            if (!isset($error)) {
                                $query = "INSERT INTO categories(name) VALUES ('$name')";
                                $inserted_rows = mysqli_query($conn, $query);
                                if ($inserted_rows) {
                                    echo "<span style='color: green'>Message Sent Successfully.</span>";
                                } else {
                                    $error = "<span style='color: red'>Message Sent Not Successfully.</span>";
                                }
                                //header("Location:add_category.php");
                                //die();
                            }

                        }
                        ?>

                    </header>


                    <div class="entry-content">
                        <p><!--insert here--></p>
                    </div>


                    <a class="read" href="admin.php"><i class="fas fa-angle-double-left"> Back Before</i></a>
                </article> <!-- end entry -->

            </div> <!-- end main -->

<!---------------------- start sidebar ----------------------------->
            <?php require_once 'sidebar.php'; ?>
<!---------------------- end sidebar ------------------------------->

        </div> <!-- end row -->

    </div> <!-- end content-wrap -->


    <!-- Footer
    ================================================== -->
<?php require_once 'footer.php'; ?>