<?php 
require '../../db/db.php';

$id = $_GET['id'];
$request = "SELECT * FROM users WHERE id=:id";
$query = $pdo->prepare($request);
$query->execute([':id' => $id]);
$users = $query->fetch(PDO::FETCH_OBJ);

if(isset($_POST['username']) && isset($_POST['email'])) {
   $fname = htmlspecialchars($_POST['fname']);
   $lname = htmlspecialchars($_POST['lname']);
   $username = htmlspecialchars($_POST['username']);
   $email = htmlspecialchars($_POST['email']);
   $role = htmlspecialchars($_POST['role']);

   $request = "UPDATE users SET firstname=:fname, lastname=:lname, username=:username, email=:email, role=:role WHERE id=:id";
   $query = $pdo->prepare($request);

   if($query->execute([':fname' => $fname, ':lname' => $lname, ':username' => $username, ':email' => $email,':role' => $role, 'id' => $id])) {
      header("Location: gestion.php");
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/main.css">
   <title>Modifier les informations de <?php echo $id ?></title>
</head>
<body style="background-color: #fffffff6;">
   <div class="container">
      <div class="card border-secondary mb-3 mt-5">
         <div class="card-body">
            <div class="card-header">
               <h2>Modifier les informations</h2>
            </div>
            <form method="POST">
               <div class="form-group mt-2">
                  <label for="prénom">Changer de prénom</label>
                  <input class="form-control" value="<?= $users->firstname; ?>" type="text" name="fname">
               </div>
               <div class="form-group">
                  <label for="nom">Changer de nom</label>
                  <input class="form-control" value="<?= $users->lastname; ?>" type="text" name="lname">
               </div>
               <div class="form-group">
                  <label for="users">Changer de nom d'utilisateur</label>
                  <input class="form-control" value="<?= $users->username; ?>" type="text" name="username">
               </div>
               <div class="form-group">
                  <label for="email">Changer d'email</label>
                  <input class="form-control" value="<?= $users->email; ?>" type="email" name="email">
               </div>
               <div class="form-group">
                  <label for="email">Changer de role</label>
                  <select class="form-control" name="role">
                     <option>user</option>
                     <option>admin</option>
                  </select>
               </div>
               <div class="form-group mt-2">
                  <button type="submit" class="btn btn-info">Sauvegarder</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   
</body>
</html>