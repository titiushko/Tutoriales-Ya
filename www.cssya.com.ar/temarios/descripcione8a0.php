<!DOCTYPE html>
<html>


<!-- Mirrored from www.cssya.com.ar/temarios/descripcion.php?inicio=40&cod=41&punto=44 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
<title>Tutorial de CSS - Temarios</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../principal2.css">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<style>



html,body {
	background-color: #D3E9D0;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 1em;
}

h1 {
	font-size: 14pt;
	margin: 0%;
}



</style>
</head>

<body>


<div style="background-color: #AED7A8;width: 950px;	margin-left: auto;margin-right: auto;border-radius:7px;padding:10px">
<h1>44 - Disposición de 2 columnas (propiedad float)</h1></div>

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

Una segunda forma de implementar una página con dos columnas es utilizar la propiedad float. Disponemos dos div. Al primero lo flotamos hacia la izquierda con un width fijo y el segundo se acomoda inmediatamente a la derecha.</p>
<pre>
#columna1 {
  float:left; 
  width:200px;
}

#columna2 {
  margin-left:210px;
}
</pre>
<p>La columna1 tiene un ancho de 200 pixeles. Luego para evitar que la columna dos envuelva a la columna uno en caso de ser más larga inicializamos margin-left con 200 pixeles.</p>

<p>Veamos un ejemplo:</p>
<pre class="recuadro">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Problema&lt;/title&gt;
&lt;link rel="StyleSheet" href="estilos.css" type="text/css"&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="columna1"&gt;
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
Aquí el contenido de la columna 1.
&lt;/div&gt;
&lt;div id="columna2"&gt;
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
Aquí el contenido de la columna 2.
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

</pre>
La hoja de estilo:
<pre class="recuadro">
* {
  margin:0;
  padding:0;
}
#columna1 {
  float:left; 
  width:200px;
  background-color:#ff5;
  border:1px solid #555;
}
#columna2 {
  margin-left:210px;
  background-color:#ffb;
  border:1px solid #555;
}
</pre>

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


<br>
   <h2><a href="../index1e61.html?inicio=40">Retornar</a></h2>   

</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-628756-1', 'auto');
  ga('send', 'pageview');

</script>
</body>


<!-- Mirrored from www.cssya.com.ar/temarios/descripcion.php?inicio=40&cod=41&punto=44 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:19 GMT -->
</html>
