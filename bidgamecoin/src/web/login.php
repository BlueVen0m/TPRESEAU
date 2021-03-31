<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../css/main.css">
   <title>Login</title>
</head>
<body>
   <div class="container">
         <div class="row">
            <div class="col-md-4 offset-md-4 mt-4 form login-form">
            <div class="justify-content-center">
               <a href="./index.php"><img class="mx-auto d-block" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" height="72" width="72"></a>
            </div>
               <?php
               $errors = array(
                  1=>"Invalid user name or password, Try again",
                  2=>"Please login to access this area"
               );

               $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;
               if ($error_id == 1) {
                  echo '<p class="text-danger">'.$errors[$error_id].'</p>';
               } elseif ($error_id == 2) {
                  echo '<p class="text-danger">'.$errors[$error_id].'</p>';
               }
               ?>
               <form action="../db/login_action.php" method="post" class="form-horizontal my-5">
                     <h2 class="text-center">Login</h2>
                     <p class="text-center">Merci de vous connecter avec vos identifiant.</p>
                     <div class="form-group">
                        <input class="form-control" autocomplete="on" type="text" name="username" placeholder="Entrez votre pseudo" required autofocus>
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Mot de passe" required>
                     </div>
                     <div class="form-group">
                        <input class="form-control button" type="submit" name="btn_login" value="Login">
                     </div>
                     <div class="link login-link text-center">Pas encore Membre ? <a href="./register.php">Créer un Compte</a></div>
               </form>
            </div>
         </div>
      </div>
</body>
</html>