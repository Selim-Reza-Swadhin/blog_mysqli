<?php
include_once('resources/init.php');
session_start();
?>

<?php

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $name = $_POST['name'];
//    $password = sha1($_POST['password']);
//
//    $name = mysqli_real_escape_string($conn, $name);
//    $password = mysqli_real_escape_string($conn, $password);
//
//    $query = "SELECT * FROM admin WHERE name='$name' AND password='$password'";
//    $result = mysqli_query($conn, $query);
//    $cnt = mysqli_num_rows($result);

//    if ($cnt == 1) {
//        header("location:admin.php");
//    } else {
//
//        echo "<span style='color:red; font-size: 18px;'>Username or Password not matched !!</span>";
//    }
//}

?>


<?php
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $password = sha1($_POST['password']);
    $sql = "select * from admin where uname='$uname' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $cnt = mysqli_num_rows($result);

//    if ($cnt==1){
//        header("location:admin.php");
//    }else{
//        echo "<span style='color: red'>Login unsuccessful</span>";
//    }

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($result) {
        if ($cnt == 1) {
// store session data
            $row = mysqli_fetch_assoc($result);
            //echo $row['name'];
            $_SESSION['selimName'] = $row['uname'];
            $_SESSION['selimImage'] = $row['image'];
            header("location:admin.php");
        } else {
            header("location:login.php");
        }
    }
    mysqli_close($conn);
}
?>

