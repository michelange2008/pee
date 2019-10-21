<?php
$menu =json_decode(file_get_contents('file/menu.json'));
 ?>

<nav class="green darken-4">
  <div class="nav-wrapper">
    <a href="index.php"><img src="img/dandelion_petite.jpg" alt="pissenlit"style="height:100%;"></a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li> <a href="index.php" class="tooltipped" data-tooltip="Retour à l'accueil">Accueil</a></li>
      <?php foreach ($menu as $item) {
        echo '<li><a href="'.$item->route.'">'.$item->nom.'</a></li>';
      } ?>
    </ul>
  </div>
</nav>
<ul id="mobile-demo" class="sidenav">
  <nav class="valign-wrapper green darken-4 center">
    <h6 style="margin-left:4px">Plantes en élevage</h6>
  </nav>
  <li> <a href="index.php" class="tooltipped" data-tooltip="Retour à l'accueil">Accueil</a></li>
  <li class="divider"></li>
  <?php foreach ($menu as $item) {
    echo '<li><a href="'.$item->route.'">'.$item->nom.'</a></li>';
  } ?>
</ul>
<script type="text/javascript" src="js/perso.js"></script>
