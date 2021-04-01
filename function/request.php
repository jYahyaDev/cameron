<?php 

require_once('database.php');

/**
 * Permet de lister l'ensemble des données d'une table
 * @return array
 * @param string 
 */
function readAll($table){


      try{
          $pdo = getPdo();

          $requete = "SELECT * FROM `$table`";
          $prepare = $pdo->prepare($requete);
          $prepare->execute();
          $res = $prepare->rowCount();
          $resultat = $prepare->fetchAll();

          return $resultat;
      } catch (PDOException $e) {
          exit("❌🙀❌ OOPS :\n" . $e->getMessage());
      }

}
function read($table,$id){


    try{
        $pdo = getPdo();

        $requete = "SELECT * FROM `$table` WHERE artiste_id = :id";
        $prepare = $pdo->prepare($requete);
        $prepare->execute([
            ":id"=>$id
        ]);
        $res = $prepare->rowCount();
        $resultat = $prepare->fetch();

        return $resultat;
    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

}


function create($table,$field1,$value1)
{
    try {
        $pdo = getPdo();

        $requete = "INSERT INTO `$table` (`$field1`)
                     VALUES (:val1);";
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ':val1' => $value1
        ));
        $res = $prepare->rowCount();
        $lastId = $pdo->lastInsertId();

        /*return $res;*/
        return $lastId;
    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
}

function linkAssoc($artisteId,$styleId){
    try{

        $pdo = getPdo();
        $requete = "INSERT INTO `assoc_artistes_styles` (`assoc_artiste_id`, `assoc_style_id`)
                    VALUES (:assoc_artiste_id, :assoc_style_id);";
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ':assoc_artiste_id' => $artisteId,
            ':assoc_style_id' => $styleId,
        ));


    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }


}






function delete($table,$idTable,$id)
{


    try {
        $pdo = getPdo();

        $requete = "DELETE FROM `$table` WHERE `$idTable` = :id;";
        $stmt = $pdo->prepare($requete);
        $stmt->execute(array(
            ':id' => $id
        ));

        $resultat = $stmt->rowCount();

        return $resultat;
    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
}

function update($table, $field,$fieldId,$newValue,$idField)
{

    try {
        $pdo = getpdo();

        $requete = "UPDATE `$table` 
                  SET `$field` = :value 
                  WHERE `$fieldId` = :id;";
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ':value' => $newValue,
            ':id' => $idField

        ));
        $res = $prepare->rowCount();

        return $res;
    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
}