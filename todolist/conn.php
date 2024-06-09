<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$dbname = "todolist";
$conn = new PDO("mysql:host=$sName;dbname=$dbname", $uName, $pass);