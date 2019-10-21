<?php

  $datas = json_decode(file_get_contents("file/collectif.json"), true);
  shuffle($datas);

 ?>

<!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>plantes en élevage</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="css/master.css">
   </head>
   <body>
<div class="menu">
  <?php include('menu.php') ?>
</div>

<div class="container">
  <div class="row">
    <div class="col s12 center">
      <h2 class="center">Un collectif large et représentatif</h2>
    </div>
    <div class="col s12 groupe_logos">
        <?php
          foreach ($datas as $organisation) {
            echo '<div class="cadre_logo">';
            echo '<a href="'.$organisation["lien"].'" target="_blank" class="tooltipped" data-position="bottom" data-tooltip="'.$organisation["nom"].'">';
            echo '<img class="hoverable" src="img/logos/'.$organisation["svg"].'" alt="logo" ></a></div>';
          }
         ?>
    </div>
  </div>
</div>

<script src="js/materialize.min.js"></script>
</body>
</html>
