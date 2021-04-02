 <?php include("header.php") ?>

  <?php
    //Affiche les artistes ainsi que les styles associés
    $artistes = readAssoc();
    //Affiche les styles de chaque artistes
    $styles = readStyleLink();
    //Liste l'ensemble des styles disponible lors de la création d'un artiste
    $stylesChoice = readAll('styles');

  ?>
<div class="main">

 <h2>Ajouter un artiste</h2>
  <!--Ajout d'un message pour indiquer le résultat de la requête à l'utilisateur-->
  <?php  if(isset($_GET['msg'])) :?>
   <?php $msg= htmlspecialchars($_GET['msg']) ?>
    <p><?=htmlspecialchars($msg)?></p>
  <?php endif; ?>



 <form action="artiste-create.php" method="post">
     <input type="text" name="artiste_name" placeholder="Entrez le nom de l'artiste">
     <label for="artiste_style">Ajouter un style à l'artiste</label>
     <select name="style_id" id="artist_style">
         <?php foreach($stylesChoice as $choice){
      echo "<option value=".$choice['style_id'].">".$choice['style_name']."</option>";
         }?>
     </select>
     <input type="submit" value="ajouter">
 </form>

 <h2>Listes des artistes</h2>

<!-- affichage message ajout de style-->
 <?php  if(isset($_GET['styleMsg'])) :?>
     <?php $msg= htmlspecialchars($_GET['styleMsg']) ?>
     <p><?=htmlspecialchars($msg)?></p>
 <?php endif; ?>
 <!-- affichage message modification artiste-->
 <?php  if(isset($_GET['updateMsg'])) :?>
     <?php $msg= htmlspecialchars($_GET['updateMsg']) ?>
     <p><?=htmlspecialchars($msg)?></p>
 <?php endif; ?>
 <!-- affichage message suppression artiste-->
 <?php  if(isset($_GET['deleteMsg'])) :?>
     <?php $msg= htmlspecialchars($_GET['deleteMsg']) ?>
     <p><?=htmlspecialchars($msg)?></p>
 <?php endif; ?>

 <!-- affichage message suppression style-->
 <?php  if(isset($_GET['deleteStyleMsg'])) :?>
     <?php $msg= htmlspecialchars($_GET['deleteStyleMsg']) ?>
     <p><?=htmlspecialchars($msg)?></p>
 <?php endif; ?>


 <div class="cameron-artistes-liste">
<?php foreach($artistes as $artiste) : ?>

     <div class="cameron-artistes-liste__display">

         <h2><?= $artiste["artiste_name"] ?></h2>
         <p>Styles :</p>
           <?php foreach ($styles as $style) :?>
            <?php if($style['assoc_artiste_id']==$artiste['artiste_id']) : ?>
         <li><?= $style["style_name"] ?></li>
          <?php endif;endforeach; ?>

         <button><a href="artiste-update-style-form.php?artiste_id=<?=$artiste['artiste_id']?>">Ajouter un style</a></button>
         <button><a href="artiste-update-form.php?artiste_id=<?=$artiste['artiste_id']?>">Modifier</a></button>
         <button><a onClick="return confirm('Êtes-vous sur de vouloir supprimer cette artiste?')" href="artiste-delete.php?artiste_id=<?=$artiste['artiste_id']?>">Supprimer l'artiste</a></button>
         <button><a href="artiste-delete-style.php?artiste_id=<?=$artiste['artiste_id']?>">Supprimer un style</a></button>
     </div>

<?php endforeach; ?>

</div>





<!-- --><?php /*include("footer.php")*/?>