<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>4 kodune töö</title>
	<style type="text/css">
#grid{
position:fixed;
height:150px;
width:150px;
top:100px;
left:250px;

}
.module{
	border-radius: 50%;
    position:absolute;
    
}
.module:nth-child(1) {
height:100%;
width:100%;
background: white;
border: 20px solid white;
left:0px;
top:0px;
}
.module:nth-child(2) {
height:85%;
width:85%;
background:red;
border: 20px solid red;
left:10px;
top:10px;
}
.module:nth-child(3) {
height:75%;
width:75%;
background:white;
border: 20px solid white;
left:17px;
top:17px;
}
.module:nth-child(4) {
height:65%;
width:65%;
background:red;
border: 20px solid red;
left:24px;
top:24px;
}
.module:nth-child(5) {
height:55%;
width:55%;
background:white;
border: 20px solid white;
left:32px;
top:32px;
}
.module:nth-child(6) {
height:45%;
width:45%;
background:red;
border: 20px solid red;
left:40px;
top:40px;
}



#img1{
max-width: 100%;
position:fixed;
left: 0px;
background-size: cover;
}
body {
background:#0A24A9;
}
    
	</style>
</head>
<body>
<img id="img1" src="duck.png">
<div id="grid">


<div class="module"></div>
<div class="module"></div>
<div class="module"></div>
<div class="module"></div>
<div class="module"></div>
<div class="module"></div>


</div>

</body>
</html>
