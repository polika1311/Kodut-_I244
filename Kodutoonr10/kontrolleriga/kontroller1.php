<?php

session_start();
require_once ("head.html");
$failid = array(
array("src"=>"pildid/nameless1.jpg","alt"=>"nimetu 1"),
array("src"=>"pildid/nameless2.jpg","alt"=>"nimetu 2"),
array("src"=>"pildid/nameless3.jpg","alt"=>"nimetu 3"),
array("src"=>"pildid/nameless4.jpg","alt"=>"nimetu 4"),
array("src"=>"pildid/nameless5.jpg","alt"=>"nimetu 5"),
array("src"=>"pildid/nameless6.jpg","alt"=>"nimetu 6"),

 );


if (!empty($_GET["mode"])) {
        $mode = $_GET["mode"];
}else{
    $mode=" ";
}
switch($mode){
	case "mainpage":
	include ("mainpage.html");
	break;
	
case "galerii":
	include ("galerii.html");	
break;
case "vote":
    if(empty($_SESSION["voted_for"])){
	    header ("Location:kontroller1.php?mode=tulemus");
	    exit(0);
	    } else {
	include ("vote.html");	
}
break;
case "tulemus":
include ("tulemus.html");	
break;
case "out":
$_SESSION = array();
			if (isset($_COOKIE[session_name()])) {
 	 			setcookie(session_name(), '', time()-42000, '/');
			}
			session_destroy();
			header ("Location:kontroller1.php?mode=mainpage");
	    exit(0);

default:
include ("mainpage.html");	
break;
	
}
require_once ("foot.html");
?>