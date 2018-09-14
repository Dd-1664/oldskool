
<?php

$connection = mysqli_connect('xx', 'xx', 'xx', 'xx');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

if (!empty($_POST['email']) && !empty($_POST['pass']))
{

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $valid = 0;

    $query = "INSERT INTO users (email, pass, valid)
              VALUES('$email', '$pass', '$valid')";

    mysqli_query($connection, $query);
    
    session_start();

    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $pass;
?>
    <script language="javascript">alert("Registration Successful.");</script>
<?php
    require('secret.php');
    require('mail.php');
}
else {
?>
    <script language="javascript">alert("Please fill the form.");</script>
<?php
    require_once('signup.html');
    die();
}
?>



