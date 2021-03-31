<?php
session_start();
$role = $_SESSION['session_role'];
if(!isset($_SESSION['session_username']) || $role!="admin"){
    header('Location: ../login.php?err=2');
}
?>

<?php
require_once('../../db/db.php');

$id = filter_input(INPUT_GET, "id");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = "SELECT * FROM vente";
$stat = $pdo->prepare($request);
$stat->execute();
$list = $stat->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<div class="container">
   <div class="text-center mt-5">

         <h1>Admin Page</h1>
         <a href="../../db/exit.php" class="btn btn-danger">Logout</a>
         <hr>
         <div class="mt-3">
            <a href="./add_lot.php" class="btn btn-primary btn-sm">Créer un lot</a>
            <a href="./gestion.php" class="btn btn-secondary btn-sm">Gestion Utilisateur</a>
         </div>
    </div>
</div>
<hr>
<div class="container-xl">
   <div class="row">
      <table class="table table-striped">
         <tr>
            <td>Nom</td>
            <td></td>
         </tr>
         <?php foreach($list as $users): ?>
         <tr>
            <td class="align-middle"><?= $users->categorie; ?></td>
            <td class="float-right"><a href="viewer.php?id=<?= $users->id ?>" class="btn btn-success">Voir</a>
               <a href="edit_lot.php?id=<?= $users->id ?>" class="btn btn-warning">Modifier</a>
               <a href="./delete_casc_lot.php?id=<?= $users->id ?>" class="btn btn-danger">Supprimer</a>
            </td>
            
            
         </tr>
         <?php endforeach; ?>
      </table> 
   </div>
</div>

</body>
</html>