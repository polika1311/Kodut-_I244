<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Kodune Ülesanne</title>
	<style type="text/css">
	.active { background: skyblue; padding: 10px;}
	</style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript">
$ (document).ready (function () {
	$("li").first (). addClass("active");

		$( "#next" ).click(function() {
			$("li"). each (function () {
			$(".active").removeClass().next().addClass("active");
			if ($(".active"). is (":last-child")) {
				$("li").first().addClass("active")
				
			}
		});
	});
		
    $( "#prev" ).click(function() {
	    $("li"). each (function () {
			$(".active").removeClass().prev().addClass("active");
			if ($(".active"). is (":first-child")) {
				$("li").last().addClass("active")
			}
			});
		});
    
    
});
  	</script>
</head>
<body>
<button id="next">edasi</button>
<button id="prev">tagasi</button>

<ul>
<li>esimene</li>
<li>teine</li>
<li id=kolmas>kolmas</li>
<li>neljas</li>
</ul>

</body>
</html>