<?php
include_once('resources/init.php');?>
<?php

function validation($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {

    $name = validation($_POST['name']);
    $email = validation($_POST['email']);
    $subject = validation($_POST['subject']);
    $message = validation($_POST['message']);

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $subject = mysqli_real_escape_string($conn, $subject);
    $message = mysqli_real_escape_string($conn, $message);


    $error = "";

    if (empty($name)) {

        $error = "Name must not be empty";

    } elseif (empty($email)) {

        $error = "Email field must not be empty";

    } elseif (empty($subject)) {

        $error = "Subject field must not be empty";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = "Invalid email address";

    } elseif (empty($message)) {
        $error = "Message field must not be empty";

    } else {
        $query = "INSERT INTO tbl_contact(name,email,subject,message,date_posted) VALUES ('$name','$email', '$subject','$message', now())";
        $inserted_rows = mysqli_query($conn, $query);
        if ($inserted_rows) {
            $msg = "<span style='color: green'>Send Message Successfully.</span>";
        } else {
            $error = "<span style='color: red'>Send Message Not Successfully.</span>";
        }
    }
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
                    <h2 class="entry-title">
                        <h2>Contact me</h2>
                    </h2>
                    <?php
                    if (isset($error)) {
                        echo "<span style='color:red'>$error</span>";
                    }

                    if (isset($msg)) {
                        echo "<span style='color:green'>$msg</span>";
                    }
                    ?>

                    <div class="entry-meta">
                        <form action='' method='post'>
                            <div>
                                <label for='name'>Name :</label>
                                <input type='text' name='name' size="80" placeholder="Enter Your Name"/>
                            </div>
                            <div>
                                <label for='email'>Email :</label>
                                <input type='text' name='email' size="80" placeholder="Enter Your Email"/>
                            </div>
                            <div>
                                <label for='subject'>Subject :</label>
                                <input type='text' name='subject' size="80" placeholder="Enter Your Tropics Title"/>
                            </div>
                            <div>
                                <label for='message'>Message :</label>
                                <textarea name='message' cols=80
                                          rows=10 placeholder="Enter Details"></textarea>
                            </div>
                            <p><input type='submit' value='Send'/></p>
                        </form>
                    </div>

                </header>

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
