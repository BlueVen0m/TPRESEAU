<?php

require_once "../../db/db.php";

$id = filter_input(INPUT_GET, "id");
$request = "SELECT * FROM `objet`";
$stat = $pdo->prepare($request);
$stat->execute();
$objet = $request->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../css/main.css">
   <title>Achat</title>
</head>
<body>
   <div class="container">
      <div class="card" style="width: 18rem;">
         <img src="<?php echo $objet["photo"] ?>" alt="" class="card-img-top">
         <div class="card-body">
            <h5 class="card-title"><?php echo $objet ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
               content.</p>
         </div>
         <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
         </ul>
         <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
         </div>
      </div>
   </div>
   
</body>
</html>