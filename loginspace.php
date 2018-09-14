
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="/css/screen.css"> 
    </head>
<body>
  <div class="enjoy-css">
    <h5>You are now Logged, Welcome</h5><h3><?php print_r($_SESSION['email']);?></h3>
    <form action="dc.php" method="post">
      <input name="dc" type="submit" class="float enjoy-css-btn" value="Disconnect">
    </form>
   </div>
  </div>
</body>
</html> 