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


var ShowMetodo = function(id_user, tipo, datos) {

	var c = new Array();
	var sd;
	var colacionVar;

	if (tipo=="intensivo") {
		sd = datos.intensivo;
		colacionVar = sd.colacion.fruta;
	}
	else {
		sd = datos.progresivo;
		colacionVar = sd.colacion.frutas;
	}
	
	var index = 0;

		c[0] = '<ul class="tablas-metodo" style="width:100%;">';
			for (index = 0; index < sd.desayuno.cereal; index++)
				c[0]+= '<li><span><input type="checkbox" id="des-cer'+index+'" class="checktop"/><label for="des-cer'+index+'" class="checktop"><a href="verpermitido.php?id=2">cereal</a></label></span></li>';
			for (index = 0; index < sd.desayuno.proteinas_vegetales; index++)
				c[0]+= '<li><span><input type="checkbox" id="des-prot'+index+'" class="checktop"/><label for="des-prot'+index+'" class="checktop"><a href="verpermitido.php?id=10">prote\u00edna vegetal</a></span></li>';
			for (index = 0; index < sd.desayuno.frutas; index++)
				c[0]+= '<li><span><input type="checkbox" id="des-frut'+index+'" class="checktop"/><label for="des-frut'+index+'" class="checktop"><a href="verpermitido.php?id=7">frutas</a></span></li>';
			for (index = 0; index < sd.desayuno.lacteos; index++)
				c[0]+= '<li><span><input type="checkbox" id="des-lact'+index+'" class="checktop"/><label for="des-lact'+index+'" class="checktop"><a href="verpermitido.php?id=6">l\u00e1cteos</a></span></li>';
			for (index = 0; index < sd.desayuno.productosKot; index++)
				c[0]+= '<li><span><input type="checkbox" id="des-kot'+index+'" class="checktop"/><label for="des-kot'+index+'" class="checktop"><a href="productos.php">productos KOT</a></span></li>';
		c[0]+= "</ul>";
		c[0]+= '<div style="clear:both;"></div>';

		c[1] = '<ul class="tablas-metodo">';
			for (index = 0; index < sd.comida.cereal; index++)
				c[1]+= '<li><span><input type="checkbox" id="com-cer'+index+'" class="checktop"/><label for="com-cer'+index+'" class="checktop"><a href="verpermitido.php?id=2">cereal</a></span></li>';
			for (index = 0; index < sd.comida.proteinas; index++)
				c[1]+= '<li><span><input type="checkbox" id="com-prot'+index+'" class="checktop"/><label for="com-prot'+index+'" class="checktop"><a href="verpermitido.php?id=5">prote\u00edna animal</a></span></li>';
			for (index = 0; index < sd.comida.vegetales_crudo; index++)
				c[1]+= '<li><span><input type="checkbox" id="com-vegc'+index+'" class="checktop"/><label for="com-vegc'+index+'" class="checktop"><a href="verpermitido.php?id=3">vegetales crudos</a></span></li>';
			for (index = 0; index < sd.comida.vegetales_cocidas; index++)
				c[1]+= '<li><span><input type="checkbox" id="com-vegi'+index+'" class="checktop"/><label for="com-vegi'+index+'" class="checktop"><a href="verpermitido.php?id=4">vegetales cocidos</a></span></li>';
			for (index = 0; index < sd.comida.cucharadas_aceite; index++)
				c[1]+= '<li><span><input type="checkbox" id="com-ace'+index+'" class="checktop"/><label for="com-ace'+index+'" class="checktop"><a href="verpermitido.php?id=8">cucharadas de aceite</a></span></li>';
		c[1]+= "</ul>";
		c[1]+= '<div style="clear:both;"></div>';

		c[2] = '<ul class="tablas-metodo">';
			for (index = 0; index < colacionVar; index++)
				c[2]+= '<li><span><input type="checkbox" id="col1-frut'+index+'" class="checktop"/><label for="col1-frut'+index+'" class="checktop"><a href="verpermitido.php?id=7">frutas</a></span></li>';
			for (index = 0; index < sd.colacion.productosKot; index++)
				c[2]+= '<li><span><input type="checkbox" id="col1-kot'+index+'" class="checktop"/><label for="col1-kot'+index+'" class="checktop"><a href="productos.php">productos KOT</a></span></li>';
		c[2]+= "</ul>";
		c[2]+= '<div style="clear:both;"></div>';

		c[3] = '<ul class="tablas-metodo">';
			for (index = 0; index < sd.cena.cereal; index++)
				c[3]+= '<li><span><input type="checkbox" id="cena-cer'+index+'" class="checktop"/><label for="cena-cer'+index+'" class="checktop"><a href="verpermitido.php?id=2">cereal</a></span></li>';
			for (index = 0; index < sd.cena.proteinas; index++)
				c[3]+= '<li><span><input type="checkbox" id="cena-prot'+index+'" class="checktop"/><label for="cena-prot'+index+'" class="checktop"><a href="verpermitido.php?id=5">prote\u00edna animal</a></span></li>';
			for (index = 0; index < sd.cena.vegetales_crudo; index++)
				c[3]+= '<li><span><input type="checkbox" id="cena-vegcr'+index+'" class="checktop"/><label for="cena-vegcr'+index+'" class="checktop"><a href="verpermitido.php?id=3">vegetales crudos</a></span></li>';
			for (index = 0; index < sd.cena.cucharadas_aceite; index++)
				c[3]+= '<li><span><input type="checkbox" id="cena-ace'+index+'" class="checktop"/><label for="cena-ace'+index+'" class="checktop"><a href="verpermitido.php?id=8">cucharadas de aceite</a></span></li>';
			for (index = 0; index < sd.cena.vegetales_cocidas; index++)
				c[3]+= '<li><span><input type="checkbox" id="cena-vegco'+index+'" class="checktop"/><label for="cena-vegco'+index+'" class="checktop"><a href="verpermitido.php?id=4">vegetales cocidos</a></span></li>';
			for (index = 0; index < sd.cena.frutas; index++)
				c[3]+= '<li><span><input type="checkbox" id="cena-frut'+index+'" class="checktop"/><label for="cena-frut'+index+'" class="checktop"><a href="verpermitido.php?id=7">frutas</a></span></li>';
			for (index = 0; index < sd.cena.lacteos; index++)
				c[3]+= '<li><span><input type="checkbox" id="cena-lac'+index+'" class="checktop"/><label for="cena-lac'+index+'" class="checktop"><a href="verpermitido.php?id=6">l\u00e1cteos</a></span></li>';
			for (index = 0; index < sd.cena.productosKot; index++)
				c[3]+= '<li><span><input type="checkbox" id="cena-kot'+index+'" class="checktop"/><label for="cena-kot'+index+'" class="checktop"><a href="productos.php">producto KOT</a></span></li>';
		c[3]+= "</ul>";
		c[3]+= '<div style="clear:both;"></div>';

	$(".contenido").each(function(i){
		$(this).html(c[i]);
	});

	var storeMetodo = JSON.parse(localStorage.getItem("metodo"));
	$("[type=checkbox]").each(function(i, value) {
		if (storeMetodo[tipo][value.id]) {
			$(value).prop("checked", true);
		}
	});

	$("[type=checkbox]").change(function(event) { 
		var target = event.target;
		var storeMetodo = JSON.parse(localStorage.getItem("metodo"));
		storeMetodo[tipo][target.id] = $(target).is(':checked');
		localStorage.setItem("metodo", JSON.stringify(storeMetodo));
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
					if (obj.kilos.print > 0)
						$("#cinta_azul").text("¡Te Faltan " + obj.kilos.print + " kilos para tu meta!");
					else
						$("#cinta_azul").text("¡Felicidades, llegaste a tu meta!");

					drawChart(ctx, obj.kilos.datos, "#0000FF");
					shouldPostFB(obj.kilos);
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
			if (obj.kilos.print > 0)
				$("#cinta_azul").text("¡Te Faltan " + obj.kilos.print + " kilos para tu meta!");
			else
				$("#cinta_azul").text("¡Felicidades, llegaste a tu meta!");
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
			drawChart(ctx, obj.grasa.datos, "#00FF00");
			$("#span-strt").text(+ obj.grasa.actual + " %");
			$("#span-end").text(obj.grasa.progreso + " %");
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
			var sem = (parseInt(value.semana) - 1);
			labels.push("Semana " + sem);
			values.push(value.valor);
			sorted.push(value.valor);
		});
		
		sorted.sort();
		max = parseInt(sorted[sorted.length - 1]);
		min = parseInt(sorted[0]);
		var diff;

		/*if (min <= 0) {
			max += 2;
			diff = getMCD(max, 1);
			if (diff > 12) {  
				max -= 1;  
				diff = getMCD(max, 1);
			}
		}
		else */if (min == max) {
			max += 2;
			min -= 2;
			diff = 4;
		}

		else {
			max += 2;
			min -= 2;
			diff = getMCD(max, min);
			if (diff > 12 || diff < 3) {  
				max -= 1;  
				diff = getMCD(max, min);
			}
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

	function shouldPostFB(kilos) {
		if (kilos.print <= 0) {

		}
		else if (kilos.progreso >= 10) {
			
		}

	}

	/***********************
	 * Mi Método
	 **********************/	
	$("#mimetodo").live('pagecreate', function(event) {
		
		var local = localStorage.getItem("user_data");
		var user = $.parseJSON(local);
		var user_id;
		var dataMetodo;
		if (user && user.id) {
			user_id = user.id;

			var now = new Date();
			var storeMetodo = localStorage.getItem("metodo");
			if (!storeMetodo) {
				var today3am = now.getTime() - ((((now.getHours() - 3) * 3600) + (now.getMinutes() * 60) + now.getSeconds()) * 1000 + now.getMilliseconds());
				storeMetodo = {"user": user_id, "last": today3am, "progresivo": {}, "intensivo":{}};
				localStorage.setItem("metodo", JSON.stringify(storeMetodo));
			}
			else {
				var last = JSON.parse(storeMetodo).last;
				var diff = now - last;
				if (diff >= 86400000) {
					var next3am = last + 86400000;
					storeMetodo = {"user": user_id, "last": next3am, "progresivo": {}, "intensivo":{}};
					localStorage.setItem("metodo", JSON.stringify(storeMetodo));
				}
			}

			$.get('http://kot.mx/movil_prueba/json.php?action=getMetodo&idUser='+user_id, function(response) {
				
				dataMetodo = $.parseJSON(response);
				var semana = dataMetodo.semana;
				if (semana != 1)
					$("#semanas-h").text("Llevas " + semana + " semanas en el método KOT");
				else
					$("#semanas-h").text("Llevas " + semana + " semana en el método KOT");

				$("#metodo").show();

				var sd = dataMetodo.intensivo;
	
				if (sd.desayuno.cereal == null && sd.desayuno.proteinas==null && sd.desayuno.vegetales==null && sd.desayuno.frutas==null) {
					//alert("El usuario no tiene datos !");
					//location.href="index.php";
					$("#metodo").hide();
					$("#metodo-demo").fadeIn();
				}

				ShowMetodo(user_id,"intensivo", dataMetodo);
			});
		}
		else {
			$("#metodo-demo").show();
		}
		
		$("#btn-intensivo").click(function(){
			ShowMetodo(user_id, "intensivo", dataMetodo);	
		});
		$("#btn-progresivo").click(function(){
			ShowMetodo(user_id, "progresivo", dataMetodo);
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
			$("#sort-btns").css("display", "block");
			var selected = event.currentTarget.value;
			var resultados = filtraPorCiudad(obj.nutriologos, selected);
			$("#listado").empty();
			for (var i = 0; i < resultados.length; i++) {
				$("#listado").append('<li data-role="list-divider" class="letra ui-li ui-li-divider ui-btn ui-bar-b ui-btn-up-undefined" role="heading">' + resultados[i].letra + '</li>');
				for (var j = 0; j < resultados[i].items.length; j++) {
					var item = resultados[i].items[j];
					$("#listado").append('<li class="' + item.id_municipio +' 10 ui-li ui-li-static ui-body-c">' + item.nombre + '</li>');
					$("#listado").append('<li class="' + item.id_municipio +' 10 ui-li ui-li-static ui-body-c" style="background:#fff;"><div style="float:left;width:70%;"><span style="font-size:10px; font-weight:normal;">' + item.direccion + '<br/>Tel: ' + item.telefono + '</span></div><div style="float:left; width:30%;"><a href="tel:' + item.telefono + '"><img src="img/tel.png" width="28" height="28" /></a> <a href="vermapa.php?latitud=' + item.latitud + '&longitud=' + item.longitud+ '&nombre=' + item.nombre + '&telefono=' + item.telefono + '&direccion=' + item.direccion +'"><img src="img/map.png" width="28" height="28" /></a></div><div style="clear:both;"></div></li>');
				}
			}
		});

		$("#btn-az").click(function() {
			var resultados = filtraPorCiudad(obj.nutriologos, $('#ciudad').val());
			$("#listado").empty();
			for (var i = 0; i < resultados.length; i++) {
				$("#listado").append('<li data-role="list-divider" class="letra ui-li ui-li-divider ui-btn ui-bar-b ui-btn-up-undefined" role="heading">' + resultados[i].letra + '</li>');
				for (var j = 0; j < resultados[i].items.length; j++) {
					var item = resultados[i].items[j];
					$("#listado").append('<li class="' + item.id_municipio +' 10 ui-li ui-li-static ui-body-c">' + item.nombre + '</li>');
					$("#listado").append('<li class="' + item.id_municipio +' 10 ui-li ui-li-static ui-body-c" style="background:#fff;"><div style="float:left;width:70%;"><span style="font-size:10px; font-weight:normal;">' + item.direccion + '<br/>Tel: ' + item.telefono + '</span></div><div style="float:left; width:30%;"><a href="tel:' + item.telefono + '"><img src="img/tel.png" width="28" height="28" /></a> <a href="vermapa.php?latitud=' + item.latitud + '&longitud=' + item.longitud+ '&nombre=' + item.nombre + '&telefono=' + item.telefono + '&direccion=' + item.direccion +'"><img src="img/map.png" width="28" height="28" /></a></div><div style="clear:both;"></div></li>');
				}
			}
		});

		$("#btn-distancia").click(function() {
			if (navigator.geolocation) {
    		navigator.geolocation.getCurrentPosition(function(position) {
    			var resultados = ordenaPorDistancia(obj.nutriologos, $('#ciudad').val(), position);
    			$("#listado").empty();
					for (var i = 0; i < resultados.length; i++) {
						var item = resultados[i];
						$("#listado").append('<li class="' + item.id_municipio +' 10 ui-li ui-li-static ui-body-c">' + item.nombre + '</li>');
						$("#listado").append('<li class="' + item.id_municipio +' 10 ui-li ui-li-static ui-body-c" style="background:#fff;"><div style="float:left;width:70%;"><span style="font-size:10px; font-weight:normal;">' + item.direccion + '<br/>Tel: ' + item.telefono + '</span></div><div style="float:left; width:30%;"><a href="tel:' + item.telefono + '"><img src="img/tel.png" width="28" height="28" /></a> <a href="vermapa.php?latitud=' + item.latitud + '&longitud=' + item.longitud+ '&nombre=' + item.nombre + '&telefono=' + item.telefono + '&direccion=' + item.direccion +'"><img src="img/map.png" width="28" height="28" /></a></div><div style="clear:both;"></div></li>');
					}
    		}, onPositionError);
  		} else {
    		onPositionError('not supported');
  		}
		});

	});

	/***********************
	 * Restaurantes
	 **********************/	
	$("#restaurantes").live('pagecreate', function(event) {
		var obj;

		$.get('http://kot.mx/movil_prueba/json.php?action=getRestaurantes', function(data) {
			obj = $.parseJSON(data);
			var municipios = obj.areas_metropolitanas.sort(comparaCiudadesRest);
			for (var i = 0; i < municipios.length; i++) {
				$("#ciudad").append("<option value='"+ municipios[i].id_area + "'>" + municipios[i].area + "</option>");
			}
		});

		$("#ciudad").change(function(event) {
			$("#sort-btns").css("display", "block");
			var selected = event.currentTarget.value;
			var resultados = filtraPorCiudadRest(obj.restaurante, selected);
			$("#listado").empty();
			for (var i = 0; i < resultados.length; i++) {
				$("#listado").append('<li data-role="list-divider" class="ui-li ui-li-divider ui-btn ui-bar-b ui-btn-up-undefined" role="heading">' + resultados[i].letra + '</li>');
				for (var j = 0; j < resultados[i].items.length; j++) {
					var item = resultados[i].items[j];
					$("#listado").append('<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-c"><div class="ui-btn-inner ui-li" aria-hidden="true"><div class="ui-btn-text"><a href="verRestaurant.php?nombre='+item.nombre+'&idRestaurante='+item.id+'&direccion='+item.direccion+'&tel='+item.telefono+'&latitud='+item.latitud+'&longitud='+item.longitud+'" class="ui-link-inherit">' + item.nombre + '</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>');
					//nombre='.$items["nombre"].'&idRestaurante='.$items["id"].'&direccion='.urlencode($items["direccion"]).'&tel='.$items["telefono"].'&latitud='.$items["latitud"].'&longitud='.$items["longitud"].'">'.$items["nombre"].'</a></li>
				}
			}
		});
		
		$("#btn-az").click(function() {
			var resultados = filtraPorCiudadRest(obj.restaurante, $('#ciudad').val());
			$("#listado").empty();
			for (var i = 0; i < resultados.length; i++) {
				$("#listado").append('<li data-role="list-divider" class="ui-li ui-li-divider ui-btn ui-bar-b ui-btn-up-undefined" role="heading">' + resultados[i].letra + '</li>');
				for (var j = 0; j < resultados[i].items.length; j++) {
					var item = resultados[i].items[j];
					$("#listado").append('<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-c"><div class="ui-btn-inner ui-li" aria-hidden="true"><div class="ui-btn-text"><a href="verRestaurant.php?nombre='+item.nombre+'&idRestaurante='+item.id+'&direccion='+item.direccion+'&tel='+item.telefono+'&latitud='+item.latitud+'&longitud='+item.longitud+'" class="ui-link-inherit">' + item.nombre + '</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>');
				}
			}
		});

		$("#btn-distancia").click(function() {
			if (navigator.geolocation) {
    		navigator.geolocation.getCurrentPosition(function(position) {
    			var resultados = ordenaPorDistanciaRest(obj.restaurante, $('#ciudad').val(), position);
    			$("#listado").empty();
					for (var i = 0; i < resultados.length; i++) {
						var item = resultados[i];
						$("#listado").append('<li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-btn-up-c"><div class="ui-btn-inner ui-li" aria-hidden="true"><div class="ui-btn-text"><a href="verRestaurant.php?nombre='+item.nombre+'&idRestaurante='+item.id+'&direccion='+item.direccion+'&tel='+item.telefono+'&latitud='+item.latitud+'&longitud='+item.longitud+'" class="ui-link-inherit">' + item.nombre + '</a></div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li>');
					}
    		}, onPositionError);
  		} else {
    		onPositionError('not supported');
  		}
		});

	});

	/***********************
	 * Alimentos Permitidos
	 **********************/	
	$("#filtroalimentos").live('pageinit', function(event){
		
		$.each($("a[data-role='button']"), function(index, value){
			$(value).attr("href", "alimentos.php?tipo=" + $(value).data("tipo"));
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

		if (semanas < 0)
			semanas = 0;
		
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

function comparaCiudadesRest(a,b) {
  if (a.area < b.area)
     return -1;
  if (a.area > b.area)
    return 1;
  return 0;
}

function filtraPorCiudad(original, selected) {
	var values = deepCopy(original);
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

function filtraPorCiudadRest(original, selected) {
	var values = deepCopy(original);
	var resultados = [];
	for (var i = 0; i < values.length; i++) {
		var letra = values[i];
		if (letra.items.length > 0) {
			var temp = [];
			for (var j = 0; j < letra.items.length; j ++) {
				var item = letra.items[j];
				if (item.id_area == selected) {
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

function ordenaPorDistancia(values, filtro, position) {
	var nutriologos = filtraPorCiudad(values, filtro);
	var resultados = [];
	for (var i = 0; i < nutriologos.length; i++) {
		for (var j = 0; j < nutriologos[i].items.length; j ++) {
			var item = nutriologos[i].items[j];
			item.distancia = calculaDistancia(position.coords.latitude, position.coords.longitude, item.latitud, item.longitud);
			resultados.push(item);
		}
	}
	resultados.sort(comparaDistancias);
	return resultados;
}

function ordenaPorDistanciaRest(values, filtro, position) {
	var rests = filtraPorCiudadRest(values, filtro);
	var resultados = [];
	for (var i = 0; i < rests.length; i++) {
		for (var j = 0; j < rests[i].items.length; j ++) {
			var item = rests[i].items[j];
			item.distancia = calculaDistancia(position.coords.latitude, position.coords.longitude, item.latitud, item.longitud);
			resultados.push(item);
		}
	}
	resultados.sort(comparaDistancias);
	return resultados;
}

function calculaDistancia(lat1, lon1, lat2, lon2) {
	var R = 6371; // km
	var dLat = toRad((lat2-lat1));
	var dLon = toRad((lon2-lon1));
	var lat1 = toRad(lat1);
	var lat2 = toRad(lat2);
	var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
	        Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
	var d = R * c;
	return d;
}

function toRad(Value) {
  /** Converts numeric degrees to radians */
  return Value * Math.PI / 180;
}

function onPositionError(msg) {
 	alert("Tu navegador no es compatible o necesitas habilitar la opción de localización en tu teléfono");
}

function comparaDistancias(a,b) {
  if (a.distancia < b.distancia)
     return -1;
  if (a.distancia > b.distancia)
    return 1;
  return 0;
}

function deepCopy(obj) {
    if (Object.prototype.toString.call(obj) === '[object Array]') {
        var out = [], i = 0, len = obj.length;
        for ( ; i < len; i++ ) {
            out[i] = arguments.callee(obj[i]);
        }
        return out;
    }
    if (typeof obj === 'object') {
        var out = {}, i;
        for ( i in obj ) {
            out[i] = arguments.callee(obj[i]);
        }
        return out;
    }
    return obj;
}