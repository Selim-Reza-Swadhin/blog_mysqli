<?php
include_once('resources/init.php');
//$conn = mysqli_connect('localhost','root','','blog');
$id = $_GET['id'];
$query = "DELETE FROM posts WHERE id ='$id'";
$delData = mysqli_query($conn, $query);
if ($delData) {
    echo "<script>alert('Data Deleted Successfully.');</script>";
    echo "<script>window.location='manage_post.php';</script>";
}else{
    echo "<script>alert('Data Not Deleted.');</script>";
    echo "<script>window.location='manage_post.php';</script>";
}
