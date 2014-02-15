<!doctype html>
<html>
<head>
	<title>KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="js/jquery.mobile-1.0.min.js"></script>
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
<div data-role="page" id="perfil">
<div data-role="content">
	<div id="container">
		<div id="topbar">
				<span class="bar-title-top" style="top:10px; width:100%; text-align:center;" id="header-bar-text"></span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>
		</div>
		<div id="no-ses" style="display:none;">
		<div id="login-fields">
			<div style="width:90%; margin:0 auto;">
			
			<p style="font-size:12px;">Si ya acudiste con tu especialista KOT enlaza tu información</p>
			<input type="text" id="user" value="Correo Electronico" onfocus="this.value=''" onblur="if(this.value=='') this.value='Correo Electronico'" />
			<input type="text" id="pass" value="Password o Codigo" onfocus="if(this.value == 'Password o Codigo'){this.value='';} this.type='password'" onblur="if(this.value==''){ this.value='Password o Codigo'; this.type='text'; }" />
			<input type="button" value="Enlazar Datos" id="checkLogin" />
			</div>
		</div>
		
		</div>
		<!-- SESION INICIADA -->
		<div id="info-user" style="display:none;">
			<h4>Información Personal</h4>
			
			<ul id="info-data">
				<li id="numero-kot"></li>
				<li id="info-name"></li>
				<li id="info-email"></li>
				<li id="info-edad"></li>
				<li id="info-estatura"></li>
				<li id="info-especialista"></li>
			</ul>
			<a href="#" style="position:relative; top:50px;" id="desconectar-cuenta" data-role="button">Desconectar Cuenta</a>
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