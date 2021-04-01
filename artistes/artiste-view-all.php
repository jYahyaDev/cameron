 <?php include("../header.php") ?>

  <?php

  $pdo = getPdo();

  $requete ='SELECT artiste_id, artiste_name, style_name, style_id, genre_name 
                FROM assoc_artistes_styles
                JOIN artistes ON artiste_id= assoc_artiste_id 
                JOIN styles on style_id=assoc_style_id 
                JOIN genres ON genre_id = style_genre_id GROUP BY artiste_name';

  $stmt= $pdo->prepare($requete);
  $stmt->execute();
  $artistes = $stmt->fetchAll();

  $styles = readAll('styles');

  ?>

 <h1>Bienvenue sur la page dédié aux artistes</h1>

 <h2>Ajouter un artiste</h2>

 <form action="artiste-create.php" method="post">
     <input type="text" name="artiste_name">
     <label for="artiste_style">Ajouter un style à l'artiste</label>
     <select name="style_id" id="artist_style">
         <?php foreach($styles as $style){
      echo "<option value=".$style['style_id'].">".$style['style_name']."</option>";
         }?>
     </select>
     <input type="submit" value="ajouter">
 </form>

  <?php
//alert se lance à chaque rechargement à regler
/* if(isset($_GET['message'])){

 $message = htmlspecialchars($_GET['message']);

 }
 echo "<script> alert('$message') </script>";



  */?>

<?php foreach($artistes as $artiste) : ?>

     <div class="cameron-genres__display">
         <p> Artiste : <?= $artiste["artiste_name"] ?></p>
         <p> Styles : <?= $artiste["style_name"] ?></p>
         <p> Genres : <?= $artiste["genre_name"] ?></p>

         <a href="artiste-update-form.php?artiste_id=<?=$artiste['artiste_id']?>">Modifier</a>
         <a onClick="return confirm('Êtes-vous sur de vouloir supprimer cette artiste?')" href="artiste-delete.php?artiste_id=<?=$artiste['artiste_id']?>">Supprimer</a>





     </div>

<?php endforeach; ?>


 <script src=""></script>