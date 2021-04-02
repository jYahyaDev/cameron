<?php include("../header.php");

//Récupération de la variable si l'utilisateur choisi de modifier
if(isset($_POST['update'])) {

    if (isset($_POST['genre_id']) && !empty($_POST['genre_id'])) {

        $id = htmlspecialchars($_POST['genre_id']);
        //Affiche le genre à modifier grâce à son id
        $genre = read('genres', 'genre_id', $id);

    }

    //Si choix de supprimer
}elseif(isset($_POST['delete'])){

    $id = htmlspecialchars($_POST['genre_id']);
    //appel de la fonction delete pour supprimer le genre via son id
    $delete = delete('genres','genre_id',$id);

    $message = '';

    if ($delete) {
        $message = 'Le genre a bien été supprimé';
        header("location:genre-view-all.php?deleteMsg=$message");
    } else {
        $message = 'Erreur lors de la modification';
        header("location:genre-view-all.php?deleteMsg=$message");
    };


}else{
    //Redirection
    header("location:genre-view-all.php");

    };

?>

    <h2>Modifier le genre</h2>

    <form action="genre-update-check.php?id=<?=$genre['genre_id']?>" method="post">
        <label for="genre_name">Modifier le nom de l'artiste : </label>
        <input type="text" name="genre_name" value="<?= $genre['genre_name']?>">

        <input type="submit" name="submit" value="Modifier">

    </form>

<?php include("../footer.php") ?>