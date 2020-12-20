
<?php

$a=$_POST['a'];
$b=$_POST['b'];

$c=$_POST['c'];

$conn= new mysqli('localhost','root','');
$select= $conn->select_db('cafeplus');
//new mysqli('localhost','root','');
//select_db("coffeecafe");
$conn->query("INSERT INTO  `cafeplus`.`user` (`id` ,`name` ,`user` ,`pwd`)VALUES (NULL ,  '$a',  '$b',  '$c');");
//mysql_query("INSERT INTO  `coffeecafe`.`user` (`id` ,`name` ,`user` ,`pwd`)VALUES (NULL ,  '$a',  '$b',  '$c');");
header("location:login.php");

?>
