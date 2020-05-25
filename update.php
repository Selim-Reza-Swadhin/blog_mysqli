<?php
include_once('resources/init.php');

if (!isset($_GET['id']) || $_GET['id'] == NULL) {
    echo "<script>window.location='manage_post.php';</script>";
    //    header("Location:postlist.php");
} else {
    $postid = $_GET['id'];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $conn = mysqli_connect('localhost', 'root', '', 'blog_oop');
                    $title = mysqli_real_escape_string($conn, $_POST['title']);
                    $contents = mysqli_real_escape_string($conn, $_POST['contents']);
                    $category = mysqli_real_escape_string($conn, $_POST['category']);


                if ($title == "" || $contents == "" || $category == "") {
                    echo "<span class='error'>Field must not be empty</span>";

                }else {
                            $query = "UPDATE posts
                                      SET
                                      title       = '$title',
                                      contents    = '$contents',
                                      category    = '$category'
                                      WHERE id    ='$postid'";

                           $conn = mysqli_connect('localhost', 'root', '', 'blog_oop');
                            $inserted_row = mysqli_query($conn, $query);

                            if ($inserted_row) {

                                echo "<span class='success'>Post Updated Successfully.</span>";

                            } else {

                                echo "<span class='error'>Post Not Updated Successfully.</span>";
                            }
                        }

                    }

                ?>
