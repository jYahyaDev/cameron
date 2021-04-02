
<?php include("../header.php");


if(isset($_GET['id']) && isset($_POST['style_name']) && !empty($_POST['style_name']) && !empty($_GET['id'])) {

    $id = htmlspecialchars($_GET['id']);
    $value = htmlspecialchars($_POST['style_name']);

    $modif = update('styles', 'style_name', 'style_id', $value, $id);

    $message = '';

    if ($modif) {
        $message = 'La modification a bien été prise en compte';
        header("location:style-view-all.php?updateMsg=$message");
    } else {
        $message = 'Erreur lors de la modification';
        header("location:style-view-all.php?updateMsg=$message");
    };

}else{
    header("location:style-view-all.php");
}





