$(document).ready(function() {
  loadFB();
});

function loadFB() {
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '228738270668251', // App ID from the App Dashboard
      status     : true, // check the login status upon init?
      cookie     : true, // set sessions cookies to allow your server to access the session?
      xfbml      : true  // parse XFBML tags on this page?
    });
  };

  // Load the SDK's source Asynchronously
  // Note that the debug version is being actively developed and might 
  // contain some type checks that are overly strict. 
  // Please report such bugs using the bugs tool.
  (function(d, debug){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/es_LA/all" + (debug ? "/debug" : "") + ".js";
     ref.parentNode.insertBefore(js, ref);
   }(document, /*debug*/ false));
}


function publishVideo(name, description, link) {
  FB.ui({
    method: 'feed',
    name: (name != null ? name : null),
    description: (description != null ? description : null),
    caption: 'KOT México',
    link: link,
    actions: [{ name: 'KOT México', link: 'http://kot.mx' }]
  });
}

function publishLogro(tipo, kilos) {
  var caption, description;
  if (tipo == "meta") {
    caption = '¡Has llegado a tu meta!';
    description = '¡Muchas felicidades, con la ayuda del Método KOT has llegado a tu meta!';
  }
  else if (tipo == "kilos") {
    caption = 'Estatus del progreso del Método KOT';
    description = '¡Estoy en camino de cumplir mi meta y ya bajé ' + kilos + ' kilos!';
  }

  FB.ui({
    method: 'feed',
    name: 'KOT México',
    description: description,
    caption: caption,
    link: 'http://kot.mx'
  });
}