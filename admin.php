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

                        <h2 class="entry-title">
                            <h2></h2>
                        </h2>

                        <div class="entry-meta">

                            <button type='button' value='Add Category'/>
                                <a href="add_category.php">Add Category</a>
                            </button>
                            <button type='button' value='Add Category'/>
                                <a href="add_post.php">Add Post</a>
                            </button>
                            <button type='button' value='Add Category'/>
                                <a href="category_list.php">Delete Categories</a>
                            </button>
                            <button type='button' value='Add Category'/>
                                <a href="manage_post.php">Manage Post</a>
                            </button>
                            <button type='button' value='Add Category'/>
                                <a href="display.php">Message</a>
                            </button>


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
    <!-- Footer
  ================================================== -->
<?php require_once 'footer.php'; ?>