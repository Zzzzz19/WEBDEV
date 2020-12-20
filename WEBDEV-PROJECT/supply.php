<?php

$a=$_POST['supply_id'];
$b=$_POST['brand'];
$c=$_POST['supplier'];
$d=$_POST['type'];
$e=$_POST['quantity'];
$f=$_POST['cost'];
$g=strtotime($_POST['delivery_date']);
$g=date('Y-m-d H:i:s', $g);

$conn= new mysqli('localhost','root','');
$select= $conn->select_db('cafeplus');
//new mysqli('localhost','root','');
//select_db("coffeecafe");
$conn->query("INSERT INTO  `cafeplus`.`supplies` (`supply_id` ,`brand` ,`supplier` ,`type`,`quantity` ,`cost` ,`delivery_date` )VALUES ('$a',  '$b',  '$c', '$d',  '$e',  '$f', '$g');");
//mysql_query("INSERT INTO  `coffeecafe`.`user` (`id` ,`name` ,`user` ,`pwd`)VALUES (NULL ,  '$a',  '$b',  '$c');");
header("location:supplies.php");


?>     