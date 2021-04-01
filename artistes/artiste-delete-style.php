 <?php  include("../header.php");


 if(isset($_GET['artiste_id']) && !empty($_GET['artiste_id'])){
     $artisteId = htmlspecialchars($_GET['artiste_id']);

     try{
         // Connexion pdo
         $pdo = getPdo();

         //Liste les styles liés à l'artiste
         $requete = "SELECT * FROM `styles`
                  JOIN assoc_artistes_styles ON assoc_style_id = style_id
                  WHERE assoc_artiste_id = :artisteId;";
         $stmt = $pdo->prepare($requete);
         $stmt->execute([
             "artisteId"=>$artisteId
         ]);
         //Stock la liste de tous les styles dans la variables de type array
         $styles = $stmt->fetchAll();
     }catch (PDOException $e) {
         exit("❌🙀❌ OOPS :\n" . $e->getMessage());
     }

 }else{
     header("location:artiste-view-all.php");
 }

 ?>


 <form action="artiste-delete-style-check.php" method="post">
     <label for="artiste_style">Quel style souhaitez-vous supprimer?</label>
     <select name="style_id" id="artist_style">
         <?php foreach($styles as $style){
             echo "<option value=".$style['style_id'].">".$style['style_name']."</option>";
         }?>
     </select>
     <input onClick="return confirm('Êtes-vous sur de vouloir supprimer ce style?')" type="submit" value="supprimer ce style">
 </form>
