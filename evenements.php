<?php

  $datas = json_decode(file_get_contents("file/evenements.json"));
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
    <div class="col s12 center">
      <h2>Evènements</h2>
    </div>
    <div class="row">
      <div class="col s12 vignettes">
        <?php
          foreach ($datas as $mini) {
            echo '<div class="vignette hoverable">';
            echo '<a href="'.$mini->mini.'" target="_blank" class="tooltipped" data-tooltip="'.$mini->nom.'">';
            echo '<img src="https://aprc.it/api/280x150/'.$mini->mini.'" alt="'.$mini->nom.'"></a></div>';
          }
         ?>
      </div>
    </div>
  </div>
<script src="js/materialize.min.js"></script>
</body>
</html>
