<?php
require_once ("head.html");
//kontrollime kasutaja valiku
if (!empty($_GET)) { 
$errors=array();
if (!empty($_GET["pildike"])){// pilt valitud
	
$errors[] = $_GET["pildike"];


}

}
else{
	$errors[]="valik puudu!";

}

?>
<h3>Valiku tulemus</h3>
<?php if(!empty($errors)):?>
	<?php foreach ($errors as $i):?>
	<p style="color:green"><?php echo "Sa valisid pildi nr $i";?></p>
	
	<?php endforeach;?>
	<?php endif;?>

<?php
require_once ("foot.html");
?>