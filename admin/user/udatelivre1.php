<?php
$host = 'localhost';
$dbname = 'pfa';
$username = 'root';
$password = '';
 
$con=mysqli_connect($host,$username,$password,$dbname) or die("euur");
$id=$_POST['id'];
$n=$_POST['n'];
$nom=$_POST['nom'];
$a=$_POST['a'];
$d=$_POST['d'];
$nb=$_POST['px'];
$p=$_POST['p'];
$req1="UPDATE `livre` SET numero='$n',nom='$nom',auteure_livre='$a',date_sortie='$d',prix='$px',photo='$p' WHERE id_livre='$id'";

$res1=mysqli_query($con,$req1) or die("no update ".mysqli_error($con));

header("Location: udatelivre.php");

mysqli_close($con);
?>