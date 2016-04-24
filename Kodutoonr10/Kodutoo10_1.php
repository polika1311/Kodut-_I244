<?php 
$bg_col="#fff"; // vaikimisi valge
if (isset($_POST["bg_color"])) 
    $bg_col=htmlspecialchars($_POST["bg_color"]);
 
$input_text="Siia ilmub teie kommentaar";
if (isset($_POST['input']) && $_POST['input']!="") 
    $input_text=htmlspecialchars($_POST['input']);

$color_input="#fff";
if (isset($_POST['input_color']) && $_POST['input_color']!="") 
    $color_input=htmlspecialchars($_POST['input_color']);

 $border_size=20;
if (isset($_POST['input_border'])) 
    $border_size=htmlspecialchars($_POST['input_border']);

$border_radius=0;
if (isset($_POST['input_radius'])) 
    $border_radius=htmlspecialchars($_POST['input_radius']);


$b_style="none";
if (isset($_POST['select_option']) && $_POST['select_option']!="") 
    $b_style=htmlspecialchars($_POST['select_option']);

$b_col="red";
if (isset($_POST['border_color'])) 
    $b_col=htmlspecialchars($_POST['border_color']);
    
$border=$b_col." ".$b_style." ".$border_size; 



if (!empty($_POST)) { // VORM ESITATI
$errors=array();
if (!empty($_POST["input"])){
}
else{
	$errors[]="tekst puudu!";
}
if (!empty($_POST["input_border"])){	
}
else{
	$errors[]="piirjoone laius puudu!";
}
if (!empty($_POST["input_radius"])){	
}
else{
	$errors[]="piirjoone nurga radius puudu!";
}
if (!empty($_POST["select_option"])){
}
else{
	$errors[]="piirjoone valik puudu!";
}
if (!empty($_POST["border_color"])){
}
else{
	$errors[]="v?rv puudu!";
}

}


?>


<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <title>PHP ja andmeside</title>      
   			 <style type="text/css">
    
    #raam {
    background: <?php echo $bg_col; ?>;
    color: <?php echo $color_input; ?>; 
    border: <?php echo $border; ?>px;
 
   border-radius:<?php echo $border_radius; ?>px; 
    display: inline-block;
    }
    
    #kass{
	    margin:25px;
	    font-size:12px;
	    line-height:2;
	    font-style:italic;
	    
    }
    		</style>
    	</head>
 <body>
     <div id="raam">
      	<?php echo $input_text; ?>
       	</div>   
    <div id="kass">
        <form action="Kodutoo10_1.php" method="POST"> 
         	<textarea   name ="input" width="150%"> <?php if (!empty($_POST["input"]))
echo htmlspecialchars($_POST["input"]); ?>  </textarea>      
</br>
        		<input type="color" name="bg_color" <?php if (!empty($_POST["bg_color"]))
echo "value =\"".htmlspecialchars($_POST["bg_color"])."\" "; ?> /> 
                		Taustavärvus </br> 
                <input type="color" name="input_color" <?php if (!empty($_POST["input_color"]))
		echo "value =\"".htmlspecialchars($_POST["input_color"])."\" ";  ?>/> 
                Tektivärvus </br> 
    
<input type="number" name="input_border" <?php if (!empty($_POST["input_border"]) && is_numeric ($_POST["input_border"]))
		echo "value =\"".htmlspecialchars($_POST["input_border"])."\" "; ?> min="0" max="20"/> 
                Piirjoone laius (0-20px)
                 <br/> 
                
                 Piirjoon:<br/>
                 <label><input type ="radio" name="select_option" value="solid"<?php if (!empty($_POST["select_option"]) && $_POST ["select_option"]=="solid")
		echo "checked"; ?>/>solid</label><br/>
                 <label><input type ="radio" name="select_option" value="dotted"<?php if (!empty($_POST["select_option"]) && $_POST ["select_option"]=="dotted")
		echo "checked"; ?>/>dotted</label><br/>
		<label><input type ="radio" name="select_option" value="dashed"<?php if (!empty($_POST["select_option"]) && $_POST ["select_option"]=="dashed")
		echo "checked"; ?>/>dashed</label><br/>
            <br/> 
            		<input type="color" name="border_color"<?php if (!empty($_POST["border_color"]))
echo "value =\"".htmlspecialchars($_POST["border_color"])."\" "; ?>/> 
                Piirjoone värvus </br> 
                 	<input type="number" name="input_radius" <?php if (!empty($_POST["input_radius"]) && is_numeric ($_POST["input_radius"]))
		echo "value =\"".htmlspecialchars($_POST["input_radius"])."\" "; ?>  min="0" max="100"/> 
                Piirjoone nurga raadius (0-100px) <br/>
              </br> 
               
            		<input type="submit" value="Esita" /> 
        </form> 
        <?php if(!empty($errors)):?>
	<?php foreach ($errors as $e):?>
	<p style="color:red"><?php echo $e;?></p>
	<?php endforeach;?>
	<?php endif;?>
            
         </div>
</body> 
</html>