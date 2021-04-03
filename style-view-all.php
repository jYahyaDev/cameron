<?php include("header.php");

//Récupère l'ensemble des styles
$styles = readAll('styles','style_name');
//Récupère l'ensemble des genres
$genres = readAll('genres','genre_name');
?>




<div class="main">
<h2>Ajouter un style </h2>

<!-- affichage message ajout de style-->
<?php  if(isset($_GET['create'])) :?>
    <?php $msg= htmlspecialchars($_GET['create']) ?>
    <p><?=htmlspecialchars($msg)?></p>
<?php endif; ?>

<!-- affichage message modification de style-->
<?php  if(isset($_GET['updateMsg'])) :?>
    <?php $msg= htmlspecialchars($_GET['updateMsg']) ?>
    <p><?=htmlspecialchars($msg)?></p>
<?php endif; ?>

<!-- affichage message suppression style-->
<?php  if(isset($_GET['deleteMsg'])) :?>
    <?php $msg= htmlspecialchars($_GET['deleteMsg']) ?>
    <p><?=htmlspecialchars($msg)?></p>
<?php endif; ?>

<!-- Formulaire de création de style - Récupération de la liste des genres pour l'assigner aux styles -->
<form action="style-create.php" method="post">

    <label for="style_name">Ajoutez un nouveau style :</label>
    <input type="text" name="style_name" placeholder="Ajoutez un nouveau style">
    <label for="genre_id">Choisir le genre :</label>
    <select name="genre_id" id="artist_style">
        <?php foreach($genres as $genre){
            echo "<option value=".htmlspecialchars($genre['genre_id']).">".htmlspecialchars($genre['genre_name'])."</option>";
        }?>
    </select>
    <input type="submit" name="submit" value="Créer">

    <label>Aucun genre ne correspond ?</label><button><a href="genre-view-all.php">Ajouter un genre ! </a></button>

</form>



<h2>Liste des styles</h2>


    <form action="style-view-all.php" method="post">
        <select name="style_id" id="artist_style">
            <?php foreach($styles as $style){
                echo "<option value=".htmlspecialchars($style['style_id']).">".htmlspecialchars($style['style_name'])."</option>";
            }?>

        </select>
        <button type="submit" name="update" value="update">Modifier</button>

    </form>

     <!-- Permet d'afficher le formulaire de modification si l'utilisateur clique sur modifier -->        
    <?php if(isset($_POST['update'])) {
         
        if (isset($_POST['style_id']) && !empty($_POST['style_id'])) {

            $id = htmlspecialchars($_POST['style_id']);
            //Affiche le genre à modifier grâce à son id
            $style = read('styles', 'style_id', $id);

            echo "
        <h2>Modifier du style {$style['style_name']}</h2>

     <form action='style-update-check.php?id={$style['style_id']}' method='post'>
         <input type='text' name='style_name' value='{$style['style_name']}'>
         <input type='submit' name='submit' value='Valider'>
         <button><a onClick='return confirm('Êtes-vous sur de vouloir supprimer ce style?')' href='style-delete.php?style_id={$style['style_id']}'>Supprimer le style</a></button>

     </form>
        ";

        }}?>



<?php include("footer.php") ?>