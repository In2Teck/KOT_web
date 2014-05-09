<?php

	$title = array(1 => "Hombre Intensivo", 2 => "Mujer Intensivo", 3 => "Hombre Progresivo", 4 => "Mujer Progresivo");
	$id = $_GET["id"];
?>
<!doctype html>
<html>
<head>
	<title>KOT - Mi Metodo KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/stuff.js"></script>

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
<div data-role="page" id="metodoDemo">
<div data-role="content">
	<div id="container">
		<div id="topbar">
			<div class="horizontal">
				<a href="#" data-rel="back"><img src="img/back-26.png" width="42" height="31" /></a>
			</div>
			<div class="bar-title-top horizontal" style="text-align:center;"><?php echo $title[$id]; ?></div>
		</div>
		<input type="hidden" id="idMetodo" value="<?php echo $id; ?>" />
		<div id="metodo" style="display:block;">
			
			<ul id="metodo-style">
				<li class="titulo">Nota Importante</li>
				<li class="contenido1" style="height:100px;"></li>
				<li class="titulo">Desayuno</li>
				<li class="contenido2"></li>
				<li class="titulo">Comida</li>
				<li class="contenido3"></li>
				<li class="titulo">Colación</li>
				<li class="contenido4"></li>
				<li class="titulo">Cena</li>
				<li class="contenido5"></li>
			</ul>
		</div>

	</div>
</div>
</div>	
</body>
</html>