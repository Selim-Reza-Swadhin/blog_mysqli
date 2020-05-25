<?php include_once('resources/init.php');?>

<?php
//$conn = mysqli_connect("localhost", "root", "", "blog_oop");
$sql = "select * from tbl_contact order by id desc";
$res = mysqli_query($conn, $sql);

?>

<!-- Header
================================================== -->
<?php include_once('header.php');?>

<!-- Content
================================================== -->
<div id="content-wrap">

    <div class="row">

        <div id="main" class="eight columns">

            <article class="entry">
                <header class="entry-header">

                    <h2 class="entry-title">
                        <h2>Message</h2>
                        <hr>
                    </h2>

                    <!--Table part only read-->
                    <table border="1" width="600" height="70">
                        <tr style="text-align: center;border-bottom: 1px solid greenyellow;">
                            <td>Id</td>
                            <td>Email</td>
                            <td>Subject</td>
                            <td>Message</td>
                            <td>Time</td>
                            <td>Action</td>
                        </tr>
                        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr style="text-align: center;border-bottom: 1px solid orangered;">
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['subject']; ?></td>
                                <td>
                <textarea name="" id="" cols="25" rows="10">
                    <?= $row['message']; ?>
                </textarea>
                                </td>
                                <td><?= date('d-M-y h:i:s:a', strtotime($row['date_posted'])); ?></td>
                                <td>
                                    <a href="displayshow.php?id=<?= $row['id'];?> &name= <?= $row['name'];?> &email= <?= $row['email'];?> &subject= <?= $row['subject'];?> &message= <?= $row['message'];?>">Show</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>

            </article> <!-- end entry -->
                    <a class="read" href="admin.php"><i class="fas fa-angle-double-left"> Back Before</i></a>

        </div> <!-- end main -->

        <!-- start sidebar -->
        <?php require_once 'sidebar.php'; ?>
        <!-- end sidebar -->

    </div> <!-- end row -->

</div> <!-- end content-wrap -->


<!-- Footer
================================================== -->
<?php require_once 'footer.php'; ?>
