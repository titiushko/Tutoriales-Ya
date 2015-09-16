<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd"> 
<html>


<!-- Mirrored from www.javascriptya.com.ar/jquery/temarios/descripcion.php?cod=59&punto=3&inicio=0 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
<title>Conceptos de JQuery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="jQuery, programación, webmaster, tutorial, JavaScript">
<meta name="description" content="El objetivo de este tutorial es presentar los conceptos de la libreria JavaScript JQUERY.">
<meta name="author" content="Diego Moisset">

<link href="../css/estilos.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">

</script>
<style>
html,body {
	background-color: #D3E9D0;
	font-family: Trebuchet MS, Verdana, Arial, sans-serif;
	font-size: 10pt;
	text-align:center;
}

h1 {
	font-size: 14pt;
	margin: 0%;
}

.recuadro {
  background-color:#ffffcc;
  text-align:left;
  font-family:courier;

  border-width:0;
  padding:5px;

  border: 1px dotted #ffaa00;
}

</style>
</head>

<body>

<div class="upperleft">
  <div class="upperright">
    <div class="lowerleft">
      <div class="lowerright">
<table width="98%">
<tr>
<td> 
<h1>3 - Selección de un elemento del documento mediante el id.</h1></td>
<td align="right">
<a href="../../publicidad/index.html"><img border="0" style="margin:5px;padding-left:2px" src="../imagenes/publicidad.html"></a>	
</td>
</tr>
</table>

      </div>
    </div>
  </div>
</div>
<br>


<div class="upperleft">
  <div class="upperright">
    <div class="lowerleft">
      <div class="lowerright">

<p>
<div style="font-size:1.3em;font-family:arial;">
<p>La sintaxis para seleccionar un elemento particular de la página mediante la propiedad id es:</p>
<pre>
$("#nombre del id")
</pre>
<p>Confeccionaremos un problema para ver como obtenemos la referencia a elementos HTML particulares mediante el id.<br>
<strong>Problema:</strong>Confeccionar una página que muestre dos títulos de primer nivel, al ser presionados cambiar el color de la fuente, fondo y la fuente del texto.</p>
<p>pagina1.html</p>
<pre class="recuadro">
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Problema&lt;/title&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;../jquery.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;funciones.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1 id=&quot;titulo1&quot;&gt;Primer t&iacute;tulo&lt;/h1&gt;
&lt;h1 id=&quot;titulo2&quot;&gt;Segundo t&iacute;tulo&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt; 
</pre>
<p>funciones.js</p>
<pre class="recuadro">
var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$("#titulo1");
  x.click(presionTitulo1)
  x=$("#titulo2");
  x.click(presionTitulo2)
}

function presionTitulo1()
{
  var x;
  x=$("#titulo1");
  x.css("color","#ff0000");
  x.css("background-color","#ffff00");
  x.css("font-family","Courier");
}

function presionTitulo2()
{
  var x;
  x=$("#titulo2");
  x.css("color","#ffff00");
  x.css("background-color","#ff0000");
  x.css("font-family","Arial");
}
</pre>
<p>Como va ser costumbre siempre que trabajemos con esta librería primero creamos un objeto jquery a partir de la referencia a 'document' y luego llamamos al método ready indicándole el nombre de la función que debe ejecutarse luego de generarse el árbol de elementos HTML para la página:
<pre>
var x;
x=$(document);
x.ready(inicializarEventos);
</pre>
<p>La función inicializarEventos se ejecuta una vez que se cargó la página y están creados todos los elementos HTML, en esta función mediante $ accedemos a través del id a los elementos h1 respectivos, a casa uno le asignamos al evento click una función distinta que se disparará cuando presionemos con el mouse:</p>
<pre>
function inicializarEventos()
{
  var x;
  x=$("#titulo1");
  x.click(presionTitulo1)
  x=$("#titulo2");
  x.click(presionTitulo2)
}
</pre>
<p>Es importante notar que cuando obtenemos la referencia de un elemento por medio del id se le antecede el caracter # al nombre del id:</p>
<pre>
  x=$("#titulo1");
  ...
  x=$("#titulo2");
</pre>
<p>Luego las dos funciones que se ejecutan al presionar los títulos:</p>
<pre>
function presionTitulo1()
{
  var x;
  x=$("#titulo1");
  x.css("color","#ff0000");
  x.css("background-color","#ffff00");
  x.css("font-family","Courier");
}

function presionTitulo2()
{
  var x;
  x=$("#titulo2");
  x.css("color","#ffff00");
  x.css("background-color","#ff0000");
  x.css("font-family","Arial");
}
</pre>
<p>Hasta ahora hemos presentado los siguientes métodos que tiene jquery:</p>
<pre>
ready
click
</pre>
<p>El tercer método nos permite modificar una propiedad de la hoja de estilo de un elemento HTML:</p>
<pre>
  var x;
  x=$("#titulo1");
  x.css("color","#ff0000");
</pre>
<p>Una vez que hemos obtenido la referencia a un elemento HTML llamamos al método css que tiene dos parámetros: el primero indica el nombre de la propiedad y el segundo el valor a asignarle. Podemos ver las otras dos asignaciones:</p>
<pre>
  x.css("background-color","#ffff00");
  x.css("font-family","Courier");
</pre>
<p>Como podemos ver es muy fácil acceder al estilo de un elemento HTML para actualizarlo en forma dinámica luego que la página fue cargada.</p></div>
</p>

<table width="650px">
<tr>
<td align="center">	


</td>
</tr>
</table>

<br>
   <h2><a href="../index2904.html?inicio=0">Retornar</a></h2>   

      </div>
    </div>
  </div>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-628756-14', 'auto');
  ga('send', 'pageview');

</script>
</body>


<!-- Mirrored from www.javascriptya.com.ar/jquery/temarios/descripcion.php?cod=59&punto=3&inicio=0 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:22 GMT -->
</html>
