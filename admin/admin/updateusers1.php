<?php
$host = 'localhost';
$dbname = 'pfa';
$username = 'root';
$password = '';
 
$con=mysqli_connect($host,$username,$password,$dbname) or die("euur");
$id=$_POST['id'];
$nom=$_POST['n'];
$mail=$_POST['mail'];
$type=$_POST['type'];
$psw=$_POST['psw'];
$req1="UPDATE `users` SET id='$id',username='$nom',email='$mail',type='$type',password='$psw'WHERE id='$id'";

$res1=mysqli_query($con,$req1) or die("no update ".mysqli_error($con));

header("Location: updateusers.php");

mysqli_close($con);
?>