<!doctype html>
<html>
<head>
	<title>KOT - Mi Progreso</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<meta id="meta" name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
<script src="js/Chart.js"></script>
<script src="js/jquery.simplemodal.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/facebook.js"></script>
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
				<div class="horizontal">
				<a href="#" style="margin-left:10px" data-rel="back"><img src="img/back_btn.png" width="50" height="50" /></a>
			</div>
			<div class="bar-title-top horizontal" style="text-align:center; margin-left:-10px;">Mi Progreso</div>
			</div><br/>
			<!--  selector de peso o medidas -->

			
			<fieldset style="padding-top:5px; padding-left:20px; " data-role="controlgroup" data-type="horizontal">
				<input type="radio" name="progresobtn" id="btn-kilos" checked="checked" value="peso"/>
	      <label for="btn-kilos">Peso</label>
	      <input type="radio" name="progresobtn" id="btn-medidas" value="medidas" />
	      <label for="btn-medidas">Medidas</label>
	      <input type="radio" name="progresobtn" id="btn-grasa" value="grasa" />
	      <label for="btn-grasa">% Grasa</label>
			</fieldset >
			
			<div style="background:#fff; height:355px">
				<div id="grafica-progreso">
					<br />
					<div id="con-meta">
						<div style="float:left; width:50%;">&nbsp;Actual: <span id="span-strt"></span></div>
						<div style="float:left; width:50%; text-align:right;">Progreso: <span id="span-end"></span> &nbsp;</div>
						<div style="clear:both;"></div>	
						<br />
						<center>
							<div id="cinta_meta"></div>
						</center>
					</div>
				</div>

				<br/>
				<center>	
					<canvas width="310" height="230" style="max-width:310px; max-height:230px;" id="imagen-grafica"></canvas>
				</center>
				<br />
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

		<div id="fb-modal" class="invisible">
		  <center><h2 id="titulo-txt"></h2></center>
		  <div id="content">
		  	<center>
		    	<div id="mensaje-txt" class="horizontal"></div><br/><br/>
		    	<input type="hidden" id="hidden-val"/>
		    	<input type="hidden" id="hidden-kilos"/>
		    	<div>
		    		<input type="button" value="SÍ" onclick="$.modal.close(); publishLogro($('#hidden-val').val(), $('#hidden-kilos').val());"/>
		    		<input type="button" value="NO" onclick="$.modal.close();"/>
		    	</div>
		    </center>
		  </div>
		</div>

	</div>
</div>
</body>
</html>
