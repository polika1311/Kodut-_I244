<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>5 kodune t��</title>
<script>

	
window.onload = function() {
moveL();
};

function moveL(){
	var something = document.getElementById("kogu");
something.onclick = showAlert;
};

function showAlert() {
  this.style.left=Math.random()*500+"px";
  this.style.top=Math.random ()*500+"px";
}
</script>
	
	<style type="text/css">'
	
body {
	background: #0A24A9;
}
#kogu {
	position:fixed;
	width: 150px;
	height: 150px;
	left:300px;
	bottom:250px;
}
.layer {
	border-radius: 50%;
	position: absolute;
}
.layer:nth-child(1) {
	width: 100%;
	height: 100%;
	border:solid 2px grey;
	background: white;
	left: 0%;
	top: 0%;
}
.layer:nth-child(2) {
	width: 90%;
	height: 90%;
	border:solid 2px orangered;
	background: red;
	left: 5%;
	top: 5%;
}
.layer:nth-child(3) {
	width: 70%;
	height: 70%;
	border:solid 2px grey;
	background: white;
	left: 15%;
	top: 15%;
}
.layer:nth-child(4) {
	width: 50%;
	height: 50%;
	border:solid 2px orangered;
	background: red;
	left: 25%;
	top: 25%;
}
.layer:nth-child(5) {
	width: 30%;
	height: 30%;
	border:solid 2px grey;
	background: white;
	left: 35%;
	top: 35%;
}
.layer:nth-child(6) {
	width: 10%;
	height: 10%;
	border:solid 2px orangered;
	background: red;
	left: 45%;
	top: 45%;
}
#img1 {
	position: fixed;
	bottom: 0px;
	left:0px;
	width: 100%;
}


    
	</style>
</head>
<body>
<img id="img1" src="duck.png">

<div id="kogu">
<div class="layer"></div>
<div class="layer"></div>
<div class="layer"></div>
<div class="layer"></div>
<div class="layer"></div>
<div class="layer"></div>

</div>

</body>
</html>
