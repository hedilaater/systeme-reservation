<?php
$host = 'localhost';
$dbname = 'pfa';
$username = 'root';
$password = '';
 
$con=mysqli_connect($host,$username,$password,$dbname) or die("euur");

$i=$_POST['i'];
$il=$_POST['il'];
$ic=$_POST['ic'];
$d=$_POST['d'];
$dr=$_POST['dr'];
$dren=$_POST['dren'];
$psw=$_POST['psw'];

$req1="UPDATE `reservation` SET r_dstntn='$d',r_date='$dr',date_ren='$dren' WHERE r_id='$i' or user='$il' or nomlivre='$ic'";
$res1=mysqli_query($con,$req1) or die("no update".mysqli_error($con));

mysqli_close($con);
header("Location: upadtereserv.php");

?>