<?php include("function/request.php");

if(isset($_GET['style_id']) && !empty($_GET['style_id'])){

    $id = htmlspecialchars($_GET['style_id']);
    //appel de la fonction delete pour supprimer un style via son id
    $delete = delete('styles','style_id',$id);

    $message = '';
    // Si la suppression s'est bien déroulé on retourne un message à l'utilisation
    if ($delete) {
        $message = 'Le style a bien été supprimé';
        header("location:style-view-all.php?deleteMsg=$message");
    } else {
        $message = 'Erreur lors de la modification';
        header("location:style-view-all.php?deleteMsg=$message");
    };


}else{
    header("location:style-view-all.php");
}