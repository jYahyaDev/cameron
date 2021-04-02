<?php include("function/request.php");

if(isset($_GET['artiste_id']) && !empty($_GET['artiste_id'])){

    $id = htmlspecialchars($_GET['artiste_id']);
    //appel de la fonction delete pour supprimer un artiste via son id
    $delete = delete('artistes','artiste_id',$id);

    $message = '';
    // Si la suppression s'est bien déroulé on retourne un message à l'utilisation
    if ($delete) {
        $message = 'L\'artiste a bien été supprimé';
        header("location:artiste-view-all.php?deleteMsg=$message");
    } else {
        $message = 'Erreur lors de la modification';
        header("location:artiste-view-all.php?deleteMsg=$message");
    };


}else{
    header("location:artiste-view-all.php");
}