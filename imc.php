<html>
<head>
<title>KOT</title>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="js/jquery.mobile-1.0.min.js"></script>
<script src="js/jquery.simplemodal.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
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
	<div data-role="page" id="imc">
		<div data-role="content">
			<div id="container" style="font-size:14px; background:#5CC1A6; color:white; text-shadow:none;">
				<div id="topbar">
					<div class="horizontal">
						<a href="#" style="margin-left:10px" data-rel="back"><img src="img/back_btn.png" width="50" height="50" /></a>
					</div>
					<div class="bar-title-top horizontal" style="text-align:center; margin-left:-15px">IMC</div>
				</div>
			<br/>	
			<div style="width:95%; margin:0 auto; padding-top:10px; font-size:14px; font-weight:bold;">Calcula cuál es tu IMC y conoce con cuántas semanas llegarás a tu peso meta con la ayuda de KOT.</div>
			
			<div style="width:100%; height:100%; position:relative; left:15px; top:20px;">
					<div style="width:180px;margin:auto;font-size:26px;">
						<a href="#" class="kot-link" onclick="showIMC()">¿Qué es el IMC?</a>
					</div>
					<div style="width:215px;margin:auto">
						<div class="horizontal label" style="margin-left:24px">Sexo:</div>
						<div class="horizontal sexo-combo">
							<select name="select-sexo" id="sexo">
							  <option style="color:5CC1A6;" value="H">HOMBRE</option>
							  <option style="color:5CC1A6;" value="M">MUJER</option>
							</select>
						</div>
					</div>
					<div style="width:215px;margin:auto">
						<div class="horizontal label">Peso (kg):</div>
						<div class="horizontal peso-input">
							<input type="text" name="peso" id="peso" pattern="[0-9]*" maxlength="3" value="0" style="text-align:center;color:#5CC1A6;font-weight:bold;"/>
						</div>
					</div>
					<div style="width:215px;margin:auto">
						<div class="horizontal label" style="margin-left:-20px">Estatura (m):</div>
						<div class="horizontal estatura-input">
							<input type="text" name="estatura" id="estatura" pattern="[0-9].[0-9]*" maxlength="4" value="0" title="error" style="text-align:center;color:#5CC1A6;font-weight:bold;"/>
						</div>
					</div><br/>
					<div style="width:70px; font-size:22px; margin:auto; padding-top:5px;">
						<a href="#" class="kot-link" style="margin-left:-10px;" onclick="calculaIMC()"> Calcular </a>
					</div><br/>
					<div style="width:215px;margin:auto;font-size:16px;">
						<a href="nutriologos.php" class="kot-link"> Encuentra a tu especialista KOT </a>
					</div>
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

		<div id="resultado" class="invisible">
		  <center><h2>Resultado</h2></center>
		  <div id="content">
		  	<center>
		    	<div class="horizontal">IMC: &nbsp;</div><div id="imc-txt" class="horizontal"></div><br/>
		    	<div id="mensaje-txt" class="horizontal"></div><br/><br/>
		    	<div class="horizontal">Semanas en KOT para peso ideal:&nbsp;</div><div id="semanas-txt" class="horizontal"></div><br/><br/>
		    	<a href="#" onclick="$.modal.close();">OK</a>
		    </center>
		  </div>
		</div>

		<div id="imc-modal" class="invisible">
		  <center><h2>¿Qué es el IMC?</h2></center>
		  <div id="content">
		  	<center>
		    	<div>El índice de masa corporal (IMC) es una medida de asociación entre el peso y la talla de un individuo. En el caso de los adultos se ha utilizado como uno de los recursos para evaluar su estado nutricional, de acuerdo con los valores propuestos por la Organización Mundial de la Salud. Ingresa los valores y descubre tu IMC.
		    	</div><br/>
		    	<a href="#" onclick="$.modal.close();">OK</a>
		    </center>
		  </div>
		</div>

	</div>

</body>
</html>