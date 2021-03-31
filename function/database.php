<?php


function getPdo(){


  $pdo = new PDO('mysql:host=localhost;dbname=cameron;charset=utf8', 'jyahya', 'Azerty30900!', [
             PDO::ATTR_EMULATE_PREPARES   => false, 
             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
             PDO::MYSQL_ATTR_FOUND_ROWS   => true
         ]);

         return $pdo;



}