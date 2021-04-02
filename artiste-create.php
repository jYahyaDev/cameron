<?php include("function/request.php");

    // Vérification des données -> déclarées et non vides
    if(isset($_POST['artiste_name']) && !empty($_POST['artiste_name']) && isset($_POST['style_id']) && !empty($_POST['style_id'])) {

        $name = htmlspecialchars($_POST['artiste_name']);
        $styleId = htmlspecialchars($_POST['style_id']);

        // La fonction craate permet de récuperer l'id du dernier enregistrement via la fonction lastInsertId()
        $lastId = create('artistes', 'artiste_name', $name);

        if ($lastId) {
            linkAssoc($lastId, $styleId);
        };
        $msg = "Artiste bien ajouté";
        header("location:artiste-view-all.php?msg=$msg");


}else{
        header("location:artiste-view-all.php");
    }


