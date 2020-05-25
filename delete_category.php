<?php
include_once('resources/init.php');

//$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$id = $_GET['id'];
$delquery = "DELETE FROM categories WHERE id ='$id'";
$delData = mysqli_query($conn, $delquery);
if ($delData) {
    echo "<script>alert('Data Deleted Successfully.');</script>";
    echo "<script>window.location='category_list.php';</script>";
}else{
    echo "<script>alert('Data Not Deleted.');</script>";
    echo "<script>window.location='category_list.php';</script>";
}