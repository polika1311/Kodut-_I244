<?php $bg_col="white"; // vaikimisi valge
if (isset($_POST['bg_color']) && $_POST['bg_color']!="") {
    $bg_col=htmlspecialchars($_POST['bg_color']);
} 
$input_text="Siia ilmub teie kommentaar";
if (isset($_POST['input']) && $_POST['input']!="") {
    $input_text=htmlspecialchars($_POST['input']);
}
$color_input="red";
if (isset($_POST['input_color']) && $_POST['input_color']!="") {
    $color_input=htmlspecialchars($_POST['input_color']);
}
 $border_size="20";
if (isset($_POST['input_border']) && $_POST['input_border']!="") {
    $border_size=htmlspecialchars($_POST['input_border']);
}
$border_radius="0";
if (isset($_POST['input_radius']) && $_POST['input_radius']!="") {
    $border_radius=htmlspecialchars($_POST['input_radius']);
}

$b_style="none";
if (isset($_POST['select_option']) && $_POST['select_option']!="") {
    $b_style=htmlspecialchars($_POST['select_option']);
} 
$b_col="red";
if (isset($_POST['border_color']) && $_POST['border_color']!="") {
    $b_col=htmlspecialchars($_POST['border_color']);
}
$font_size="23";
if (isset($_POST['input_suuurs']) && $_POST['input_suurus']!="") {
    $font_size=htmlspecialchars($_POST['input_suurus']);
} 
else{ 
	echo "Tee oma valik!!<br/>\n";
	echo"<br/>\n";
}

?>


<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <title>PHP ja andmeside</title>      
   			 <style type="text/css">
    
    #raam {
    background-color: <?php echo $bg_col; ?>;
    font-size: <?php echo $font_size; ?>px; 
    color: <?php echo $color_input; ?>; 
    border: <?php echo $border_size; ?>px; 
    border-style:<?php echo $b_style; ?>;
    border-radius:<?php echo $border_radius; ?>px; 
    display: inline-block;
    }
    
    #kass{
	    margin:25px;
	    font-size:18px;
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
        <form action="Text9.php" method="POST"> 
         	<textarea   name ="input" width="150%"> Kirjuta siia midagi</textarea>;</br>         
        		<input type="color" name="bg_color"> 
                		Taustavärvus <br/> 
                <input type="color" name="input_color"/> 
                Tektivärvus </br> 
                	Piirjoon</br>
                <input type="number" name="input_border" min="0" max="20"/> 
                Piirjoone laius (0-20px)
                 </br> 
                 <select  name="select_option">
                 <option value="solid">solid</option>
                 <option value="dotted">dotted</option>
                 <option value="dashed">dashed</option>
                 </select>
            <br/> 
            		<input type="color" name="border_color"/> 
                Piirjoone värvus </br> 
                 	<input type="number" name="input_radius" min="0" max="100"/> 
                Piirjoone nurga raadius (0-100px) </br>
                <input type="number" name="input_suurus" min="0" max="45"/> 
                Teksti suurus (0-45) </br> 
                </n>
            		<input type="submit" value="Esita" /> 
        </form> 
         </div>
</body> 
</html>