<?php

require '../../db/db.php';

$id = $_GET['id'];

$request = "DELETE FROM users WHERE id=:id";
$query = $pdo->prepare($request);

if($query->execute([':id' => $id])) {
   header("Location: gestion.php");
}

?>