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
		<div id="container" style="background:#5CC1A6; color:#fff;">
			
			<div id="topbar">
				<div class="horizontal">
					<a href="#" style="margin-left:10px" data-rel="back"><img src="img/back_btn.png" width="50" height="50" /></a>
				</div>
				<span class="bar-title-top horizontal" style="text-align:center;margin-left:-20px;">Contacto</span>
			</div>
			
			<div style="width:125px; margin:0 auto; padding-top:25px;">
				<img src="img/kot-mexico.png" width="135" height="100" />
			</div>
			<div style="width:90px; margin:0 auto; padding-top:10px;">
				<div><a class="contacto-txt" href="http://www.kot.mx" target="__blank">www.kot.mx</a></div>
			</div>
			<div style="width:160px; margin:0 auto; padding-top:15px; text-align:center;">
				<div><a class="contacto-txt" href="tel:63894219">6389-4219</a></div><br/>
				<div><a class="contacto-txt" href="tel:018002634664">01-800-263-4664</a></div>
			</div>
			<div style="width:100px; margin:0 auto; padding-top:15px;">
				<a class="contacto-txt" href="mailto:info@kot.mx">info@kot.mx</a>
			</div>
			<div style="width:95%; margin:0 auto; padding-top:25px;">
				<div style="display:inline-block; padding-left:10px;">
					<div class="horizontal"><img src="img/fb.png" width="30" height="30"/></div>
					<div class="horizontal"><a style="font-size:16px;" class="contacto-txt" href="https://www.facebook.com/KOTMexico">KOT México</a></div>
				</div>
				<div style="display:inline-block; padding-left:30px;">
					<div class="horizontal"><img src="img/tw.png" width="30" height="30"/></div>
					<div class="horizontal"><a style="font-size:16px;" class="contacto-txt" href="https://twitter.com/KOTMexico">@KOTMexico</a></div>
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