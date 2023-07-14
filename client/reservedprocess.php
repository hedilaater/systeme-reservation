
<?php
$host = 'localhost';
$dbname = 'pfa';
$username = 'root';
$password = '';
 
$con=mysqli_connect($host,$username,$password,$dbname) or die("euur");
$cin=$_POST['idl'];
$nom=$_POST['c'];
$des=$_POST['des'];
$mail=$_POST['date'];
$psw=$_POST['rdate'];
if (empty($cin)) {
	echo '<script>alert("donner nom de  livre");</script>';
	return false;
}
 else if (empty($nom)) {
	echo '<script>alert("donner votre cin");</script>';
	return false;
  }
 else if (empty($des)) {
	echo '<script>alert("donner destination");</script>';
	return false;
  }
 else if (empty($mail)) {
	echo '<script>alert("donner le date de reservation");</script>';
	return false;
  }
 else if (empty($psw)) {
	echo '<script>alert("donner le date de rendus");</script>';
	return false;
  }else{
$req1="INSERT INTO `reservation`(`r_id`, `user`, `nomlivre`, `r_dstntn`, `r_date`, `date_ren`) VALUES ('', '$nom', '$cin','$des','$mail','$psw')";
$res1=mysqli_query($con,$req1) or die(mysqli_error($con));
header("Location: listereservation.php");

  }?> 