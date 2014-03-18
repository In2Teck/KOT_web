<!doctype html>
<html>
<head>
<title>KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="apple-touch-startup-image" href="img/splash.png" />
<link rel="apple-touch-icon" href="img/icon.png" />
<link rel="apple-touch-icon" sizes="114x114" href="img/icon-ret.png" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script> 
<script src="js/Chart.js"></script>
<script src="js/jquery.simplemodal.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/stuff.js?<?php echo rand(19999,1929381) ?>"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
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
<div id="fb-root"></div>
<div data-role="page" id="home">
	<div data-role="content">
	<div id="container">
		<div>
			<div class="menu-title">AYUDA</div>
		</div>
		<div id="panel">
			<!-- PT1 -->
			<div style="float:left; width:50%; position:relative;">
				<a href="faq_menu.php">
				<div style="margin:0 auto; width:100%; position:absolute; left:20px; top:30px;">
					<img src="img/nuevo/preguntas_frecuentes.png" width="90" height="90" />
					<br />
					<div class="menu-item">PREGUNTAS <br/>FRECUENTES</div>
				</div>
				</a>
			</div>
			<div style="float:left; width:50%;  position:relative;">
				<a href="contacto.php">
				<div style="margin:0 auto; width:100%; position:absolute; left:180px; top:30px;">
					<img src="img/nuevo/conoce.png" width="90" height="90" />
					<br />
					<div class="menu-item">CONTACTO </div>
				</div>
				</a>
			</div>
			
			<div style="clear:both;"></div>
			
			<!-- PT2 -->
			<div style="float:left; width:50%; position:relative;">
				<a href="perfil.php">
				<div style="margin:0 auto; width:100%; position:absolute; top:200px; left:20px;">
					<img src="img/nuevo/sincroniza.png" width="90" heigth="90" />
					<br />
					<div class="menu-item">SINCRONIZA <br/> TU MÉTODO </div>
				</div>
				</a>
			</div>
			<div style="float:left; width:50%; position:relative;">
				<a href="">
				<div style="margin:0 auto; width:100%; position:absolute; top:200px; left:180px;">
					<img src="img/nuevo/tutorial.png" width="90" heigth="90" />
					<br />
					<div class="menu-item"> TUTORIAL </div>
				</div>
				</a>
			</div>
			
			<div style="clear:both;"></div>
			
		</div>
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