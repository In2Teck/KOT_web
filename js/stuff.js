var diego;

var expandeMe = function(id,count,categoria){
	
	var url = "http://kot.mx/movil_prueba/json.php?action=textDetailsProducts&item="+id+"&categoria="+categoria;
	var itemDOM =  $("#text-details-"+id);
	if(count > 180){
		$.get(url,function(response){
			itemDOM.text(response);
		});
		
	}	 
}

function publish_on_fb(id,desc){
	
	FB.ui(
	  {
	    method: 'feed',
	    name: 'Bajar de peso no siempre tiene que ser dificil',
	    link: 'http://kot.mx',
	    picture: 'http://kot.mx/movil_prueba/img/productos/'+id+'.jpg',
	    description: desc
	  },
	  function(response) {
	    if (response && response.post_id) {
	      alert('Ha sido publicado');
	    }
	  }
	);

 }

var publish_restaurant = function(platillo,restaurant){

		FB.ui(
		  {
			
			method: 'feed',
			name: 'Bajar de peso no siempre tiene que ser dificil',
			link: 'http://kot.mx',
			picture: 'http://kot.mx/images/logo.jpg',
			description: 'Siguiendo el Metodo KOT comiendo '+platillo+' en '+restaurant+''
		  },
		  function(response) {
			if (response && response.post_id) {
			  alert('Se ha compartido correctamente!');
			} 
		  }
		);


 }

var publish_miprogreso = function(){

		FB.ui(
		  {

			method: 'feed',
			name: 'Metodo KOT',
			link: 'http://kot.mx',
			picture: 'http://kot.mx/images/logo.jpg',
			description: 'En camino a completar mi meta!'
			
		  },
		  function(response) {
			if (response && response.post_id) {
			  alert('Se ha compartido correctamente!');
			} 
		  }
		);


 }


var ShowMetodo = function(id_user,tipo){
	
	var url = 'http://kot.mx/movil_prueba/json.php?action=getMetodo&idUser='+id_user;
	var c = new Array();
	var sd;
	$.get(url,function(response){
		var data = $.parseJSON(response);
		var colacionVar;
		if(tipo=="intensivo"){
			sd = data.intensivo;
			colacionVar = sd.colacion.fruta;
		}else{
			sd = data.progresivo;
			colacionVar = sd.colacion.frutas;
		}
		
			c[0] = '<ul class="tablas-metodo" style="width:100%;">';
				c[0]+= '<li><span>'+sd.desayuno.cereal+' <a href="verpermitido.php?id=2">cereal</a></span></li>';
				c[0]+= '<li><span>'+sd.desayuno.proteinas_vegetales+' <a href="verpermitido.php?id=10">prote\u00edna vegetal</a></span></li>';
				c[0]+= '<li><span>'+sd.desayuno.frutas+' <a href="verpermitido.php?id=7">frutas</a></span></li>';
				c[0]+= '<li><span>'+sd.desayuno.lacteos+' <a href="verpermitido.php?id=6">l\u00e1cteos</a></span></li>';
				c[0]+= '<li><span>'+sd.desayuno.productosKot+' <a href="productos.php">productos KOT</a></span></li>';
			c[0]+= "</ul>";
			c[0]+= '<div style="clear:both;"></div>';

			c[1] = '<ul class="tablas-metodo">';
				c[1]+= '<li><span>'+sd.comida.cereal+' cereal</span></li>';
				c[1]+= '<li><span>'+sd.comida.proteinas+' <a href="verpermitido.php?id=5">prote\u00edna animal</a></span></li>';
				c[1]+= '<li><span>'+sd.comida.vegetales_crudo+' <a href="verpermitido.php?id=3">vegetales crudos</a></span></li>';
				c[1]+= '<li><span>'+sd.comida.vegetales_cocidas+' <a href="verpermitido.php?id=4">vegetales cocidos</a></span></li>';
				c[1]+= '<li><span>'+sd.comida.cucharadas_aceite+' 2 <a href="verpermitido.php?id=8">cucharadas de aceite</a></span></li>';
			c[1]+= "</ul>";
			c[1]+= '<div style="clear:both;"></div>';

			c[2] = '<ul class="tablas-metodo">';
				c[2]+= '<li><span>'+colacionVar+' <a href="verpermitido.php?id=7">frutas</a></span></li>';
				c[2]+= '<li><span>'+sd.colacion.productosKot+' <a href="productos.php">productos KOT</a></span></li>';
			c[2]+= "</ul>";
			c[2]+= '<div style="clear:both;"></div>';

			c[3] = '<ul class="tablas-metodo">';
				c[3]+= '<li><span>'+sd.cena.cereal+' <a href="verpermitido.php?id=2">cereal</a></span></li>';
				c[3]+= '<li><span>'+sd.cena.proteinas+' <a href="verpermitido.php?id=5">prote\u00edna animal</a></span></li>';
				c[3]+= '<li><span>'+sd.cena.vegetales_crudo+' <a href="verpermitido.php?id=3">vegetales crudos</a></span></li>';
				c[3]+= '<li><span>'+sd.cena.cucharadas_aceite+' 2 <a href="verpermitido.php?id=8">cucharadas de aceite</a></span></li>';
				c[3]+= '<li><span>'+sd.cena.vegetales_cocidas+' <a href="verpermitido.php?id=4">vegetales cocidos</a></span></li>';
				c[3]+= '<li><span>'+sd.cena.frutas+' <a href="verpermitido.php?id=7">frutas</a></span></li>';
				c[3]+= '<li><span>'+sd.cena.lacteos+' <a href="verpermitido.php?id=6">l\u00e1cteos</a></span></li>';
				c[3]+= '<li><span>'+sd.cena.productosKot+' <a href="productos.php">producto KOT</a></span></li>';
			c[3]+= "</ul>";
			c[3]+= '<div style="clear:both;"></div>';


			


				$(".contenido").each(function(index){
					$(this).html(c[index]);
				});
			
			
	});
	
	
	
	
}






var validate = function(n_get,a_get,nombre,fecha_nacimiento,altura,sexo,email,passw,rep_pass){

	
	
	var fecha = /^(0[1-9]|[12][0-9]|3[01])[ \.-](0[1-9]|1[012])[ \.-](19|20)\d\d$/;
	var msj;
	var register = false;
	var mail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
	if(n_get =='Nombre(s)'){ alert( "Ingresa tu nombre \n"); return false; }
	else if(n_get == ''){ alert( "Ingresa tu nombre \n"); return false; }
	else if(n_get.length < 3){ alert("El nombre debe contar con mínimo 3 caracteres"); return false; }
	
	if(a_get =='Apellidos'){ alert( "Ingresa tus apellidos \n"); return false; }
	else if(a_get ==''){ alert( "Ingresa tus apellidos \n"); return false; }
	else if(a_get < 3 ){ alert("El apellido debe contar con mínimo 3 caracteres"); return false;  }
	
	
	if(fecha_nacimiento==''){  alert( "Ingresa tu fecha de nacimiento \n"); return false; }
	else if(fecha_nacimiento=='Fecha de Nacimiento(dd-mm-aaaa)'){ alert("Ingresa tu fecha de nacimiento \n"); return false; }
	else if(!fecha_nacimiento.match(fecha)){ alert( "Fecha de nacimiento invalida"); return false; }
	
	
	if(altura==''){ alert( "Ingresa tu altura"); return false; }
	else if(altura=='Altura(m)'){ alert( "Ingresa tu altura"); return false; }
	
	
	if(email ==''){ alert("Ingresa tu email"); return false; }
	else if(email=='Email'){ alert("Ingresa tu email"); return false; }
	else if(!email.match(mail)){ alert("Ingresa un email Valido"); return false; }
	
	
	

	if(passw==''){ alert( "Ingresa un password"); return false; }
	else if(passw=='Nuevo Password'){ alert( "Ingresa un password"); return false; }
	if(rep_pass != passw){
		alert("Los passwords no son iguales"); return false;
	}
	if(rep_pass == "Confirma el Password"){
		alert("Confirma el Password");
		return false;
	}

	return true;
}

$(document).ready(function() {

	$("#perfil").live('pagecreate',function(event){
		
		var loged = localStorage.getItem('sesionIniciada');

		if(loged=="true"){
			$("#header-bar-text").text("Perfil Enlazado");
			var user_data = localStorage.getItem("user_data");
			var obj = JSON.parse(user_data);
			$("#numero-kot").text("Numero para tu especialista KOT: " + obj.id);
			$("#info-name").text(obj.nombre),
			$("#info-email").text(obj.correo);
			$("#info-edad").text(obj.edad);
			$("#info-estatura").text(parseFloat(obj.altura).toFixed(2) + "Mts.");
			$("#info-especialista").text("Especialista: "+ obj.nutriologo);
			$("#info-user").show();
			$("#header-bar-text").text("Perfil Enlazado");
			
		}
		else{
			$("#header-bar-text").text("Perfil No Registrado");
			$("#no-ses").show();
		}
		
		$("#desconectar-cuenta").click(function(){
			localStorage.clear(); 
			$("#info-user").hide();
			$("#no-ses").fadeIn();
			$("#header-bar-text").text("Perfil No Registrado");
		});
			var register;
		$("#registrar").click(function(){
			var n_get = $("#nombre").val();
			var a_get = $("#apellidos").val();
			var nombre = $("#nombre").val() + " " + $("#apellidos").val();
			var fecha_nacimiento = $("#fecha_nacimiento").val();
			var altura = $("#altura").val();
			var sexo = $("#sexo").val();
			var email = $("#email").val();
			var passw = $("#pass-reg").val();
			var rep_pass = $("#confirma").val();
								   
			var is_true = validate(n_get,a_get,nombre,fecha_nacimiento,altura,sexo,email,passw,rep_pass);
			
			if(is_true == true){ 
				var parametros = "nombre="+nombre+"&fecha_nacimiento="+fecha_nacimiento+"&altura="+altura;
				parametros += "&mail="+email+"&password="+passw+"&sexo="+sexo+"&code=&token=123456789012345678012345";
				$.get('http://kot.mx/nuevo/WS/kotRegistro.php?'+parametros,function(response){
					var obj = $.parseJSON(response);
					//{"ultima_actualizacion":"2012-03-01 11:26:32","mensaje_error":"","usuario":{"id":252,"nombre":"test test","edad":"04-11-1990","altura":1.5299999713898,"correo":"test123@gmail.com","password":"123123","nutriologo":""}}
					if(obj.mensaje_error == ""){
						//alert("ID : " + obj.usuario.id);
						
						$("#header-bar-text").text("Perfil Enlazado");
					
						localStorage.setItem("user_data",JSON.stringify(obj.usuario));
						localStorage.setItem('sesionIniciada',true);
						$("#no-ses").hide();
						$("#info-user").fadeIn();
						$("#numero-kot").text("Numero para tu especialista KOT: " + obj.usuario.id);
						$("#info-name").text(obj.usuario.nombre),
						$("#info-email").text(obj.usuario.correo);
						$("#info-edad").text(obj.usuario.edad);
						$("#info-estatura").text(parseFloat(obj.usuario.altura).toFixed(2) + "Mts");
						$("#info-especialista").text("Especialista : " + obj.usuario.nutriologo);
					}else{
						alert("Error :: " + obj.mensaje_error);
					}
						
				}); 
			};
			
		});
		
		
		
		$("#checkLogin").click(function(){
			var user = $("#user").val();
			var pass = $("#pass").val();
			var mailPT = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
			var parametros = "";
			if(user=="" && pass ==""){ alert("Campos para enlazar datos vacios"); }
			if(!user.match(mailPT)){
				parametros = "mail=&code="+user+"&password="+pass;
			}else{
				parametros = "mail="+user+"&code=&password="+pass;
			}
			
				$.get('http://kot.mx/movil_prueba/json.php?action=doLogin&'+parametros,function(data){

					var result = $.parseJSON(data);
					var is_true = (result.response==true) ? true : false;
					localStorage.setItem("user_data",JSON.stringify(result.usuario));
					
					if(is_true == true){
						localStorage.setItem('sesionIniciada',true);
						$("#no-ses").hide();
						$("#info-user").fadeIn();
						$("#numero-kot").text("Numero para tu especialista KOT: " + result.usuario.id);
						$("#info-name").text(result.usuario.nombre),
						$("#info-email").text(result.usuario.correo);
						$("#info-edad").text(result.usuario.edad);
						$("#info-estatura").text(parseFloat(result.usuario.altura).toFixed(2) + "Mts");
						$("#info-especialista").text("Especialista : " + result.usuario.nutriologo);
					}
					else{
						alert("Datos de acceso incorrectos !");
					}
					
				});
		});
		
		
	});


	/****************************
	 * Mi Progreso
	 ****************************/
	$("#miprogreso").live('pagecreate', function(event) {
		
		var local = localStorage.getItem("user_data");
		var user = $.parseJSON(local);
		var progreso_type = "Peso";
		var user_id;
		var obj;
		if (user != null) {

		 	user_id = user.id;
		 	var ctx = $("#imagen-grafica").get(0).getContext("2d");
			$.get('http://kot.mx/movil_prueba/json.php?action=getGoals&idKOT='+user_id,function(data) {
					
					obj = $.parseJSON(data);
					$("#span-strt").text(obj.kilos.actual + " Kg");
					$("#span-end").text(obj.kilos.progreso + " Kg");
					$("#cinta_azul").text("¡Te Faltan " + obj.kilos.print + " kilos para tu meta!");

					drawChart(ctx, obj.kilos.datos, "#0000FF");
			});
		}
		else {
			user_id = null;
			alert("Por favor registrate");
		}

		
		$("#btn-kilos").click(function() {
			$("span-strt").text();
			$("span-end").text();
			progreso_type = "Peso";
			drawChart(ctx, obj.kilos.datos, "#0000FF");
			$("#cinta_azul").show();
			$("#span-strt").text(obj.kilos.actual + " Kg");
			$("#span-end").text(obj.kilos.progreso + " Kg");
			$("#cinta_azul").text("¡Te Faltan " + obj.kilos.print + " kilos para tu meta!");
		});
		
		
		$("#btn-medidas").click(function() {
			progreso_type = "Medidas";
			drawChart(ctx, obj.medidas.datos, "#FF0000");
			$("#span-strt").text(+ obj.medidas.actual + " cm");
			$("#span-end").text(obj.medidas.progreso + " cm");
			$("#cinta_azul").hide();
		});

		$("#btn-grasa").click(function() {
			progreso_type = "Grasa";
			drawChart(ctx, obj.kilos.datos, "#00FF00");
			$("#span-strt").text(+ obj.kilos.actual + " %");
			$("#span-end").text(obj.kilos.progreso + " %");
			$("#cinta_azul").hide();
		});
		
		if(user_id == null) {
			$("#con-meta").hide();
		}
		else{
			$("#sin-peso-meta").hide();
		}
	});

	function drawChart(ctx, jsonValues, color) {
		
		var labels = [];
		var values = [];
		var sorted = [];
		var max, min;

		$.each(jsonValues, function(index, value) {
			labels.push("Semana " + value.semana);
			values.push(value.valor);
			sorted.push(value.valor);
		});
		
		sorted.sort();
		max = parseInt(sorted.pop()) + 2;
		min = sorted.shift() - 2;
		var diff = getMCD(max, min);
		if (diff > 12 || diff < 3) {  
			max -= 1;  
			diff = getMCD(max, min);
		}

		var chartData = {
      labels : labels,
      datasets : [
	      {
          fillColor : "#fff",
          strokeColor : color,
          pointColor : color,
          pointStrokeColor : color,
          data : values
	      }
      ]
    }

		var options = {
			scaleOverride: true,
			scaleSteps: diff,
			scaleStepWidth: (max-min)/diff,
			scaleStartValue: min,
			bezierCurve: false
		};

		var myLine = new Chart(ctx).Line(chartData, options);
	}

	function getMCD(num1, num2) {
		var res = num1 % num2;
		if (res == 0) {
			return num2;
		}
		else {
			return getMCD(num2, res);
		}
	}


	/***********************
	 * Mi Método
	 **********************/	
	$("#mimetodo").live('pagecreate', function(event) {
		
		var local = localStorage.getItem("user_data");
		var user = $.parseJSON(local);
		var user_id;
		try {
			user_id = user.id;
			$.get('http://kot.mx/movil_prueba/json.php?action=getMetodo&idUser='+user_id,function(data_p){
				var objtc = $.parseJSON(data_p);
				
				var spanTxt = objtc.semana;
				$("#semanas-int").text(spanTxt);
			});
		}
		catch(err){
			user_id = null;
		}

		
		if(user_id==null) {
			$("#metodo-demo").show();
		}	
		else {
			$("#metodo").show();
		}

		var url = 'http://kot.mx/movil_prueba/json.php?action=getMetodo&idUser='+user_id;
		var dataFetched;
		var serviceData;
		var data;
		
		
		$.get(url,function(response){	
		 var dataGET = $.parseJSON(response);
		 var sd = dataGET.intensivo;
	
		if(sd.desayuno.cereal == null && sd.desayuno.proteinas==null && sd.desayuno.vegetales==null && sd.desayuno.frutas==null){
			//alert("El usuario no tiene datos !");
			//location.href="index.php";
			$("#metodo").hide();
			$("#metodo-demo").fadeIn();
		}
			ShowMetodo(user_id,"intensivo");
		});
		
		$("#btn-intensivo").click(function(){
			ShowMetodo(user_id,"intensivo");	
		});
		$("#btn-progresivo").click(function(){
			ShowMetodo(user_id,"progresivo");
		});
		

	});
	
	$("#vermapa").live('pagecreate',function(event){
		  var map;
		  var latitude = $("#latitude").val();
		  var longitude = $("#longitude").val();
		  var direccion = $("#direccion").val();
		  var telefono = $("#telefono").val();
		  var nombre = $("#nombre").val();
		  var dataIN = new Array();
		  dataIN["nombre"] = nombre,
		  dataIN["direccion"] = direccion,
		  dataIN["telefono"] = telefono;
	      function initialize(lat,lon,dataIN) {
	        var myOptions = {
	          		zoom: 15,
	          		mapTypeId: google.maps.MapTypeId.ROADMAP
	        	};

			map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
			var pos = new google.maps.LatLng(lat,lon);
			var contenidoHTML =  "<b>" + dataIN["nombre"] + "</b> <br />";
				contenidoHTML += dataIN["direccion"] + "<br />";
				contenidoHTML += dataIN["telefono"]; 
			var infowindow = new google.maps.InfoWindow({
			              map: map,
			              position: pos,
			              content: contenidoHTML
			            });

			map.setCenter(pos);
		
			
			}
			initialize(latitude,longitude,dataIN);
		
	});
	
	$("#metodoDemo").live('pagecreate',function(){
		var id_demo = $("#idMetodo").val();
		
		$.get('http://kot.mx/movil_prueba/json.php?action=getMetodoDemo&id_demo='+id_demo,function(data){
			var obj = $.parseJSON(data);
			$(".contenido1").html(obj.info); $(".contenido2").html(obj.desayuno); $(".contenido3").html(obj.comida); 
			$(".contenido4").html(obj.colacion); $(".contenido5").html(obj.cena);	
		});
				
	});

	
	/***********************
	 * Nutriólogos
	 **********************/	
	$("#nutriologos").live('pagecreate', function(event) {
		var obj;

		$.get('http://kot.mx/movil_prueba/json.php?action=getNutriologos', function(data) {
			obj = $.parseJSON(data);
			var municipios = obj.municipios.sort(comparaCiudades);
			for (var i = 0; i < municipios.length; i++) {
				$("#ciudad").append("<option value='"+ municipios[i].id + "'>" + municipios[i].nombre + "</option>");
			}
		});

		$("#ciudad").change(function(event) {
			var selected = event.currentTarget.value;
			var resultados = filtraPorCiudad(obj.nutriologos, selected);
			$("#listado").empty();
			for (var i = 0; i < resultados.length; i++) {
				$("#listado").append('<li data-role="list-divider" class="letra ui-li ui-li-divider ui-btn ui-bar-b ui-btn-up-undefined" role="heading">' + resultados[i].letra + '</li>');
				for (var j = 0; j < resultados[i].items.length; j++) {
					var item = resultados[i].items[j];
					$("#listado").append('<li class="' + item.id_municipio +' 10 ui-li ui-li-static ui-body-c">' + item.nombre + '</li>');
					$("#listado").append('<li class="' + item.id_municipio +' 10 ui-li ui-li-static ui-body-c" style="background:#fff;"><div style="float:left;width:70%;">&nbsp;<span style="font-size:10px; font-weight:normal;">' + item.direccion + '</span></div><div style="float:left; width:30%;"><a href="tel:' + item.telefono + '"><img src="img/tel.png" width="28" height="28" /></a> <a href="vermapa.php?latitud=' + item.latitud + '&longitud=' + item.longitud+ '&nombre=' + item.nombre + '&telefono=' + item.telefono + '&direccion=' + item.direccion +'"><img src="img/map.png" width="28" height="28" /></a></div><div style="clear:both;"></div></li>');
				}
			}

			diego = resultados;
		});

		/*$("#mty").click(function(){
			$(".1").hide();
			if($("#letra").next().text()== ''){
				$("#letra").show();
			}
			
			
			
			$(".2").show();

		});
		$("#df").click(function(){
			$(".2").hide();
			
			
			
			$(".1").show();

		});*/
		
	});

	$("#filtroalimentos").live('pageinit', function(event){
		var val = localStorage.getItem("vegetariano");
		if (val == "true") {
			$("#vegetariano").attr('checked', '');
		}
		
		$.each($("a[data-role='button']"), function(index, value){
			$(value).attr("href", "alimentos.php?tipo=" + $(value).data("tipo") + "&veg=" + $("#vegetariano").is(':checked'));
		});

		var elem = document.querySelector('.js-switch');
		var init = new Switchery(elem);

		$(".switchery").after("&nbsp;&nbsp;Vegetariano");

		$(elem).change(function(){
			localStorage.setItem("vegetariano", $(elem).is(':checked'));
			$.each($("a[data-role='button']"), function(index, value){
				$(value).attr("href", "alimentos.php?tipo=" + $(value).data("tipo") + "&veg=" + $("#vegetariano").is(':checked'));
			});
		});
	});
	
});


function showIMC() {
	$("#imc-modal").modal();
}

function calculaIMC() {
	var imc, mensaje, semanas;
	var sexo = $("#sexo").val();
	var peso = parseInt($("#peso").val());
	var estatura = parseFloat($("#estatura").val());
	if (peso > 0 && estatura > 0) {
		imc = peso / (estatura * estatura);
		if (imc < 18.5) {
			mensaje = "No necesitas bajar de peso";
		}
		else if (imc > 18.5 && imc < 24.9) {
			mensaje = "Estás en peso normal";
		}
		else if (imc > 24.9 && imc < 29.9) {
			mensaje = "Tienes sobrepeso, te recomendamos ir con un Especialista KOT para ayudarte a llegar a tu peso ideal";
		}
		else if (imc > 29.9) {
			mensaje = "Tienes obesidad, te recomendamos ir con un Especialista KOT para ayudarte a llegar a tu peso ideal";	
		}
		if (sexo == "H") {
			semanas = Math.round(((peso) - ((22.5)*(estatura * estatura)))/1.5);
		}
		else if (sexo == "M") {
			semanas = Math.round(((peso) - ((21)*(estatura * estatura)))/1.3);
		}
		
		if (imc > 24.9)
			$("#resultado #mensaje-txt").css("color", "red");
		else 
			$("#resultado #mensaje-txt").css("color", "black");
		$("#resultado #imc-txt").text(imc.toFixed(2));
		$("#resultado #mensaje-txt").text(mensaje);
		$("#resultado #semanas-txt").text(semanas);
		$("#resultado").modal();
	}
	else {

	}
	
}

function comparaCiudades(a,b) {
  if (a.nombre < b.nombre)
     return -1;
  if (a.nombre > b.nombre)
    return 1;
  return 0;
}

function filtraPorCiudad(values, selected) {
	var resultados = [];
	for (var i = 0; i < values.length; i++) {
		var letra = values[i];
		if (letra.items.length > 0) {
			var temp = [];
			for (var j = 0; j < letra.items.length; j ++) {
				var item = letra.items[j];
				if (item.id_municipio == selected) {
					temp.push(item);
				}
			}
			if (temp.length > 0) {
				letra.items = temp;
				resultados.push(letra);
			}
		}
	}
	return resultados;
}