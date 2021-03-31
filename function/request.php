<?php 

require_once('database.php');

/**
 * Permet de lister l'ensemble des données d'une table
 * @return array
 * @param string 
 */
function readAll($table){

      $pdo = getPdo();

      $requete = "SELECT * FROM `$table`";
      $prepare = $pdo->prepare($requete);
      $prepare->execute();
      $res = $prepare->rowCount();
      $resultat = $prepare->fetchAll();

      return $resultat;

}


function create($table,$field1,$field2,$value1,$value2){

    $pdo = getPdo();

        $requete = "INSERT INTO `$table` (`$field1`, `$field2`)
                     VALUES (:val1, :val2);";
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
        ':val1' => $value1,
        ':val2' => $value2
        ));
    $res = $prepare->rowCount();

    return $res;
}


function delete($table,$idTable,$id){

       $pdo = getPdo();

     $requete = "DELETE FROM `$table` WHERE `$idTable` = :id;";
     $stmt = $pdo->prepare($requete);
     $stmt->execute(array(
        ':id' => $id
      ));

      $resultat = $stmt->rowCount();

      return $resultat;
}

function update($table, $field,$fieldId,$newValue,$idField){

    $pdo = getpdo();

     $requete = "UPDATE `$table` 
                  SET `$field` = :value 
                  WHERE `$fieldId` = :id;";
      $prepare = $pdo->prepare($requete);
      $prepare->execute(array(
        ':value' => $newValue,
        ':id'=> $idField
     
      ));
      $res = $prepare->rowCount();

      return $res;
}