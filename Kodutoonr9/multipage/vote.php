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
<h3>Vali oma lemmik</h3>
<form action ="tulemus.php" method ="GET">

<?php foreach($failid as $e => $foto): ?>
	<p>
		<?php $pn = $e+1; ?>
		<label for="<?php echo "p{$pn}"; ?>">
			<img src="<?php echo $foto["src"]; ?>" alt="<?php echo $foto["alt"]; ?>"/>
		</label>
		<input type="radio" value="<?php echo $pn; ?>" id="<?php echo 'p{$pn}'; ?>" name="pildike"/>
	</p>
	<?php endforeach; ?>
	<br/>
	<input type="submit" value="Valin!"/>
</form>
<?php
require_once ("foot.html");
?>