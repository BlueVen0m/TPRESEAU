<?php
require_once('../../db/db.php');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = "SELECT * FROM users";
$stat = $pdo->prepare($request);
$stat->execute();
$list = $stat->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/main.css">
   <title>Gestion des Utilisateurs</title>
</head>
<body>
   <a href="./admin_home.php" class="btn btn-danger m-1">Retour</a>
   <div class="container">
      <h3 class="mt-1 text-center">Gestion des Utilisateurs</h3>
      <table class="table table-striped">
         <tr>
            <td>ID</td>
            <td>Prénom</td>
            <td>Nom</td>
            <td>Nom d'utilisateur</td>
            <td>Email</td>
            <td>Role</td>
            <td>MODIFIER</td>
            <td>SUPPRIMER</td>
         </tr>
         <?php foreach($list as $users): ?>
         <tr>
            <td style="color: green;"><?= $users->id; ?></td>
            <td><?= $users->firstname; ?></td>
            <td><?= $users->lastname; ?></td>
            <td><?= $users->username; ?></td>
            <td><?= $users->email; ?></td>
            <td><?= $users->role; ?></td>
            <td><a href="edit.php?id=<?= $users->id ?>" class="btn btn-warning">Modifier</a></td>
            <td><a onclick="return confirm('Voulez-vous vraiment supprimer ce compte ?')" href="delete.php?id=<?= $users->id ?>" class="btn btn-danger">Supprimer</a></td>
         </tr>
         <?php endforeach; ?>
      </table> 
      
      
   </div>
</body>
</html>