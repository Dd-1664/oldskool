


<?php
/* Database credentials for MySQL */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'remote');
define('DB_PASSWORD', 'M4st3rY0d4');
define('DB_NAME', 'test');

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
