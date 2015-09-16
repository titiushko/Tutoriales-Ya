<!DOCTYPE html>
<html>


<!-- Mirrored from www.cssya.com.ar/temarios/descripcion.php?inicio=10&cod=20&punto=16 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:19 GMT -->
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
<h1>16 - Propiedades relacionadas al padding de un elemento HTML.</h1></div>

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

<p>El padding (almohadilla) suma espacio entre el contenido del elemento HTML (por ejemplo dentro del elemento párrafo el texto propiamente dicho es el contenido) y el borde (recordar propiedad border)</p>
<p>Podemos configurar los 4 en caso que tengan el mismo valor accediendo a la propiedad:</p>
<pre>
padding
</pre>
<p>o podemos configurar en forma independiente cada lado:</p>
<pre>
padding-top
padding-right
padding-bottom
padding-left
</pre>
<p>Veamos un ejemplo, la pagina.html:</p>
<pre class="recuadro">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Problema&lt;/title&gt;
&lt;link rel=&quot;StyleSheet&quot; href=&quot;estilos.css&quot; type=&quot;text/css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;pre class=&quot;codigofuente&quot;&gt;
public class Rectangulo{
  //atributos
  int alto;
  int ancho;
  boolean relleno;
  //m&eacute;todos
  public int devolverArea(){
    return alto*ancho;
  }
  public void rellenar(boolean r){
    relleno=r;
  }
  public void cambiarTamano(int an, int al){
    ancho=an;
    alto=al;
  }
  public Rectangulo() {// constructor
    alto=20;
    ancho=10;
    relleno=false;
  }
}//fin clase Rectangulo
&lt;/pre&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>El archivo estilos.css es:</p>
<pre class="recuadro">
.codigofuente {
  font-size:12px;
  background-color:#ffffcc;
  border-width:1px;
  border-style:dotted;
  border-color:#ffaa00;

  padding:20px;
}
</pre>
<p>Con el elemento HTML "pre", se respetan los espacios y retornos de carro que hayamos puesto en el texto fuente. Este estilo de texto es muy adecuado cuando queremos mostrar el código fuente de un programa.</p>

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
   <h2><a href="../index4231.html?inicio=10">Retornar</a></h2>   

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


<!-- Mirrored from www.cssya.com.ar/temarios/descripcion.php?inicio=10&cod=20&punto=16 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:19 GMT -->
</html>
