<?php include("function/request.php");

if(isset($_GET['genre_id']) && !empty($_GET['genre_id'])){

    $id = htmlspecialchars($_GET['genre_id']);
    //appel de la fonction delete pour supprimer un genre via son id
    $delete = delete('genres','genre_id',$id);

    $message = '';
    // Si la suppression s'est bien déroulé on retourne un message à l'utilisation
    if ($delete) {
        $message = 'Le genre a bien été supprimé';
        header("location:genre-view-all.php?deleteMsg=$message");
    } else {
        $message = 'Erreur lors de la modification';
        header("location:genre-view-all.php?deleteMsg=$message");
    };


}else{
    header("location:genre-view-all.php");
}