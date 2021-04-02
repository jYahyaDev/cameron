
<?php include("header.php");

if(isset($_POST['style_id']) && !empty($_POST['style_id']) && isset($_GET['id']) && !empty($_GET['id'])){

    $styleId = htmlspecialchars($_POST['style_id']);
    $id = htmlspecialchars($_GET['id']);

    $result = linkAssoc($id,$styleId);
    $message = "";
    if($result){
        $message = 'Le style a bien été ajouté';
        header("location:artiste-view-all.php?styleMsg=$message");
    }else{
        $message = 'Erreur lors de de l\'ajout du style veuillez recommencer';
        header("location:artiste-view-all.php?styleMsg=$message");
    }

}else{
    header("location:artiste-view-all.php");
}






