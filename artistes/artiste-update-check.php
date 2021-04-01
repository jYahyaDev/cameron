
<?php include("../header.php") ?>


<?php


$id = htmlspecialchars($_GET['id']);
$value = htmlspecialchars($_POST['artiste_name']);

$modif = update('artistes','artiste_name','artiste_id',$value,$id);

$message ='';


if($modif){
    $message = 'La modification a bien été prise en compte';
}else{
    $message = 'Erreur lors de la modification';
}

header("location:artiste-view-all.php?message=$message");

 ?>