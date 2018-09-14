<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="/css/screen.css">
    </head>
<body><div class="enjoy-css">
<h5>You'll need to validate your subscription to log in, please check your mailbox</h5>
<h2>Login info:</h2>
<?php echo 'email: ' . $_SESSION['email'] . ''; ?>
<br>
<?php echo 'password: '. $_SESSION['pass']. ''; ?>
</div>
</body>
</html> 
