<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Menu</title>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript">
$(document).ready(function(){

			$("#menu > .click").on({
				
				click: function() {
					$("#menu ul").hide();
					$(this).children("ul").show();
					$(this).css ("font-size", "25px");
				}, 
				
				mouseleave: function() {
					$(this).children("ul").hide();
					$(this).css("font-size", "10px");
				}
			});
			
			
			$("#menu > .hover").on({
				 mouseenter: function() {
					$("#menu ul").hide();
					$(this).children("ul").show();
				}, 
				mouseleave: function() {
					$(this).children("ul").hide();
				}
			});
			
			$("p").click(function(){
				$(this).hide(1500);
			
			});
			$("p").mouseleave(function(){
				$(this).show(1500);
			
			});
			$("h1").click(function(){
				$(this).animate({
						"background-color": "red", 
						"font-size": "24px"
					}, 
						2000
					);
			});
			$("h1").mouseleave(function(){
				$(this).animate({
				"font-size": "34px"
			},
			2000
			);
			});
});
</script>

	<style type="text/css">
	/* see stiil siin lugeda läbi */
	
	h1 {
			
			background-color:green;
		}
body {
	background:skyblue;
	margin:0px;
}
#wrap {
	background: white;
	width: 800px; 
	margin: auto;
}
#content {
	padding:20px;
}


/* menüü stiil */
#menu, #menu ul {
	text-align: center; 
	background: blue;
	margin:0px; 
	padding: 0px;
	list-style: none; 
} 
#menu > li {
	display: inline-block;
	position: relative; /* et tema sees olevad alamelemendid saaks tema suhtes paigutada */
	width: 18%; 
}


/* menüülinkide ja dummylinkide (span) stiilid */
#menu a, #menu span {
	background: blue;
	color: white;
	font-weight: bold;
	text-decoration: none;
	display: inline-block; 
	width: 100%; /*link täidab kogu li laiuse*/
}
#menu a:hover, #menu span:hover{
	color: skyblue;
	background: navy;
}



/* alamenüü paigutamine */
#menu ul {
	position: absolute; /* vanema suhtes paigutamine*/
	left: 0px;
	width: 100%; 
	display: none; /*lehe laadimisel peidus */
}
#menu ul a {
	width: 100%;
}

	</style>
</head>
<body>

<div id="wrap">

	<ul id="menu">
		<li>
			<a href="?">tavaline link</a>
		</li><li class="hover">
			<span>kohale minnes</span>
			<ul>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
			</ul>
		</li><li class="hover">
			<span>kohale minnes</span>
			<ul>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
			</ul>
		</li><li class="click">
			<span>klikkides</span>
			<ul class = varv>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
			</ul>
		</li><li class="click">
			<span>klikkides</span>
			<ul>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
				<li><a href="?">link</a></li>
			</ul>
		</li>
	</ul>

<div id="content">
	<h1>Sisu</h1>
	<button onclick="$('h1').toggle(2000);">mängi</button>
	<p>Menüüsid tehakse paljude erinevate võtetega. Üks levinumaid kasutab liste ja alamliste.<br/>Vaikimisi peidetakse alamlist kasutades display:none; omadust. Seejärel kas JS või CSS abil reageeritakse kasutaja tegevustele (klikk, hiirega kohalolek) ning tuuakse alamenüü nähtavale</p>
	<p>Selles ülesandes proovime mõlemat realiseerida kasutades jQueryt. Kohaleminemise peale ilmuvat alamenüüd saab teha ka puhta CSS abil (#menu li:hover ul {display:block; } ) </p>
	<p>Pärast selle faili omale mahasalvestamist uurida menüü CSS-i. Soovitatav on proovida stiili muuta, et tekiks arusaam kuidas alamenüü paigutatud on.</p>
	<p>Kui CSS selge, siis asuda jQuery juurde</p>
</div>

</div>



</body>
</html>
