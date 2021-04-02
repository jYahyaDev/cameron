<?php include("header.php");

//Récupération de la variable si l'utilisateur choisi de modifier
if(isset($_POST['update'])) {

    if (isset($_POST['style_id']) && !empty($_POST['style_id'])) {

        $id = htmlspecialchars($_POST['style_id']);
        //Affiche le style à modifier grâce à son id
        $style = read('styles', 'style_id', $id);

    }

    //Si choix de supprimer
}elseif(isset($_POST['delete'])){

    $id = htmlspecialchars($_POST['style_id']);
    //appel de la fonction delete pour supprimer le style via son id
    $delete = delete('styles','style_id',$id);

    $message = '';

    if ($delete) {
        $message = 'Le style a bien été supprimé';
        header("location:style-view-all.php?deleteMsg=$message");
    } else {
        $message = 'Erreur lors de la modification';
        header("location:style-view-all.php?deleteMsg=$message");
    };


}else{
    //Redirection
    header("location:style-view-all.php");

};

?>

    <h2>Modifier le style</h2>

    <form action="style-update-check.php?id=<?=$style['style_id']?>" method="post">
        <label for="style_name">Modifier le nom de l'artiste : </label>
        <input type="text" name="style_name" value="<?= $style['style_name']?>">

        <input type="submit" name="submit" value="Modifier">

    </form>

<?php include("footer.php") ?>