

<!DOCTYPE html>
<html>


<!-- Mirrored from www.cssya.com.ar/bootstrapya/detalleconcepto.php?punto=35&codigo=150&inicio=20 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 17:33:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
<title>Componente : panel</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="bootstrap,css, html, programación, webmaster, tutorial">
<meta name="description" content="El objetivo de este tutorial 
    es presentar los conceptos básicos de bootstrap.">

<meta name="author" content="Diego Moisset">

<link rel="stylesheet" type="text/css" href="../principal2.css">

<style>
html,body {
	background-color: #D3E9D0;
	font-family: sans-serif,arial;
	font-size: 1em;
}

h1 {
	font-size: 14pt;
	margin: 0%;
}
.recuadro {
  background-color:#ffffcc;
  text-align:left;
  font-family:courier;
  font-size:1.2em;
  border-width:0;
  padding:5px;
  border: 1px dotted #ffaa00;
  overflow:scroll;
  float:both;
  width:940px;
  overflow-y:hidden;
}

</style>
</head>

<body>


<div style="background-color: #AED7A8;width: 950px;	margin-left: auto;margin-right: auto;border-radius:7px;padding:10px">
<h1>35 - Componente : panel</h1></div>

<br>

<div style="background-color: #AED7A8;width: 950px;	border-radius:7px;padding:10px;margin-left: auto;margin-right: auto">

<div style="display:block;float:left;margin: 5px;"> 
<script type="text/javascript"><!--
google_ad_client = "pub-4669394804436935";
/* 300x250, creado 6/11/08 novi */
google_ad_slot = "7481492727";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script>

</div> 

<p>Cuando necesitamos encerrar cierto contenido en un recuadro podemos utilizar la clase "panel".</p>
<p>Hay varias posibilidades de implementaciones de paneles: simples, con cabecera, con pié etc.</p>
<h3>Panel simple</h3>
<p>Veamos la sintaxis para crear un panel simple:</p>
<pre class="recuadro">
&lt;!DOCTYPE html&gt; 
&lt;html&gt; 
  &lt;head&gt; 
    &lt;title&gt;Prueba de Bootstrap&lt;/title&gt; 
    &lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt; 
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
&lt;/head&gt; 
&lt;body&gt; 
  &lt;div class="container"&gt;
    &lt;div class="panel panel-default"&gt;
      &lt;div class="panel-body"&gt;
      El tutorial consta de más de 40 conceptos.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt; 
&lt;/body&gt; 
&lt;/html&gt; 
</pre>

<p>Como vemos definimos un div con las clases "panel" y "panel-default", luego en su interior otro div con la clase "panel-body", tenemos como resultado en el navegador el contenido con un recuadro:</p>
<img src="imagentema/foto053.jpg" border="0" alt="panel panel-body bootstrap"><br> 

<h3>Panel con título</h3>
<p>Podemos crear un panel con un título, para esto agregamos un div con la clase "panel-heading" previo al div del "panel-body".</p>
<p>La implementación queda:</p>
<pre class="recuadro">
&lt;!DOCTYPE html&gt; 
&lt;html&gt; 
  &lt;head&gt; 
    &lt;title&gt;Prueba de Bootstrap&lt;/title&gt; 
    &lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt; 
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
&lt;/head&gt; 
&lt;body&gt; 
  &lt;div class="container"&gt;
    &lt;div class="panel panel-default"&gt;
      &lt;div class="panel-heading"&gt;
       Tutorial de Bootstrap
      &lt;/div&gt; 
      &lt;div class="panel-body"&gt;
       &lt;a href="http://www.cssya.com.ar/bootstrapya"&gt;El tutorial consta de más de 40 conceptos.&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt; 
&lt;/body&gt; 
&lt;/html&gt; 
</pre>
<p>En el navegador tenemos como resultado:</p>
<img src="imagentema/foto054.jpg" border="0" alt="panel panel-heading bootstrap"><br> 

<h3>Panel con pie</h3>
<p>Finalmente podemos agregar a nuestro panel un pie empleando la clase "panel-footer":</p>
<pre class="recuadro">
&lt;!DOCTYPE html&gt; 
&lt;html&gt; 
  &lt;head&gt; 
    &lt;title&gt;Prueba de Bootstrap&lt;/title&gt; 
    &lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt; 
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
&lt;/head&gt; 
&lt;body&gt; 
  &lt;div class="container"&gt;
    &lt;div class="panel panel-default"&gt;
      &lt;div class="panel-heading"&gt;
       Tutorial de Bootstrap
      &lt;/div&gt; 
      &lt;div class="panel-body"&gt;
       &lt;a href="http://www.cssya.com.ar/bootstrapya"&gt;El tutorial consta de más de 40 conceptos.&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="panel-footer"&gt;
       Bootstrap
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt; 
&lt;/body&gt; 
&lt;/html&gt; 
</pre>

<p>En el navegador tenemos como resultado:</p>
<img src="imagentema/foto055.jpg" border="0" alt="panel panel-footer bootstrap"><br> 

<h3>Panel contextuales</h3>
<p>Igual que con los botones y tipografías podemos utilizar algunos de los colores contextuales que propone Bootstrap para indicar éxito, cuidado, peligro etc.</p>
<p>Las clases referidas a contextos con los paneles son: panel-primary, panel-success, panel-info, panel-warning, panel-danger,</p>
<p>Una página que define una serie de paneles utilizando estas clases:</p>
<pre class="recuadro">
&lt;!DOCTYPE html&gt; 
&lt;html&gt; 
  &lt;head&gt; 
    &lt;title&gt;Prueba de Bootstrap&lt;/title&gt; 
    &lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt; 
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
&lt;/head&gt; 
&lt;body&gt;
  &lt;div class="container"&gt;
    &lt;div class="panel panel-primary"&gt;
      &lt;div class="panel-heading"&gt;
       Tutorial de Bootstrap
      &lt;/div&gt; 
      &lt;div class="panel-body"&gt;
       &lt;a href="http://www.cssya.com.ar/bootstrapya"&gt;El tutorial consta de más de 40 conceptos.&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="panel-footer"&gt;
       Bootstrap
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;hr&gt;

    &lt;div class="panel panel-success"&gt;
      &lt;div class="panel-heading"&gt;
       Tutorial de Bootstrap
      &lt;/div&gt; 
      &lt;div class="panel-body"&gt;
       &lt;a href="http://www.cssya.com.ar/bootstrapya"&gt;El tutorial consta de más de 40 conceptos.&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="panel-footer"&gt;
       Bootstrap
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;hr&gt;

    &lt;div class="panel panel-info"&gt;
      &lt;div class="panel-heading"&gt;
       Tutorial de Bootstrap
      &lt;/div&gt; 
      &lt;div class="panel-body"&gt;
       &lt;a href="http://www.cssya.com.ar/bootstrapya"&gt;El tutorial consta de más de 40 conceptos.&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="panel-footer"&gt;
       Bootstrap
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;hr&gt;

    &lt;div class="panel panel-warning"&gt;
      &lt;div class="panel-heading"&gt;
       Tutorial de Bootstrap
      &lt;/div&gt; 
      &lt;div class="panel-body"&gt;
       &lt;a href="http://www.cssya.com.ar/bootstrapya"&gt;El tutorial consta de más de 40 conceptos.&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="panel-footer"&gt;
       Bootstrap
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;hr&gt;

    &lt;div class="panel panel-danger"&gt;
      &lt;div class="panel-heading"&gt;
       Tutorial de Bootstrap
      &lt;/div&gt; 
      &lt;div class="panel-body"&gt;
       &lt;a href="http://www.cssya.com.ar/bootstrapya"&gt;El tutorial consta de más de 40 conceptos.&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="panel-footer"&gt;
       Bootstrap
      &lt;/div&gt;
    &lt;/div&gt;

  &lt;/div&gt; 
&lt;/body&gt; 
&lt;/html&gt; 
</pre>

<img src="imagentema/foto056.jpg" border="0" alt="panel panel-primary, panel-success, panel-info, panel-warning, panel-danger, bootstrap"><br> <h2><a target="_blank" href="ejecutarc5ef.html?cod=150">Ejecutar Ejemplo</a></h2><h2><a href="index28fa.html?inicio=20">Retornar</a></h2> 

<table width="700px">
<tr>
<td align="left">	

<script type="text/javascript"><!--
google_ad_client = "ca-pub-4669394804436935";
/* fondo-izquierda-grande */
google_ad_slot = "2944336362";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-4669394804436935";
/* fondo-derecha-grande */
google_ad_slot = "7374535966";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script>

</td>
</tr>
</table>


</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-628756-32', 'auto');
  ga('send', 'pageview');

</script>
</body>


<!-- Mirrored from www.cssya.com.ar/bootstrapya/detalleconcepto.php?punto=35&codigo=150&inicio=20 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 17:33:51 GMT -->
</html>
