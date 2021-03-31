<?php
require_once "../../db/db.php";

$id = $_GET['id'];
$request = $pdo->prepare("SELECT * from objet where id_lot=:id");
$request->bindParam(":id", $id);
$request->execute();
$objet = $request->fetchAll();
?>


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
    <a href="./viewer.php?id=<?php echo $id ?>" class="btn btn-danger m-1">Retour<a>
    <a href="./add_objet.php?id=<?php echo $id ?>" class="btn btn-primary btn-sm">Créer un objet</a>
<?php

for ($i = 0; $i < count($objet); $i++) {
   ?>
    <div class="col-3">
        <div class="card">

            <img src="<?php echo $objet[$i]["photo"] ?>" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"> Nom : <?php echo htmlspecialchars($objet[$i]["nom"]) ?></h5>
                <p class="card-text"> Description : <?php echo htmlspecialchars($objet[$i]["description"]) ?></p>
                <p class="card-text"> Prix de départ : <?php echo htmlspecialchars($objet[$i]["prixDepart"]) ?></p>
                <p class="card-text"> Prix de départ : <?php echo htmlspecialchars($objet[$i]["prixSave"]) ?></p>
                <a href="../user/buy.php?id=<?php echo htmlspecialchars($objet[$i]["id"]) ?>"
                   class="btn btn-sm btn-success">Acheter</a>
                  <a href="./edit_objet.php?catid=<?= $_GET['id']; ?>&id=<?php echo htmlspecialchars($objet[$i]["id"]) ?>" class="btn btn-warning btn-sm">Modifier</a>
                  <a href="delete_casc.php?catid=<?= $_GET['id']; ?>&id=<?php echo htmlspecialchars($objet[$i]["id"]) ?>" class="btn btn-danger btn-sm" name="regis9" onclick="return confirm('Voulez-vous vraiment supprimer cet objet ?')">Supprimer</a>
            </div>
        </div>
    </div>
    <?php
}
?>
