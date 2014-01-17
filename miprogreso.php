<!doctype html>
<html>
<head>
	<title>KOT - Mi Progreso</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<meta id="meta" name="viewport" content="width=device-width, initial-scale=1.0" />
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
<div data-role="page" id="miprogreso">
<div data-role="content">
	<div id="container">
		<div id="topbar">
				<span class="bar-title-top" style="top:10px; width:100%; text-align:center;">Mi Progreso</span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>
		</div>
		<!--  selector de peso o medidas -->

		<center>
			<div style="padding-top:0px;" data-role="controlgroup" data-type="horizontal">
			<a href="#" id="btn-kilos" data-role="button">Peso</a>
			<a href="#" id="btn-medidas" data-role="button">Medidas</a>
			</div>
		</center>
		<div style="background:#fff; height:355px">
		<!-- contenido grafica -->
		
		<div id="grafica-progreso">
			<br />
			<div id="con-meta">
				<div style="float:left; width:50%;">&nbsp;Actual: <span id="span-strt"></span></div>
				<div style="float:left; width:50%; text-align:right;">Progreso: <span id="span-end"></span> &nbsp;</div>
				<div style="clear:both;"></div>	
				<br />
			<center>
				<div id="cinta_azul" style="position:relative; width:100%; background:url(img/Banderilla.png) no-repeat; background-position:center; background-size:100%; height:25px; font-size:12px; color:#fff;">
					<!--<span id="cinta_azul" style="top:4px; text-align:center; width:100%;"></span>-->
				</div></center>
			</div>
		
		</div>

		<center>	
			<img width="320" height="200" id="imagen-grafica" />
		</center>
		<br />
		
		
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
</body>
</html>
