<?php
require_once '../../db/db.php';
 
if(isset($_REQUEST['regis2'])) {
   $id=filter_input(INPUT_POST, "id");
   $name = htmlspecialchars($_POST['name']);
   $price = htmlspecialchars($_POST['price']);
   $desc = htmlspecialchars($_POST['desc']);
   $photo = htmlspecialchars($_POST['photo']);
   $sdate = htmlspecialchars($_POST['sdate']);
   $edate = htmlspecialchars($_POST['edate']);

   $request = ("INSERT INTO `lot` (id_categorie, nom, prix, description, photo, start_date, end_date) VALUES (:id_cat, :name, :price, :desc, :photo, :sdate, :edate)");
   $query = $pdo->prepare($request);
   $query->bindParam(":id_cat", $id);
   $query->bindParam(":name", $name);
   $query->bindParam(":price", $price);
   $query->bindParam(":desc", $desc);
   $query->bindParam(":photo", $photo);
   $query->bindParam(":sdate", $sdate);
   $query->bindParam(":edate", $edate);
   $query->execute();
   //$query->debugDumpParams();
   header('location: viewer.php?id='.$id);
}

if(isset($_REQUEST['regis3'])) {
   $name = htmlspecialchars($_POST['name']);

   $request = ("INSERT INTO `vente` (categorie) VALUES (:name)");
   $query = $pdo->prepare($request);
   $query->bindParam(":name", $name);
   $query->execute();

   header("Location: ./admin_home.php");
}

if(isset($_REQUEST['regis4'])) {
   $id=filter_input(INPUT_POST, "id");
   $name = htmlspecialchars($_POST['name']);
   $desc = htmlspecialchars($_POST['desc']);
   $photo = htmlspecialchars($_POST['photo']);
   $prix = ($_POST['Prix']);
   $prixR = ($_POST['PrixReserve']);

   $request = ("INSERT INTO `objet` (id_lot, nom, description, photo, prixDepart, prixSave) VALUES (:id_ench, :name, :desc, :photo, :prix, :prixr)");
   $query = $pdo->prepare($request);
   $query->bindParam(":id_ench", $id);
   $query->bindParam(":name", $name);
   $query->bindParam(":desc", $desc);
   $query->bindParam(":photo", $photo);
   $query->bindParam(":prix", $prix);
   $query->bindParam(":prixr", $prixR);
   $query->execute();
   
   //$query->debugDumpParams();
   header('location: objet.php?id='.$id);
}


if(isset($_REQUEST['regis5'])) {
   $name = htmlspecialchars($_POST['name']);
   $id = htmlspecialchars($_POST['id']);
   $request = ("UPDATE `vente` SET categorie = :name WHERE id = :id");
   $query = $pdo->prepare($request);
   $query->bindParam(":name", $name);
   $query->bindParam(":id", $id);
   $query->execute();

   header("Location: ./admin_home.php");
}



if (isset($_REQUEST['regis6'])) {
   $id = htmlspecialchars($_POST['id']);
   $nom = htmlspecialchars($_POST['name']);
   $prix = $_POST['prix'];
   $description = htmlspecialchars($_POST['description']);
   $photo = htmlspecialchars($_POST['photo']);
   $start = $_POST['start_date'];
   $end = $_POST['end_date'];

   $request = ("UPDATE lot SET nom = :nom, prix = :prix, description = :description, photo = :photo, start_date = :start_date, end_date = :end_date  WHERE id = :id");
   $query = $pdo->prepare($request);
   $query->bindParam(":nom", $nom);
   $query->bindParam(":id", $id);
   $query->bindParam(":prix", $prix);
   $query->bindParam(":description", $description);
   $query->bindParam(":photo", $photo);
   $query->bindParam(":start_date", $start);
   $query->bindParam(":end_date", $end);
   $query->execute();
   //$query->debugDumpParams();

   header("Location: ./viewer.php?id=" . $_POST['catid']);
}

if (isset($_REQUEST['regis10'])) {
   $id = htmlspecialchars($_POST['id']);
   $nom = htmlspecialchars($_POST['name']);
   $description = htmlspecialchars($_POST['description']);
   $photo = htmlspecialchars($_POST['photo']);
   $prix = htmlspecialchars($_POST['Prix']);
   $prixr = htmlspecialchars($_POST['PrixReserve']);

   $request = ("UPDATE objet SET nom = :nom, description = :description, photo = :photo, prixDepart = :prix, prixSave = :prixr WHERE id = :id");
   $query = $pdo->prepare($request);
   $query->bindParam(":nom", $nom);
   $query->bindParam(":id", $id);
   $query->bindParam(":description", $description);
   $query->bindParam(":photo", $photo);
   $query->bindParam(":prix", $prix);
   $query->bindParam(":prixr", $prixr);
   $query->execute();
   //$query->debugDumpParams();

   header("Location: ./objet.php?id=".$_POST['catid']);
}
?> 