<?php

try{

   $db_server = "localhost";
   $db_username = "root";
   $db_password = "";
   $db_database = "bidgamecoin2";
 
   $pdo = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);

} catch(PDOException $e){
   echo 'connection failed: '.$e->getMessage();
   die();
}

?>