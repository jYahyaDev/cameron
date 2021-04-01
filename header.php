
<?php include("function/request.php") ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="style.css">-->
    <style>
        *{
            box-sizing: border-box;
        }

    body{
    padding: 0;
        background-color: gray;
    }

    a{
        text-decoration: none;
        color:inherit;
    }

    button{
        margin-bottom: 2px;
    }
    .cameron-artistes-liste{
        display: flex;
    }
    .cameron-artistes-liste__display{
        position: relative;
        display: flex;
        flex-direction: column;
        width: content-box;
        height: auto;
        background-color: aquamarine;
        padding: 10px;
        margin: 5px;
    }


    .cameron-artistes-liste__btn{
        display: flex;
        flex-direction: column;
        background-color: antiquewhite;

        width: 80%;
        margin: 0 auto;

        white-space: nowrap;
    }

    </style>


    <title>CRUD</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="artistes/artiste-view-all.php">Artistes</a></li>
            <li><a href="genres/genre-view-all.php">Genres</a></li>
            <li><a href="styles/style-view-all.php">Styles</a></li>
        </ul>


    </nav>

</header>
<body>

<section class="cameron-home">

