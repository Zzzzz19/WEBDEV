<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe+</title>

  <link rel="stylesheet" href="css/login.css">

</head>

<body>


<?php
if(isset($_POST['s']))
{
$x=$_POST['username'];
$y=$_POST['password'];
$conn = new mysqli("localhost","root","");
$select = $conn->select_db("cafeplus");
$a= $conn->query("select * from user where name='$x' and pwd='$y'" );
$b=mysqli_num_rows($a);

if( $b>0)
{
$_SESSION['name']=$x;
header('location:order.php');
}
else
{
echo "<p style='color:white;'>wrong user</p>";
}
}
?>
  <div id="navbar">
    <div id="logo-name">
      <h1>CAFE+</h1>
    </div>
  </div>

  <div class="form-container">
    <div id="form-logo">
      <img src="icons/logo.png" alt="Cafe+_logo">
    </div>
    <div id="form-input">
      <form method= 'post' action=''>
        <input type='text' name='username' id='username' placeholder='Username'>
        <input type='password' name='password' id='password' placeholder='Password'>
        <input type='submit' name='s' id='login' value='Login'>
      </form>
    </div>
    <a href="new.php">Registered here</a>

  </div>
</body>

</html>