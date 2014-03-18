<!doctype html>
<html>
<head>
	<title>KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta id="meta" name="viewport" content="width=device-width initial-scale=1.0" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="js/jquery.mobile-1.0.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/stuff.js"></script>
<style type="text/css" media="screen">
	@import url("style.css");
	@import url("jquery.mobile-1.0.css");
	#container{ background:#fff; }
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
<div data-role="page" id="contacto">
	<div data-role="content">
		<div id="container" style="background:#fff;">
			
			<div id="topbar">
				<span class="bar-title-top" style="top:10px; text-align:center; width:100%;">Contacto</span>
				<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>	
			</div>
			
			<div style="width:80px; margin:0 auto; padding-top:30px;">
				<img src="img/kot-mexico.png" />
			</div>
			<div style="width:80px; margin:0 auto; padding-top:40px;">
				<a href="http://www.kot.mx" target="__blank">www.kot.mx</a>
			</div>
			<div style="width:120px; margin:0 auto; padding-top:20px; text-align:center;">
				<div>DF: <a href="tel:63894219">6389-4219</a></div><br/>
				<div><a href="tel:018002634664">01-800-263-4664</a></div>
			</div>
			<div style="width:80px; margin:0 auto; padding-top:20px;">
				<a href="mailto:info@kot.mx">info@kot.mx</a>
			</div>
			<div style="width:95%; margin:0 auto; padding-top:30px;">
				<div style="display:inline-block; vertical-align:center; padding:30px;"><a href="https://www.facebook.com/KOTMexico">KOT México</a></div>
				<div style="display:inline-block; vertical-align:center; padding:30px;"><a href="https://twitter.com/KOTMexico">@KOTMexico</a></div>
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