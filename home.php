<?php 
// All this program does is shows who is logged in and allows user to log out 
session_start();
 
//connect to database
//$db=mysqli_connect("localhost","root","","authentication");
 require "../../database/database.php"; 
  $db = Database::connectMysqli();
?>
<!DOCTYPE html>
<html>
<head>
  <title>TeeTyme</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>TeeTyme</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<h1>Home</h1>
<div>
    <h4>Welcome <?php echo $_SESSION['username']; ?></h4></div>
</div>
<a class='btn btn-primary 'href='../teetyme2'>Persons</a>;
<a class='btn btn-primary 'href='../fileUpload.php'>Files</a>;
<a href="logout.php">Log Out</a>
<a href = "register.php">Register</a>
</body>
</html>