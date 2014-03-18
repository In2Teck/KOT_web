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
			<div id="container" style="font-size:14px;background:white;">
				<div id="topbar">
						<span class="bar-title-top" style="top:10px; text-align:center; width:100%;">IMC</span>
						<a href="#" data-rel="back"><img style="position:absolute; left:15px; top:5px;" src="img/back-26.png" width="42" height="31" /></a>
				</div>
			<div style="width:95%; margin:0 auto; padding-top:10px; font-size:14px;">Calcula cuál es tu IMC y conoce con cuántas semanas llegarás a tu peso meta con la ayuda de KOT.</div>
			
			<div style="width:100%; height:100%; position:relative; left:15px; top:30px;">
					<div style="width:130px;margin:auto;font-size:16px;">
						<a href="#" onclick="showIMC()">¿Qué es el IMC?</a>
					</div><br/>
					<div style="width:200px;margin:auto">
						<div class="horizontal label">Sexo:</div>
						<div class="horizontal sexo-combo">
							<select name="select-sexo" id="sexo">
							  <option value="H">Hombre</option>
							  <option value="M">Mujer</option>
							</select>
						</div>
					</div>
					<div style="width:200px;margin:auto">
						<div class="horizontal label">Peso (kg):</div>
						<div class="horizontal peso-input">
							<input type="number" name="peso" id="peso" value="0" />
						</div>
					</div>
					<div style="width:240px;margin:auto">
						<div class="horizontal label">Estatura (m):</div>
						<div class="horizontal estatura-input">
							<input type="text" name="estatura" id="estatura" pattern="[0-9].[0-9]*" maxlength="4" value="0" title="error"/>
						</div>
					</div><br/>
					<div style="width:70px; font-size:16px; margin:auto; padding-top:5px;">
						<a href="#" onclick="calculaIMC()"> Calcular </a>
					</div><br/><br/>
					<div style="width:215px;margin:auto;font-size:16px;">
						<a href="nutriologos.php" > Encuentra a tu especialista KOT </a>
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