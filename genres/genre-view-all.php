 <?php include("../header.php");

  $genres = readAll('genres');

  ?>

 <h1>Ajouter un genre </h1>

 <!-- affichage message ajout de genre-->
 <?php  if(isset($_GET['create'])) :?>
     <?php $msg= htmlspecialchars($_GET['create']) ?>
     <p><?=htmlspecialchars($msg)?></p>
 <?php endif; ?>


 <form action="genre-create.php" method="post">

     <input type="text" name="genre_name" placeholder="Ajoutez un nouveau genre">
     <input type="submit" name="submit" value="Créer">

 </form>

 <h1>Genres</h1>

 <section class="cameron-genres">


  <?php foreach($genres as $genre) :?>

      <p> <?=$genre["genre_name"] ?></p>

      <button><a href="artiste-update-form.php?artiste_id=<?=$artiste['artiste_id']?>">Modifier</a></button>
      <button><a onClick="return confirm('Êtes-vous sur de vouloir supprimer cette artiste?')" href="artiste-delete.php?artiste_id=<?=$artiste['artiste_id']?>">Supprimer l'artiste</a></button>

  <?php endforeach; ?>



 <?php include("../footer.php") ?>