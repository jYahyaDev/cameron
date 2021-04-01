 <?php  include("../header.php");

 $artisteId = $_GET['artiste_id'];


 $pdo = getPdo();
 $requete = "SELECT * FROM `styles`
                  JOIN assoc_artistes_styles ON assoc_style_id = style_id
                  WHERE assoc_artiste_id = :artisteId;";
 $stmt = $pdo->prepare($requete);
 $stmt->execute([
     "artisteId"=>$artisteId
 ]);

 $styles = $stmt->fetchAll();

 ?>


 <form action="artiste-delete-style-check.php" method="post">
     <label for="artiste_style">Quel style souhaitez-vous supprimer?</label>
     <select name="style_id" id="artist_style">
         <?php foreach($styles as $style){
             echo "<option value=".$style['style_id'].">".$style['style_name']."</option>";
         }?>
     </select>
     <input type="submit" value="supprimer ce style">
 </form>
