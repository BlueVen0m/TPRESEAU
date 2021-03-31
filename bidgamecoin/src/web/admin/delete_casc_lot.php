<?php

require '../../db/db.php';

$id = $_GET['id'];

$request = "DELETE FROM vente WHERE id=:id";
$query = $pdo->prepare($request);

if($query->execute([':id' => $id])) {
   header("Location: ./admin_home.php");
}

?>