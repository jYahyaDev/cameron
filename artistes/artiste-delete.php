<?php include("../header.php");

if(isset($_GET['artiste_id'])){

    $id = htmlspecialchars($_GET['artiste_id']);

    $delete = delete('artistes','artiste_id',$id);

    echo $delete;


}