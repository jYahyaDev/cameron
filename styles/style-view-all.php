<?php include("../header.php");

//Récupère l'ensemble des styles
$styles = readAll('styles','style_name');
//Récupère l'ensemble des genres
$genres = readAll('genres','genre_name');
?>

<h1>Ajouter un style </h1>

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


<form action="style-create.php" method="post">

    <input type="text" name="style_name" placeholder="Ajoutez un nouveau style">
    <label for="genre_id">Choisir le genre :</label>
    <select name="genre_id" id="artist_style">
        <?php foreach($genres as $genre){
            echo "<option value=".htmlspecialchars($genre['genre_id']).">".htmlspecialchars($genre['genre_name'])."</option>";
        }?>
    </select>
    <input type="submit" name="submit" value="Créer">

</form>

<h1>Liste des styles</h1>

<section class="cameron-genres">

    <form action="style-update-form.php" method="post">
        <select name="style_id" id="style_id">
            <?php foreach($styles as $style){
                echo "<option value=".htmlspecialchars($style['style_id']).">".htmlspecialchars($style['style_name'])."</option>";
            }?>

        </select>
        <button type="submit" name="update" value="update">Modifier</button>
        <button type="submit" name="delete" value="delete" onClick="return confirm('Êtes-vous sur de vouloir supprimer ce style?')">Supprimer ce style</button>
    </form>



<?php include("../footer.php") ?>