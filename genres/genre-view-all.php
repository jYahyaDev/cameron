 <?php include("../header.php");

  //Récupère l'ensemble des genres
  $genres = readAll('genres','genre_name');

  ?>

 <h1>Ajouter un genre </h1>

 <!-- affichage message ajout de genre-->
 <?php  if(isset($_GET['create'])) :?>
     <?php $msg= htmlspecialchars($_GET['create']) ?>
     <p><?=htmlspecialchars($msg)?></p>
 <?php endif; ?>

 <!-- affichage message modification de genre-->
 <?php  if(isset($_GET['updateMsg'])) :?>
     <?php $msg= htmlspecialchars($_GET['updateMsg']) ?>
     <p><?=htmlspecialchars($msg)?></p>
 <?php endif; ?>

 <!-- affichage message suppression genre-->
 <?php  if(isset($_GET['deleteMsg'])) :?>
     <?php $msg= htmlspecialchars($_GET['deleteMsg']) ?>
     <p><?=htmlspecialchars($msg)?></p>
 <?php endif; ?>


 <form action="genre-create.php" method="post">

     <input type="text" name="genre_name" placeholder="Ajoutez un nouveau genre">
     <input type="submit" name="submit" value="Créer">

 </form>

 <h1>Genres</h1>

 <section class="cameron-genres">

     <form action="genre-update-form.php" method="post">
     <select name="genre_id" id="artist_style">
        <?php foreach($genres as $genre){
             echo "<option value=".htmlspecialchars($genre['genre_id']).">".htmlspecialchars($genre['genre_name'])."</option>";
         }?>

     </select>
             <button type="submit" name="update" value="update">Modifier</button>
             <button type="submit" name="delete" value="delete" onClick="return confirm('Êtes-vous sur de vouloir supprimer ce genre?')">Supprimer ce genre</button>
     </form>



 <?php include("../footer.php") ?>