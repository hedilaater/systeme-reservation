<?php
$host = 'localhost';
$dbname = 'pfa';
$username = 'root';
$password = '';
 
$con=mysqli_connect($host,$username,$password,$dbname) or die("euur");
$cin=$_POST['cin'];
$nom=$_POST['username'];
$mail=$_POST['mail'];
$psw=$_POST['psw'];

$req1="INSERT INTO `client`(`id_clinet`, `cin`, `username`, `mail`, `password`) VALUES ('','$cin','$nom','$mail','$psw')";
$res1=mysqli_query($con,$req1) or die("no save ");

header("Location: insertclinet.php");

?> 
