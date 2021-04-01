 <?php include("../header.php");

 $styleId = $_POST['style_id'];

 echo $styleId;


delete('assoc_artistes_styles','assoc_style_id',$styleId);





