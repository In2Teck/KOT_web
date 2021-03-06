<!doctype html>
<html>
<head>
	<title>KOT - Mi Progreso</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
<script type="text/javascript"
       src='https://www.google.com/jsapi?autoload={"modules":[{"name":"visualization","version":"1"}]}'>
   </script>
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
<div data-role="page" id="nuevo_peso">
<div data-role="content">
	<div id="container">
		<div id="topbar">
				<span class="bar-title-top" style="top:10px; width:100%; text-align:center;" id="bar-titulo-new">Nuevo Peso</span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>
		</div>
		<!--  selector de peso o medidas -->
		
		<input type="hidden" id="tipo" value="<?php echo $_GET["t"]; ?>" />
		
		<div style="width:90%; margin: 0 auto; height:120px; background:#fff; -webkit-border-radius:5px; position:relative;">
			<h4 align="center" id="h4reg">Registrar Nuevo Peso</h4>
			<input type="text" id="data" style="width:90%; margin:0 auto;" />
			<a href="#" data-role="button" id="registrar" style="width:100px; font-size:11px; position:absolute;left:167px; top:74px;">Registrar</a>
		</div>
		
	</div>
</div>
</div>	
</body>
</html>