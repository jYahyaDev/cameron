<?php include("../header.php") ?>


<?php

 if(isset($_GET['artiste_id'])){

     $id = htmlspecialchars($_GET['artiste_id']);

     $artiste = read('artistes', $id);

     var_dump($artiste);

 }
 
 ?>

<form action="artiste-update-check.php?id=<?=$artiste['artiste_id']?>" method="post">

    <input type="text" name="artiste_name" value="<?= $artiste['artiste_name']?>">

    <input type="submit" name="submit" value="Modifier">

</form>

