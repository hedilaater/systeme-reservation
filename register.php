<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
 function validation() {
    var   cin=document.f.cin.value;
    var   username=document.f.username.value;
    var   psw=document.f.psw.value;
    if(cin=='0'){
        alert('saisre le cin');
        return false;
    }
    if(username=='0'){
        alert('saisre le nom');
        return false;
    }
    if(psw=='0'){
        alert('saisre le mot de passe');
        return false;
    }

    }

        
</script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crée Compte</h3></div>
                                    


                                    
                                    <div class="card-body">
                                        <form action="verifregister.php" method="POST" name='f'>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="cin" maxlength='8'  type="number" placeholder="Enter your identif card" required />
                                                        <label for="inputFirstName" name="cin">Numero cin</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="username" type="text" maxlength="40"  placeholder="Enter your username" required />
                                                        <label for="inputLastName">Nom de utilisateur</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="mail" placeholder="name@example.com" required />
                                                <label for="inputEmail">Address mail </label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="psw"  maxlength='10' type="password" placeholder="date de naisscence" required />
                                                        <label for="inputPassword">Mot de passe</label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" onclick="validation()" href="login.php" name='create'>Inscrit</button></div>
                                            </div>
                                         <div> <center> <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p></center></div>
                                        </form>
                                       
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
</html>
