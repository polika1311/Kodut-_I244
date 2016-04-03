<?php
$inimesed = array(
array("nimi"=>"Markus","sex"=>"mees","hobby"=>"metsas üksi jalutada"),
array("nimi"=>"Kairi","sex"=>"naine","hobby"=>"küpsetada piparkooke"),
array("nimi"=>"Peeter","sex"=>"mees","hobby"=>"kaua magada"),
array("nimi"=>"Evelin","sex"=>"naine","hobby"=>"reisida"),
array("nimi"=>"Rivo","sex"=>"mees","hobby"=>"lugeda"),
array("nimi"=>"Anna","sex"=>"naine","hobby"=>"kodus koristada"),

 );


include "fail.html";
foreach ($inimesed as $inimene){
	include "list.html";
}
?>


