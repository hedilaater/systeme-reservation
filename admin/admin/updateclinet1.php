<?php
$host = 'localhost';
$dbname = 'pfa';
$username = 'root';
$password = '';
 
$con=mysqli_connect($host,$username,$password,$dbname) or die("euur");

$i=$_POST['i'];
$cin=$_POST['cin'];
$nom=$_POST['username'];
$mail=$_POST['mail'];
$psw=$_POST['psw'];

$req1="UPDATE `client` SET cin='$cin',username='$nom',mail='$mail',password='$psw' WHERE id_clinet='$i'";
$res1=mysqli_query($con,$req1) or die("no update".mysqli_error($con));

header("Location: updateclinet.php");

mysqli_close($con);

?>