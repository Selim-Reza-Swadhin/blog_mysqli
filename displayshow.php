<?php include_once('resources/init.php');?>

<?php
$id = $_GET['id'];
//$conn = mysqli_connect("localhost", "root", "", "blog_oop");
$sql = "select * from tbl_contact where id='$id'";
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
                        <h2>Attention Please</h2>
                        <hr>
                    </h2>

                    <!--Table part only read-->

                    <div style="background: #A9ADB2">
                        <?php while ($row =mysqli_fetch_assoc($res)){?>
                            <form action="">
                                    <div>
                                        <label for="id">ID :</label>
                                        <input type="text" name="id" size="75" readonly value="<?= $row['id']; ?>">
                                    </div>
                                    <div>
                                        <label for="name">Name :</label>                                        <label for="id"></label>
                                        <input type="text" name="name" size="75" readonly value="<?= $row['name']; ?>">
                                    </div>
                                    <div>
                                        <label for="email">Email :</label>
                                        <input type="email" name="email" size="75" readonly value="<?= $row['email']; ?>">
                                    </div>
                                    <div>
                                        <label for="subject">Subject :</label>
                                        <input type="text" name="subject" size="75" readonly value="<?= $row['subject']; ?>">
                                    </div>
                                    <div>
                                        <label for="message">Message :</label>
                <textarea name="message" readonly cols="80" rows="15">
                    <?= $row['message']; ?>
                </textarea>
                                    </div>
                                    <div>
                                        <label for="id">Time :</label>
                                        <input type="text" size="75" readonly value="<?= date('d-M-y h:i:s:a', strtotime($row['date_posted'])) ?>">
                                    </div>
                                    <div>
                                        <label for="submit"></label>
                                        <input type="submit" name="submit" value='Send'>
                                    </div>
                            </form>
                        <?php } ?>

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

