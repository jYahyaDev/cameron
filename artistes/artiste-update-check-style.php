
<?php include("../header.php");


$styleId = htmlspecialchars($_POST['style_id']);
$id = htmlspecialchars($_GET['id']);
echo $id;
echo $styleId;


linkAssoc($id,$styleId);





/*if($modif){
    $message = 'La modification a bien été prise en compte';
}else{
    $message = 'Erreur lors de la modification';
}*/

/*header("location:artiste-view-all.php?message=$message");*/














?>