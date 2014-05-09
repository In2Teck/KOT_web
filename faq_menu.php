<!doctype html>
<html>
<head>
	<title>KOT - Preguntas Frecuentes</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<meta id="meta" name="viewport" content="width=device-width initial-scale=1.0" />
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
<div data-role="page" id="faqmenu">
	<div data-role="content">
		<div id="container">
			<div id="topbar">
				<div class="horizontal">
					<a href="#" style="margin-left:10px" data-rel="back"><img src="img/back_btn.png" width="50" height="50" /></a>
				</div>
				<div class="bar-title-top horizontal" style="text-align:center;">Preguntas Frecuentes</div>
			</div>
			<div id="panel" style="text-align:center">
				<!-- PT1 -->
				<div style="float:left; width:65%; position:relative;">
					<a href="faq.php?tipo=1" data-tipo="1" style="text-shadow:none !important; color:#fff; font-weight:bold; font-size:18px;">
						<div style="margin:0 auto; width:100%; position:absolute; left:50px; top:78px; background:#ab218e;">
							Sobre el <br/>Método KOT
						</div>
					</a>
				</div>
				
				<div style="clear:both;"></div>
				
				<div style="float:left; width:65%;  position:relative;">
					<a href="faq.php?tipo=2" data-tipo="2" style="text-shadow:none !important; color:#fff; font-weight:bold; font-size:18px;">
						<div style="margin:0 auto; width:100%; position:absolute; left:50px; top:160px; background:#5c2d91;">
							Al hacer el <br/>Método KOT
						</div>
					</a>
				</div>

				<div style="clear:both;"></div>

				<div style="float:left; width:65%; position:relative;">
					<a href="faq.php?tipo=3" data-tipo="3" style="text-shadow:none !important; color:#fff; font-weight:bold; font-size:18px;">
						<div style="margin:0 auto; width:100%; position:absolute; left:50px; top:240px; background:#005da3; height:52px;">
							<div style="margin-top:12px;">Sobre los productos</div>
						</div>
					</a>
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