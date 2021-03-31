<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../css/main.css">
   <title>Ajouter un lot</title>
</head>
<body>
   <div class="container">
         <div class="row">
            <div class="col-md-4 offset-md-4 mt-4 form login-form">
            <div class="justify-content-center">
               <a href="./index.php"><img class="mx-auto d-block" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" height="72" width="72"></a>
            </div>
               <form action="./add_action.php" method="POST">
                     <h2 class="text-center">Ajouter une vente</h2>
                     <p class="text-center">Vous pouvez commencer la création de votre lot.</p>
                     <div class="form-group">
                        <input class="form-control" autocomplete="off" type="text" name="name" placeholder="Entrez le nom" required>
                     </div>

                     <div class="form-group">
                        <button class="btn btn-success form-control" name="regis3" type="submit">Créer</button>
                     </div>
               </form>
            </div>
         </div>
      </div>
</body>
</html>