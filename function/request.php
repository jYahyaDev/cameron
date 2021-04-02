<?php 

require_once('database.php');

/**
 * Toutes les fonctions utilisent les requêtes préparées afin de se protéger des injections SQl
 */



/**
 * Permet de lister l'ensemble des données d'une table
 * @return array
 * @param string 
 */
function readAll($table,$orderBy=""){

      try{
          $pdo = getPdo();

          $requete = "SELECT * FROM `$table`";
          if(!empty($orderBy)) $requete.= "ORDER BY ".$orderBy;
          $prepare = $pdo->prepare($requete);
          $prepare->execute();
          $res = $prepare->rowCount();
          $resultat = $prepare->fetchAll();

          return $resultat;
      } catch (PDOException $e) {
          exit("❌🙀❌ OOPS :\n" . $e->getMessage());
      }

}

/**
 * Permet de lister un seul élément via son id
 * @param $table
 * @param $id
 * @return mixed
 */
function read($table,$field,$id){


    try{
        $pdo = getPdo();

        $requete = "SELECT * FROM `$table` WHERE `$field` = :id";
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

/**
 * Permet de lier l'artiste à un ou plusieurs styles via la table associative
 * @return array
 */
function readAssoc()
{
    try {
        $pdo = getPdo();

        $requete = 'SELECT artiste_id, artiste_name, style_name, style_id
                FROM assoc_artistes_styles
                JOIN artistes ON artiste_id= assoc_artiste_id 
                JOIN styles on style_id=assoc_style_id 
                 GROUP BY artiste_name';

        $stmt = $pdo->prepare($requete);
        $stmt->execute();
        $artistes = $stmt->fetchAll();

        return $artistes;
    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

}

/**
 * Affiche les styles attribué à un artiste
 * @return array
 */
function readStyleLink()
{
    try {
        $pdo = getPdo();
        $requete = "SELECT * FROM `styles`
                  JOIN assoc_artistes_styles ON assoc_style_id = style_id";
        /*WHERE assoc_artiste_id = :idArtist;*/
        $stmt = $pdo->prepare($requete);
        $stmt->execute();
        $styles = $stmt->fetchAll();

        return $styles;
    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }

}

/**
 * Permet d'insérer une donnée
 * @param string $table
 * @param string $field1
 * @param $value1
 * @return string
 */
function create($table,$field1,$value1)
{
    try {
        $pdo = getPdo();

        $requete = "INSERT INTO `$table` (`$field1`)
                     VALUES (:val1);";

        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ':val1' => $value1,

        ));
        $res = $prepare->rowCount();
        $lastId = $pdo->lastInsertId();

        /*return $res;*/
        return $lastId;
    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
}

function createStyle($table,$field1,$field2,$value1,$value2)
{
    try {
        $pdo = getPdo();

        $requete = "INSERT INTO `$table` (`$field1`,`$field2`)
                     VALUES (:val1,:val2);";
        if(!empty($orderBy)) $requete.= "ORDER BY ".$orderBy;
        $prepare = $pdo->prepare($requete);
        $prepare->execute(array(
            ':val1' => $value1,
            ':val2' => $value2

        ));
        $res = $prepare->rowCount();
        $lastId = $pdo->lastInsertId();

        /*return $res;*/
        return $lastId;
    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }
};

/**
 * Permet de lier un style à un artiste lors de l'ajout d'un style
 * @param $artisteId
 * @param $styleId
 */
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
        $resultat = $prepare->rowCount();

        return $resultat;

    } catch (PDOException $e) {
        exit("❌🙀❌ OOPS :\n" . $e->getMessage());
    }


}

/**
 * Supprime un élément via son id
 * @param $table
 * @param $idTable
 * @param $id
 * @return int
 */
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

/**
 * Met à jour
 * @param $table
 * @param $field
 * @param $fieldId
 * @param $newValue
 * @param $idField
 * @return int
 */
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