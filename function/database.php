<?php

//Création de la fonction de connexion à la base de données
function getPdo(){

  //Instance de la classe PDO
  try{
      $pdo = new PDO('mysql:tyjtyjtj;dbname=hu15z_dev5;charset=utf8', 'tyjtyjtyjtyjt', 'tyjtyjtjtyjtjj', [
          PDO::ATTR_EMULATE_PREPARES   => false,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::MYSQL_ATTR_FOUND_ROWS   => true
      ]);

      return $pdo;

  }catch (PDOException $e) {
      exit("❌🙀❌ OOPS :\n" . $e->getMessage());
  }


}