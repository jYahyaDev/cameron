 <?php include("header.php");


    if(isset($_POST['style_id']) && !empty($_POST['style_id'])) {

        $styleId = htmlspecialchars($_POST['style_id']);
        //Utilisation de la fonction delete  - retourne un boolean -> à utiliser pour informer l'utilisateur
        $delete = delete('assoc_artistes_styles', 'assoc_style_id', $styleId);

        $message = '';

        if ($delete) {
            $message = 'Le style a bien été supprimé';
            header("location:artiste-view-all.php?deleteStyleMsg=$message");
        } else {
            $message = 'Erreur lors de la suppression';
            header("location:artiste-view-all.php?deleteStyleMsg=$message");
        };

    }else{
        header("location:artiste-view-all.php");
    }


