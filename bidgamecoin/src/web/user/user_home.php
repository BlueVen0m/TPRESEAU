<?php
session_start();
$role = $_SESSION['session_role'];
if(!isset($_SESSION['session_username']) || $role!="user"){
    header('Location: index.php?err=2');
}
?>

<?php
require_once('../../db/db.php');

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
    <title>User Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<div class="container">
   <div class="text-center mt-5">
         <?php if(isset($_SESSION['success'])) : ?>
            <div class="alert alert-success">
               <h3>
                  <?php
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                  ?>
               </h3>
            </div>
         <?php endif ?>

         <h1>User Page</h1>
         <h3>
            <?php if(isset($_SESSION['user_login'])) { ?>
            Welcome, <?php echo $_SESSION['user_login']; }?>
         </h3>
         <a href="../../db/exit.php" class="btn btn-danger">Logout</a>
         <hr>
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
            <td class="float-right"><a href="./user_viewer.php?id=<?= $users->id ?>" class="btn btn-success">Voir</a></td> 
         </tr>
         <?php endforeach; ?>
      </table> 
   </div>
</div>

</body>
</html>