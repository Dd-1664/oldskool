<?php

$connection = mysqli_connect('localhost', 'remote', 'M4st3rY0d4', 'test');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

if (!empty($_POST['email']) && !empty($_POST['pass']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT id FROM users WHERE email = '$email' AND pass = '$pass' AND valid = 1";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    session_start();

    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $pass;
    
    if($count == 1) 
    { 
        require('loginspace.php');   
    }
    else 
    {
        ?>
            <script language="javascript">alert("Wrong Email or Password. Did you validate your account ?");</script>
        <?php
        require('index.html');
        die();
    }
}
else {
?>
    <script language="javascript">alert("Please fill the form.");</script>
<?php
   require_once('index.html');
   die();
}
?>