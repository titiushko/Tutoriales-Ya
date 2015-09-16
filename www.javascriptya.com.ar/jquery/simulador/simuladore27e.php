<html>


<!-- Mirrored from www.javascriptya.com.ar/jquery/simulador/simulador.php?inicio=0&cod=62&punto=6&inicio=0 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
  <title>Ejercicios resueltos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="jQuery, programación, webmaster, tutorial, JavaScript">
<meta name="description" content="El objetivo de este tutorial es presentar los conceptos de la libreria JavaScript JQUERY.">
<meta name="author" content="Diego Moisset">

  <link href="../css/estilos.css" rel="stylesheet" type="text/css">
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
.editor {
 /* background-image:url("numeros.png");
 background-repeat: no-repeat;
       background-position: 0px 0px;
       background-attachment: scroll;*/}
</style>

<script language="JavaScript">
function abrirVentana()
{
  alto=(screen.availHeight/2)+100;
  ancho=screen.availWidth-10;		
  window.open('', 'ventanaForm', 'top=0,left=0,width='+ancho+',height='+alto+',resizable=yes,scrollbars=yes,menubar=yes,status=yes,toolbar=yes,location=yes');  	
}
</script>
</head>

<body bgcolor="#CCFFCC">
        
<div class="upperleft">
  <div class="upperright">
    <div class="lowerleft">
      <div class="lowerright">

<table width="98%">
<tr>
<td> 
<h1>6 - Selección de elementos utilizando las clases CSS definidas.</h1></td>
<td align="right">
<!--<a href="http://www.javascriptya.com.ar/publicidad/"><img border="0" style="margin:5px;padding-left:2px" src="../imagenes/publicidad.png"></a>	-->

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
	<table width="650px">
<tr>
<td align="left">	
<script type="text/javascript"><!--
google_ad_client = "pub-4669394804436935";
/* 728x90, creado 1/09/10 - largo */
google_ad_slot = "4269167522";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="../../../pagead2.googlesyndication.com/pagead/f.txt">
</script>
</td>

</tr>
</table>		  
	  
	  
                <b>Simulador <em>(Cuando presiona el bot&oacute;n &quot;ejecutar el programa&quot; 
        se graban todos los cuadros de texto y se ejecuta el primero de la lista 
        mostrando en una página el resultado.</em></b>) 
<form name="formulario" action="http://www.scratchya.com.ar/ejecutajquerya.php" target="ventanaForm" method="post" onsubmit=  "abrirVentana()">

<div style="font-size:1.3em;font-family:arial;"><br><p>Mostrar una serie de lenguajes de programación y aplicar un estilo resaltado para aquellos lenguajes que son orientados a objetos. Cuando se presione un botón agregar la propiedad background-color a todos los elementos de dicha clase.</p></div><br><b>pagina1.html</b><input type="hidden" name="archivo1" value="pagina1.html"><br><textarea class="editor" wrap="off" rows="15" cols="110" name="programa1">&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Problema&lt;/title&gt;
&lt;link rel=&quot;StyleSheet&quot; href=&quot;estilos.css&quot; type=&quot;text/css&quot;&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;../jquery.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;funciones.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;p&gt;Cuales de los siguientes lenguajes son orientados a objetos:
&lt;span class=&quot;resaltado&quot;&gt;Java&lt;/span&gt;, VB6, &lt;span class=&quot;resaltado&quot;&gt;C++&lt;/span&gt;, C,
&lt;span class=&quot;resaltado&quot;&gt;C#&lt;/span&gt;, Cobol ?&lt;/p&gt;
&lt;input type=&quot;button&quot; id=&quot;boton1&quot; value=&quot;ver resultado&quot;&gt;
&lt;/body&gt;
&lt;/html&gt;</textarea><br><br><input type="submit"  value="Ejecutar el programa.">
<table width="650px">
<tr>
<td align="left">	
<script type="text/javascript"><!--
google_ad_client = "pub-4669394804436935";
/* 300x250, creado 26/02/09 graficotot */
google_ad_slot = "5205806820";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="../../../pagead2.googlesyndication.com/pagead/f.txt">
</script>

<script type="text/javascript"><!--
google_ad_client = "pub-4669394804436935";
/* 300x250, creado 11/11/08 grafico */
google_ad_slot = "1392361504";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="../../../pagead2.googlesyndication.com/pagead/f.txt">
</script>
</td>
</tr>
</table>



<br><div style="font-size:1.3em;font-family:arial;"><br></div><br><b>funciones.js</b><input type="hidden" name="archivo2" value="funciones.html"><br><textarea class="editor" wrap="off" rows="15" cols="110" name="programa2">var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$(&quot;#boton1&quot;);
  x.click(resaltar);
}

function resaltar()
{
  var x;
  x=$(&quot;.resaltado&quot;);
  x.css(&quot;background-color&quot;,&quot;ffff00&quot;);
}</textarea><br><br><div style="font-size:1.3em;font-family:arial;"><br></div><br><b>estilos.css</b><input type="hidden" name="archivo3" value="estilos.html"><br><textarea class="editor" wrap="off" rows="15" cols="110" name="programa3">.resaltado{
  color:#000000;
}
</textarea><br><br>
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


<!-- Mirrored from www.javascriptya.com.ar/jquery/simulador/simulador.php?inicio=0&cod=62&punto=6&inicio=0 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:22 GMT -->
</html>

