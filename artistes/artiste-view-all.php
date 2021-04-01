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


$pdo = getPdo();
  $requete = "SELECT * FROM `styles`
                  JOIN assoc_artistes_styles ON assoc_style_id = style_id";
                  /*WHERE assoc_artiste_id = :idArtist;*/
  $stmt = $pdo->prepare($requete);
  $stmt->execute();
  $styles = $stmt->fetchAll();


  $stylesChoice = readAll('styles');




  ?>

 <h1>Bienvenue sur la page dédié aux artistes</h1>

 <h2>Ajouter un artiste</h2>

 <form action="artiste-create.php" method="post">
     <input type="text" name="artiste_name">
     <label for="artiste_style">Ajouter un style à l'artiste</label>
     <select name="style_id" id="artist_style">
         <?php foreach($stylesChoice as $choice){
      echo "<option value=".$choice['style_id'].">".$choice['style_name']."</option>";
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

 /***** AFFICHAGE DES STYLES AJOUTÉES MANQUANT ***/

<div class="cameron-artistes-liste">
<?php foreach($artistes as $artiste) : ?>

     <div class="cameron-artistes-liste__display">

         <p> Artiste : <?= $artiste["artiste_name"] ?></p>

         <p>Styles :</p>

           <?php foreach ($styles as $style) :?>
            <?php if($style['assoc_artiste_id']==$artiste['artiste_id']) : ?>
         <p> <?= $style["style_name"] ?></p>
          <?php endif;endforeach; ?>

         <button><a href="artiste-update-style-form.php?artiste_id=<?=$artiste['artiste_id']?>">Ajouter un style</a></button>
         <button><a href="artiste-update-form.php?artiste_id=<?=$artiste['artiste_id']?>">Modifier</a></button>
         <button><a onClick="return confirm('Êtes-vous sur de vouloir supprimer cette artiste?')" href="artiste-delete.php?artiste_id=<?=$artiste['artiste_id']?>">Supprimer l'artiste</a></button>
         <button><a onClick="return confirm('Êtes-vous sur de vouloir supprimer cette artiste?')" href="artiste-delete-style.php?artiste_id=<?=$artiste['artiste_id']?>">Supprimer un style</a></button>
     </div>
 <!--   <div class="cameron-artistes-liste__btn">-->


  <!--  </div>-->
<?php endforeach; ?>
</div>

 <script src=""></script>