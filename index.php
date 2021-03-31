<?php require_once('function/request.php')?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>ok</h1>
    
<?php $artiste = readAll('artistes')?>

<?php foreach($artiste as $art) : ?>

<p><?= $art['artiste_name']?></p>

<?php endforeach;?>



<?php $genre = readAll('genres')?>

<?php foreach($genre as $g) : ?>

<p><?= $g['genre_name']?></p>

<?php endforeach;?>






<?php delete('artistes','artiste_id',1);
//recup le boolean pour message 
$messageDelete = delete('artistes','artiste_id',4);

if($messageDelete){
    echo "message correctement supprimé";
}else{
    echo "soucis dans la requete";
}


?>
<?php ?>


</body>
</html>