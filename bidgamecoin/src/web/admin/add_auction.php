<?php
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../css/main.css">
   <title>Ajouter un Lot</title>
</head>
<body>
   <a href="javascript:history.go(-1)" class="btn btn-sm btn-primary">Retour</a>
   <div class="container">
         <div class="row">
            <div class="col-md-4 offset-md-4 mt-4 form login-form">
            <div class="justify-content-center">
               <a href="./index.php"><img class="mx-auto d-block" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" height="72" width="72"></a>
            </div>
               <form action="./add_action.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                     <h2 class="text-center">Ajouter un Lot</h2>
                     <p class="text-center">Vous pouvez commencer la création de votre lot.</p>
                     <div class="form-group">
                        <input class="form-control" autocomplete="off" type="text" name="name" placeholder="Entrez le nom" required>
                     </div>
                     <div class="form-group">
                        <input class="form-control" autocomplete="off" type="number" min="1" name="price" placeholder="Entrez le prix" required>
                     </div>
                     <div class="form-group">
                        <input class="form-control" autocomplete="off" type="text" name="desc" placeholder="Entrez la description" required>
                     </div>
                     <div class="form-group">
                        <input class="form-control" autocomplete="off" type="url" name="photo" placeholder="URL de la photo">
                     </div>
                     <div class="form-group">
                        <input class="form-control" autocomplete="off" type="date" name="sdate" placeholder="Entrez la date de début" required>
                     </div>
                     <div class="form-group">
                        <input class="form-control" autocomplete="off" type="date" name="edate" placeholder="Entrez la date de fin" required>
                     </div>

                     <div class="form-group">
                        <button class="btn btn-success form-control" name="regis2" type="submit">Créer</button>
                     </div>
               </form>
            </div>
         </div>
      </div>
</body>
</html>