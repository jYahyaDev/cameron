 <?php include("../header.php") ?>

  <?php

  $genres = readAll('genres');



  ?>

 <h1>Genres</h1>

 <section class="cameron-genres">

  <?php foreach($genres as $genre) :?>

  <div class="cameron-genres__display">
      <p> <?=$genre["genre_name"] ?></p>
      <a href="#">Modifier</a>
      <a href="#">Supprimer</a>
  </div>

  <?php endforeach; ?>





 <?php include("../footer.php") ?>