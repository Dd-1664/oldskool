


<?php
/* Database credentials for MySQL */
define('DB_SERVER', 'xx');
define('DB_USERNAME', 'xx');
define('DB_PASSWORD', 'xx');
define('DB_NAME', 'xx');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

else {
  
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/secret.css">
    </head>
<body>
  <div class="enjoy-css">
    <h2>Success</h2>
  </div>
</body>
</html> 

<?php
}
?>
