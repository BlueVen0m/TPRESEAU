<?php

require '../../db/db.php';

$id = $_GET['id'];
$catid= $_GET['catid'];

$request = "DELETE FROM lot WHERE id=:id";
$query = $pdo->prepare($request);

if($query->execute([':id' => $id])) {
   header("Location: ./viewer.php?id=".$_GET['catid']);
}

?>