<?php include("../header.php");


if(isset($_POST['style_name']) && !empty($_POST['style_name']) && isset($_POST['genre_id']) && !empty($_POST['genre_id']) ){

    $styleName = htmlspecialchars($_POST['style_name']);

    $styleName = ucfirst($styleName);

    $genreId = $_POST['genre_id'];

    // Insertion BDD + Récupération de la variable de retour de type booléan pour affichage du message
    $create = createStyle('styles','style_name','style_genre_id',$styleName,$genreId);

    $message = '';

    if ($create) {
        $message = 'Le style a bien été ajouté';
        header("location:style-view-all.php?create=$message");
    } else {
        $message = 'Erreur lors de la création';
        header("location:style-view-all.php?updateMsg=$message");
    };


}else{
    header("location:style-view-all.php");
}


