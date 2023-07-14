<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login </title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    </head>
    <body class="bg-primary">
<?php
$host = 'localhost';
$dbname = 'pfa';
$username = 'root';
$password = '';
$con=mysqli_connect($host,$username,$password,$dbname) or die("euur");

if (isset($_POST['cin'])){
    $username = stripslashes($_REQUEST['cin']);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
      $query = "SELECT * FROM `client` WHERE cin='$username' and password='$password'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['cin'] = $username;
        header("Location: client/index.php");
    }else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }
  ?>
   <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Connection</h3></div>
                                    <div class="card-body">
                                            <form class="box" action="" method="post" name="login">
                                                <div class="form-floating mb-3">
                                                <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="number" placeholder="12345678" name="cin" required />
                                                <label for="inputEmail">numero cin</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="password" placeholder="jj/mm/aaaa" name="password" required />
                                                <label for="inputEmail">mot de passe</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">enregistre votre mot de passe</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="#"></a>
 
  <input class="btn btn-primary" type="submit" value="connecte " name="submit" class="box-button">
</div>
  <?php if (! empty($message)) { ?>
      <p class="errorMessage"><?php echo $message; ?></p>
  <?php } ?>
  </form>
  </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Crée Compte? Inscrit-vous!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html