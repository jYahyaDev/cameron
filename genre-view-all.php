 <?php include("header.php");

  //Récupère l'ensemble des genres
  $genres = readAll('genres','genre_name');


  ?>



 <div class="main">
 <h2>Ajouter un genre </h2>

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


<!-- formulaire pour la création d'un genre -->
 <form action="genre-create.php" method="post">

     <input type="text" name="genre_name" placeholder="Ajoutez un nouveau genre">
     <input type="submit" name="submit" value="Créer">

 </form>

 <h2>Liste des genres</h2>

     <form action="genre-view-all.php" method="post">
     <select name="genre_id" id="artist_style">
        <?php foreach($genres as $genre){
             echo "<option value=".htmlspecialchars($genre['genre_id']).">".htmlspecialchars($genre['genre_name'])."</option>";
         }?>

     </select>
             <button type="submit" name="update" value="update">Modifier</button>
     </form>


     <!-- Permet d'afficher le formulaire de modification si l'utilisateur clique sur modifier -->        

     <?php if(isset($_POST['update'])) {

         if (isset($_POST['genre_id']) && !empty($_POST['genre_id'])) {

             $id = htmlspecialchars($_POST['genre_id']);
             //Affiche le genre à modifier grâce à son id
             $genre = read('genres', 'genre_id', $id);

             echo "
        <h2>Modifier du genre {$genre['genre_name']}</h2>

     <form action='genre-update-check.php?id={$genre['genre_id']}' method='post'>
         <input type='text' name='genre_name' value='{$genre['genre_name']}'>
         <input type='submit' name='submit' value='Valider'>
         <button><a onClick='return confirm('Êtes-vous sur de vouloir supprimer ce genre?')' href='genre-delete.php?genre_id={$genre['genre_id']}'>Supprimer le genre</a></button>

     </form>
        ";

         }}?>






 <?php include("footer.php") ?>