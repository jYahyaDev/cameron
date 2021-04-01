<?php include("../header.php");


if(isset($_POST['genre_name']) && !empty($_POST['genre_name']) ){

    $genreName = htmlspecialchars($_POST['genre_name']);

    $create = create('genres','genre_name',$genreName);

    $message = '';

    if ($create) {
        $message = 'Le genre a bien été ajouté';
        header("location:genre-view-all.php?create=$message");
    } else {
        $message = 'Erreur lors de la création';
        header("location:genre-view-all.php?updateMsg=$message");
    };


}else{
    header("location:genre-view-all.php");
}


