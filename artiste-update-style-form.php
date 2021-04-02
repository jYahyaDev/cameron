<?php include("header.php");


if(isset($_GET['artiste_id'])){

    // Récupération de l'id de l'artiste via la méthode GET
    $id = htmlspecialchars($_GET['artiste_id']);
    // Affiche l'artiste correspondant à l'id passé en paramètre
    $artiste = read('artistes','artiste_id', $id);
    //liste les styles disponible
    $styles = readAll('styles','style_name');

}else{
    header("location:artiste-view-all.php");
}

?>
<div class="main">
<h1>Ajouter un style à <?= htmlspecialchars($artiste['artiste_name'])?></h1>

<form action="artiste-update-check-style.php?id=<?=$artiste['artiste_id']?>" method="post">

    <label for="artiste_style">Ajouter un style à l'artiste</label>
    <select name="style_id" id="artist_style">
        <?php foreach($styles as $style){
            echo "<option value=".$style['style_id'].">".$style['style_name']."</option>";
        }?>
    </select>
    <input type="submit" name="add-style" value="Ajouter ce style">

</form>

 <?php include('footer.php');?>