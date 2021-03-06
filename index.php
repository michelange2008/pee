<?php
$menu =json_decode(file_get_contents('file/menu.json'));
 ?>

 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>plantes en élevage</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
     <link rel="stylesheet" href="css/master.css">
   </head>
   <body>
     <div class="parallax-container">
       <div class="parallax"><img src="img/dandelion.jpg"></div>
     </div>
     <div class="section">
       <div class="container row center-align">
         <div class="col s12 m6 offset-m3">
           <div class="card border0">
             <div class="card-image">
               <img src="img/possible_interdit.png" alt="">
             </div>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col s12 center-align">
             <h1>Plantes en élevage</h1>
         </div>
       </div>
       <div class="row">
         <div class="menu_items">
           <?php foreach ($menu as $item) {

             echo '<div class="petit_espace green darken-4 hoverable">';
             echo '<a href="'.$item->route.'">';
             echo '<div style="width:100px;padding:10px;margin:auto">';
             echo '<img src="img/icones/'.$item->icone.'" alt="" style="max-width:100%">';
             echo '</div>';
             echo '<h6 class="btn-flat green darken-4 truncate white-text " style="margin:0">'.$item->nom.'</h6>';
             echo '</a></div>';

           } ?>
         </div>
       </div>
       <div class="row center">
         <div class="col s0 m2 l3"></div>
         <div class="col  s12 m8 l6 center orange darken-4">
           <a href="https://www.mesopinions.com/petition/animaux/plantes-elevage-soutenons-1052-eleveurs-eleveuses/74532" target="_blank">
             <h6 class="white-text">Soutenez les éleveurs hors-la-loi: signez la pétition <i class="material-icons">create</i></h6>
           </a>
         </div>
       </div>
     </div>
     <div class="parallax-container">
       <div class="parallax"><img src="img/lavande.jpg"></div>
     </div>

     <script src="js/materialize.min.js"></script>
     <script src="js/perso.js"></script>

   </body>

 </html>
