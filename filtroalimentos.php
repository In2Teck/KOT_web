<?php
	include("stuff.php");
	$titulos = new AlimentosPermitidos;
?>
<!doctype html>
<html>
<head>
	<title>KOT - Filtro Permitidos</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<meta id="meta" name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
<script src="js/stuff.js"></script>

<style type="text/css" media="screen">
	@import url("style.css");
	@import url("jquery.mobile-1.0.css");
</style>
<!--Google Analytics-->
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-33116762-1']);
  
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	
	$(document).delegate('[data-role=page]', 'pageshow', function (event, ui) {			   
		try  {
			//custom variable  	
			var session = localStorage.getItem('sesionIniciada');
			if("true" == session){ 		
				
				_gaq.push(['_setCustomVar', 1,'Tipo de usuario','Registrado',2]);  		
			}
			else{
				_gaq.push(['_setCustomVar', 1,'Tipo de usuario','Visitante',2]);
			}
			
			var url = location.hash ? location.hash : location.href;
			_gaq.push(['_trackPageview', url]);
		} 
		catch(error) {
			console.log(error);
		}
	});	
</script>
</head>
<body>
<div data-role="page" id="filtroalimentos">
	<div data-role="content">
		<div id="container">
			<div id="topbar">
					<span class="bar-title-top" style="top:10px; width:100%; text-align:center;">Alimentos</span>
					<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>
			</div>
			<div id="panel">
				<!-- PT1 -->
				<div style="float:left; width:50%; position:relative;">
					<div style="margin:0 auto; width:100%; position:absolute; left:-10px; top:60px;">
						<a href="alimentos.php" data-tipo="1" data-role="button" class="mujer-btn">Mujer <br/>Intensivo</a>
					</div>
				</div>
				<div style="float:left; width:50%;  position:relative;">
					<div style="margin:0 auto; width:100%; position:absolute; left:155px; top:60px;">
						<a href="alimentos.php" data-tipo="3" data-role="button" class="hombre-btn">Hombre <br/>Intensivo</a>
					</div>
				</div>
				
				<div style="clear:both;"></div>
				
				<!-- PT2 -->
			<div style="float:left; width:50%; position:relative;">
					<div style="margin:0 auto; width:100%; position:absolute; left:-10px; top:180px;">
						<a href="alimentos.php" data-tipo="2" data-role="button" class="mujer-btn">Mujer <br/>Progresivo</a>
					</div>
				</div>
				<div style="float:left; width:50%;  position:relative;">
					<div style="margin:0 auto; width:100%; position:absolute; left:155px; top:180px;">
						<a href="alimentos.php" data-tipo="4" data-role="button" class="hombre-btn">Hombre <br/>Progresivo</a>
					</div>
				</div>
			</div>
		</div>
		
		<div style="background:url(img/Element-03.png); background-size:140%; border-top:solid 1px #d5d5d5; position:relative; width:320px; margin:0 auto; bottom:0; height:50px;">
			<div id="nav">
				<ul class="bot-menu">
					<a href="index.php"><li><img src="img/Element-08.png" width="35" height="35" /></li></a>
					<a href="index2.php"><li><img src="img/Element-09.png" width="35" height="35" /><li></a>
					<a href="index3.php"><li><img src="img/Element-11.png" width="35" height="35" /><li></a>
				</ul>
			</div>	
		</div>
	</div>
</div>

<script type="text/javascript">
	var val = localStorage.getItem("vegetariano");
	if (val == "true") {
		$("#vegetariano").attr('checked', '');
	}
	$.each($("a[data-role='button']"), function(index, value){
		$(value).attr("href", "alimentos.php?tipo=" + $(value).data("tipo") + "&veg=" + $("#vegetariano").is(':checked'));
	});
	var elem = document.querySelector('.js-switch');
	var init = new Switchery(elem);
	$(".switchery").after("&nbsp;&nbsp;Vegetariano");
	$(elem).change(function(){
		console.log("cambio");
		localStorage.setItem("vegetariano", $(elem).is(':checked'));
		$.each($("a[data-role='button']"), function(index, value){
			$(value).attr("href", "alimentos.php?tipo=" + $(value).data("tipo") + "&veg=" + $("#vegetariano").is(':checked'));
		});
	});
	//$("a[data-role='button']").attr("href", $("a[data-role='button']").attr("href") + "&veg=1")
</script>

</body>
</html>