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

$mode="";
if(!empty($_GET["mode"])){
	$mode=$_GET["mode"];
	
}
switch($mode){
	case "mainpage":
	include ("mainpage.html");
	break;
	
case "tulemus":

	include ("tulemus.html");	
break;
case "galerii":

	include ("galerii.html");	
break;
case "vote":

	include ("vote.html");	
break;


default:
include ("mainpage.html");	
break;
	
}
require_once ("foot.html");
?>