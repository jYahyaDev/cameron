<?php include("../header.php") ?>

<?php

$styles = readAll('styles');



?>

<h1>Styles</h1>

<section class="cameron-genres">

    <?php foreach($styles as $style) :?>

        <div class="cameron-genres__display">
            <p> <?=$style["style_name"] ?></p>
            <a href="#">Modifier</a>
            <a href="#">Supprimer</a>
        </div>

    <?php endforeach; ?>





<?php include("../footer.php") ?>