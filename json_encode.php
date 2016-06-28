<?php

//include('connect.php');

$pdo=new PDO("mysql:dbname=myDB;host=localhost","myBiz","Tustr3aiioos");
$statement=$pdo->prepare("SELECT * FROM myDB");
$json=json_encode($statement);
?>
