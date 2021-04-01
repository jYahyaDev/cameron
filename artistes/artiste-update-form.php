<?php include("../header.php");


 if(isset($_GET['artiste_id']) && !empty($_GET['artiste_id'])){

     $id = htmlspecialchars($_GET['artiste_id']);
     //Affiche l'artiste à modifier grâce à son id
     $artiste = read('artistes', $id);
 }else{
     header("location:artiste-view-all.php");
 }
 
 ?>

<h2>Modifier les informations de l'artiste</h2>

<form action="artiste-update-check.php?id=<?=$artiste['artiste_id']?>" method="post">
    <label for="artiste_name">Modifier le nom de l'artiste : </label>
    <input type="text" name="artiste_name" value="<?= $artiste['artiste_name']?>">

    <input type="submit" name="submit" value="Modifier">

</form>

<?php include("../footer.php") ?>