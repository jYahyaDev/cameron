
<?php include("function/request.php");


if(isset($_GET['id']) && isset($_POST['artiste_name']) && !empty($_POST['artiste_name']) && !empty($_GET['id'])) {

    $id = htmlspecialchars($_GET['id']);
    $value = htmlspecialchars($_POST['artiste_name']);

    $modif = update('artistes', 'artiste_name', 'artiste_id', $value, $id);

    $message = '';

    if ($modif) {
        $message = 'La modification a bien été prise en compte';
        header("location:artiste-view-all.php?updateMsg=$message");
    } else {
        $message = 'Erreur lors de la modification';
        header("location:artiste-view-all.php?updateMsg=$message");
    };

}else{
    header("location:artiste-view-all.php");
}





