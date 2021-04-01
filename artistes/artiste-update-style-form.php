<?php include("../header.php") ?>


<?php

if(isset($_GET['artiste_id'])){

    $id = htmlspecialchars($_GET['artiste_id']);

    $artiste = read('artistes', $id);

    var_dump($artiste);

    $styles = readAll('styles');

}

?>

<form action="artiste-update-check-style.php?id=<?=$artiste['artiste_id']?>" method="post">


    <label for="artiste_style">Ajouter un style à l'artiste</label>
    <select name="style_id" id="artist_style">
        <?php foreach($styles as $style){
            echo "<option value=".$style['style_id'].">".$style['style_name']."</option>";
        }?>
    </select>
    <input type="submit" name="add-style" value="Ajouter ce style">

</form>

