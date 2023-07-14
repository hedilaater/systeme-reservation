<?php
$host = 'localhost';
$dbname = 'pfa';
$username = 'root';
$password = '';
 
$con=mysqli_connect($host,$username,$password,$dbname) or die("euur");
$n=$_POST['n'];
$nom=$_POST['nom'];
$a=$_POST['a'];
$d=$_POST['d'];
$px=$_POST['px'];
$p=$_POST['bP'];
$req1="INSERT INTO `livre`(`id_livre`, `numero`, `nom`, `auteure_livre`, `date_sortie`, `prix`, `photo`) VALUES ('','$n','$nom','$a','$d','$px','$p')" ;

$res1=mysqli_query($con,$req1) or die("no save ");

header("Location: insertlivre.php");

?>