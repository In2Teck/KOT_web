<!doctype html>
<html>
<head>
	<title>KOT - Mi Metodo KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta id="meta" name="viewport" content="width=device-width initial-scale=1.0" />
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
	<script type="text/javascript">
		$(document).ready(miMetodoFnc);
	</script>	
<div data-role="content">
	<div id="container">
		<div id="topbar">
			<div class="horizontal">
				<a href="#" data-rel="back"><img src="img/back_btn.png" width="40" height="40" /></a>
			</div>
			<div class="bar-title-top horizontal" style="text-align:center;">Mi Método</div>
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
			<div style="padding-top:20px; padding-left:53px; margin:auto;" data-role="controlgroup" data-type="horizontal">
				<input type="radio" name="metodobtn" id="btn-intensivo" checked="checked" value="intensivo"/>
        <label for="btn-intensivo" >Intensivo</label>
        <input type="radio" name="metodobtn" id="btn-progresivo" value="progresivo"  />
        <label for="btn-progresivo" >Progresivo</label>
			</div>
			<br/><br/>
			<h3 style="color:white; font-weight:normal;" id="semanas-h" align="center"></h3>
			
			<ul id="metodo-style">
				<li class="titulo">Desayuno</li>
				<li class="contenido"></li>
				<li class="titulo">Colación 1</li>
				<li class="contenido"></li>
				<li class="titulo">Comida</li>
				<li class="contenido"></li>
				<li class="titulo">Colación 2</li>
				<li class="contenido"></li>
				<li class="titulo">Cena</li>
				<li class="contenido"></li>
			</ul>
		</div>

	</div>
	<div style="background: white; border-top:solid 1px #d5d5d5; position:relative; width:320px; margin:0 auto; bottom:0; height:70px;">
		<div id="nav">
			<ul class="bot-menu">
				<a href="index.php"><li class="bottom-menu-item" style="text-align:center"><div style="margin:auto; width:50%"><img src="img/nuevo/icono_conoce.png" width="40" height="40" /></div>CONOCE KOT</li></a>
				<a href="index2.php"><li class="bottom-menu-item" style="margin-left:15px;"><div style="margin:auto; width:50%"><img src="img/nuevo/icono_mi_metodo.png" width="40" height="40" /></div>MI MÉTODO</li></a>
				<a href="index3.php"><li class="bottom-menu-item" style="text-align:center"><div style="margin:auto; width:50%"><img src="img/nuevo/icono_ayuda.png" width="40" height="40" /></div>AYUDA</li></a>
			</ul>
		</div>
	</div>
</div>
</div>
</body>
</html>