
<?php include("function/request.php") ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        *{
            box-sizing: border-box;
        }

    body{
        padding: 0;
        margin: 0;
        background-color: beige;
        height: 100vh;

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


    nav{
        max-width: 100%;
    }
    nav ul{
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: space-evenly;
        list-style-type: none;
    }

    nav ul li {
        text-transform: uppercase;
        margin: 5px;
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
        justify-content: center;
        flex-wrap: wrap;
    }
    .cameron-artistes-liste__display{
        position: relative;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        width: content-box;
        height: auto;
        background-color: darkgrey;
        padding: 10px;
        margin: 5px;
        border-radius: 5px;
        box-shadow: 0 10px 6px -6px #ffbd59;
    }

    .cameron-artistes-liste__btn {
        display: flex;
        flex-direction: column;
        background-color: green;
        width: 80%;
        margin: 0 auto;
        white-space: nowrap;
    }


        .home{
            margin-top: 80px;
            display: flex;
            justify-content: center;
            text-align: center;

        }

            .homeDiv{
                margin: 5px;
                height: 200px;
                width: 25%;
                border-radius: 5px;
                position: relative;
                align-content: center;
                box-shadow: 0 10px 6px -6px #ffbd59;
            }

            .home a{
                font-size: 24px;
                padding: 5px;
                text-transform: uppercase;
                font-weight: bold;
                display: block;
                height: 100%;
                color: white;
                text-shadow: 2px 2px 3px black;
            }
        .home a:hover{
            color: #ffbd59;
            transition: 0.5s;
            transform : scale(1,0.9)
        }


        .home > div:nth-child(1){
           background: url("images/artistes.jpg") no-repeat center;
            background-size: cover;
        }
        .home >div:nth-child(2){
            background: url("images/styles.jpg") no-repeat center;
            background-size: cover;
        }
        .home div:nth-child(3){

            background: url("images/genres.jpg") no-repeat center;
            background-size: cover;
        }

        .main{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .main h2{
            color: #ffbd59;
            text-shadow: 2px 1px 1px black;
        }
        .main li{
            margin-bottom: 10px;
        }


        @media screen and (max-width: 768px){
            .homeDiv{

                width: 50%;
            }

            form{
                display: flex;
                flex-direction: column;
                padding: 5px;
            }

            input{
                margin-bottom: 5px;
            }

            header img{
                width: 200px ;
            }

            .home a{
                font-size: 16px;
                padding: 3px;
            }
            .home{
                margin-top: 15px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            nav ul{
                padding: 0;
            }
        }

    </style>
    <title>Mon catalogue</title>
    <meta name="description" content="Catalogue de gestion d'artistes">
</head>
<header>
    <div class="img-header">
        <img src="./images/Cameron.png" alt="logo cameron">
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


