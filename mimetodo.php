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
<div data-role="page" id="mimetodo">
<div data-role="content">
	<div id="container">
		<div id="topbar">
				<span class="bar-title-top" style="top:10px; width:100%; text-align:center;">Mi Método</span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>
		</div>
		<div id="metodo-demo" style="display:none;">
			<h5 align="center">Registro usuario</h5>
			<div style="width:95%; margin:0 auto; background:#fff; -webkit-border-radius: 5px;">
				<p style="margin:0 auto 0 auto; width:95%;">Aún no has registrado un usuario, acude a un Especialista KOT para que te asigne un método exacto.</p>
			</div>
			<br />
			<ul id="alper-list" style="margin:0;">
				<a href="nutriologos.php"><li><span>Especialistas KOT</span></li></a>
			</ul>
			<br />
			<h4 align="center">Ejemplos de Métodos KOT</h4>
			<div id="cuadros-demo" style="width:90%; margin:0 auto; height:140px; background:#fff; -webkit-border-radius: 5px;">
				<div style="width:90%; margin:0 auto; padding-top:10px;">
					<div style="float:left; width:50%; position:relative;"><a href="metodoDemo.php?id=1"><img src="img/h.png" /></a><span style="position:absolute; left:10px; top:15px; color:#fff; font-size:12px; z-index:10;">Hombre Intensivo</span></div>
					<div style="float:left; width:50%; position:relative;"><a href="metodoDemo.php?id=2"><img src="img/m.png" /></a><span style="position:absolute; left:10px; top:15px; color:#fff; font-size:12px; z-index:10;">Mujer Intensivo</span></div>
					<br />
					<div style="float:left; width:50%; position:relative;"><a href="metodoDemo.php?id=3"><img src="img/h.png" /></a><span style="position:absolute; left:10px; top:15px; color:#fff; font-size:12px; z-index:10;">Hombre Progresivo</span></div>
					<div style="float:left; width:50%; position:relative;"><a href="metodoDemo.php?id=4"><img src="img/m.png" /></a><span style="position:absolute; left:10px; top:15px; color:#fff; font-size:12px; z-index:10;">Mujer Progresivo</span></div>
					<div style="clear:both;"></div>
				</div>
			</div>
		</div>
		<div id="metodo" style="display:none;">
			<center>
				<div style="padding-top:0px;" data-role="controlgroup" data-type="horizontal">
				<a href="#" id="btn-intensivo" data-role="button">Intensivo</a>
				<a href="#" id="btn-progresivo" data-role="button">Progresivo</a>
				</div>
			</center>
			<h4 align="center">Llevas <span id="semanas-int">4</span> Semanas en el metodo KOT</h4>
			
			<ul id="metodo-style">
				<li class="titulo">Desayuno</li>
				<li class="contenido"></li>
				<li class="titulo">Comida</li>
				<li class="contenido"></li>
				<li class="titulo">Colación</li>
				<li class="contenido"></li>
				<li class="titulo">Cena</li>
				<li class="contenido"></li>
			</ul>
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
</body>
</html>