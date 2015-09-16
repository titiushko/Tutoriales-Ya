addEvent(window,'load',inicializarEventos,false);
function inicializarEventos()
{

  actualizar();
  document.getElementById('paginahtml').focus();

}


var anterior = '';
function actualizar()
{

  var textarea = document.getElementById("paginahtml");
  var d = parent.documentodinamico.document; 

  if (anterior != textarea.value)
  {
    anterior = textarea.value;
    d.open();
    d.write(anterior);
    d.close();
  }

  window.setTimeout(actualizar, 200);
}

function addEvent(elemento,nomevento,funcion,captura)
{
  if (elemento.attachEvent)
  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else  
    if (elemento.addEventListener)
    {
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
    else
      return false;
}