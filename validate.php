<?php

session_start();

if (!empty($_SESSION['email']) && !empty($_SESSION['pass']))
{
    //DATABASE CONNECT
    $connection = mysqli_connect('localhost', 'remote', 'M4st3rY0d4', 'test');
    if (!$connection){
        die("Database Connection Failed" . mysqli_error($connection));
    }

    $userMail = $_SESSION['email'];

    $query = "UPDATE users SET valid = 1 WHERE email = '$userMail' ";

    mysqli_query($connection, $query);

    ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="/css/screen.css">
    </head>
<body>
  <div class="enjoy-css">
    <h5>You are now able to Log In</h5>
    <div><a href="/">Home</a></div>
  </div>
</body>
</html> 
<?php
    session_destroy();
}

else {
    ?>
    <script language="javascript">alert("how the fuck did you get here !");</script>
<?php
   require('index.html');
   die();
}
?>