<?php include("header.php");


    if(isset($_POST['artiste_name']) && !empty($_POST['artiste_name']) && isset($_POST['style_id']) && !empty($_POST['style_id'])) {

        $name = htmlspecialchars($_POST['artiste_name']);
        $styleId = htmlspecialchars($_POST['style_id']);

        $lastId = create('artistes', 'artiste_name', $name);

        if ($lastId) {
            linkAssoc($lastId, $styleId);
        };
        $msg = "Artiste bien ajouté";
        header("location:artiste-view-all.php?msg=$msg");


}


