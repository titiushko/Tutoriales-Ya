$(document).ready(function(){
  var opciones = {
                   select:tabSeleccionado
                 };                 
  $("#pesta").tabs(opciones);
});

function tabSeleccionado(event,tab) {
  var d = parent.documentodinamico.document; 
  d.open();
  d.write($('#editor').val());
  d.close();
  
}

