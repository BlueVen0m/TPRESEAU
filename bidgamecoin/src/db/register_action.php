<?php
require_once 'db.php';
 
if(isset($_REQUEST['regis'])) {
   $fname = htmlspecialchars($_POST['fname']);
   $lname = htmlspecialchars($_POST['lname']);
   $username = htmlspecialchars($_POST['username']);
   $email = htmlspecialchars($_POST['email']);
   $password = htmlspecialchars($_POST['password']);

   $request = "INSERT INTO users (firstname, lastname, username, email, password) VALUES (:fname, :lname, :username, :email, :password)";
   $query = $pdo->prepare($request);
   $query->bindParam(":fname", $fname);
   $query->bindParam(":lname", $lname);
   $query->bindParam(":username", $username);
   $query->bindParam(":email", $email);
   $query->bindParam(":password", $password);
   $query->execute();

   header("Location: ../web/login.php");
}

?>
