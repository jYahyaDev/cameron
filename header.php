
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
        color:black;

    }

    button{
        margin-bottom: 2px;
    }


    header{
        display: flex;
        align-items: center;
        flex-direction: column;
        background-color: black;
        height:auto;

    }

    /*nav{
        background-color: lawngreen;
        display: flex;
        justify-content: center;
    }*/

    nav ul{
        display: flex;
        justify-content: space-evenly;
        list-style-type: none;
    }

    nav ul li {
        text-transform: uppercase;
        margin: 10px;
        padding: 5px;
    }

    nav a {
        color: #ffbd59;
    }

    nav a:hover {
        color: white;
    }


    .cameron-artistes-liste{
        display: flex;
        flex-wrap: wrap;
    }
    .cameron-artistes-liste__display{
        position: relative;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        width: content-box;
        height: auto;
        background-color: aquamarine;
        padding: 10px;
        margin: 5px;
    }


    .cameron-artistes-liste__btn {
        display: flex;
        flex-direction: column;
        background-color: green;
        width: 80%;
        margin: 0 auto;
        white-space: nowrap;
    }

        footer{
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: auto;
            background-color: black;
            color: #ffbd59;
            text-align: center;
        }

    </style>


    <title>CRUD</title>
</head>
<header>
    <div class="img-header">
        <img src="Cameron.png" alt="logo cameron">
    </div>

<nav>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="artiste-view-all.php">Artistes</a></li>
        <li><a href="genre-view-all.php">Genres</a></li>
        <li><a href="style-view-all.php">Styles</a></li>
    </ul>


</nav>
</header>
<body>

<section class="cameron-home">

