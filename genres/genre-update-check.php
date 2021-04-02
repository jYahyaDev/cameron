
<?php include("../header.php");


if(isset($_GET['id']) && isset($_POST['genre_name']) && !empty($_POST['genre_name']) && !empty($_GET['id'])) {

    $id = htmlspecialchars($_GET['id']);
    $value = htmlspecialchars($_POST['genre_name']);

    $modif = update('genres', 'genre_name', 'genre_id', $value, $id);

    $message = '';

    if ($modif) {
        $message = 'La modification a bien été prise en compte';
        header("location:genre-view-all.php?updateMsg=$message");
    } else {
        $message = 'Erreur lors de la modification';
        header("location:genre-view-all.php?updateMsg=$message");
    };

}else{
    header("location:genre-view-all.php");
}





