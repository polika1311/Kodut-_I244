<?php
require_once ("head.html");
$failid = array(
array("src"=>"pildid/nameless1.jpg","alt"=>"nimetu 1"),
array("src"=>"pildid/nameless2.jpg","alt"=>"nimetu 2"),
array("src"=>"pildid/nameless3.jpg","alt"=>"nimetu 3"),
array("src"=>"pildid/nameless4.jpg","alt"=>"nimetu 4"),
array("src"=>"pildid/nameless5.jpg","alt"=>"nimetu 5"),
array("src"=>"pildid/nameless6.jpg","alt"=>"nimetu 6"),

 );
?>
<h3>Fotod</h3>
<div id = "gallery">
<?php foreach($failid as $e => $foto): ?>
    <img src ="<?php echo $foto["src"]; ?>"  alt="<?php echo $e ["alt"]; ?>"/> 
<?php endforeach; ?>
<?php
require_once ("foot.html");
?>