<?php

require './db.php';
session_start();

$username = "";
$password = "";

if(isset($_POST['username'])){
   $username = htmlspecialchars($_POST['username']);
}

if (isset($_POST['password'])) {
   $password = htmlspecialchars($_POST['password']);
}


$request = 'SELECT * FROM users WHERE username=:username AND password=:password';
$query = $pdo->prepare($request);
$query->execute(array(':username' => $username, ':password' => $password));


if($query->rowCount() == 0){
   header('Location: ../web/login.php?err=1');
} else{
   $row = $query->fetch(PDO::FETCH_ASSOC);
   session_regenerate_id();
   $_SESSION['session_id'] = $row['id'];
   $_SESSION['session_username'] = $row['username'];
   $_SESSION['session_role'] = $row['role'];

   if( $_SESSION['session_role'] == "admin"){
      header('Location: ../web/admin/admin_home.php');
   } else{
      header('Location: ../web/user/user_home.php');
   }
}


?>