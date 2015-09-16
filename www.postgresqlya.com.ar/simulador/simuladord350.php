<html>

<!-- Mirrored from www.postgresqlya.com.ar/simulador/simulador.php?inicio=25&cod=186&punto=28 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
    <title>Tutorial de PostgreSQL : Problemas Resueltos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
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

.recuadro {
background-color:#ffffcc;
  text-align:left;
  font-family:verdana;

  border-width:0;
  padding:5px;

  border: 1px dotted #ffaa00;
}

</style>
<script language="JavaScript">
function abrirVentana()
{
  alto=(screen.availHeight/2)+100;
  ancho=screen.availWidth-10;		
  window.open('', 'ventanaForm', 'top=0,left=0,width='+ancho+',height='+alto+',resizable=yes,scrollbars=yes,menubar=no,status=yes,toolbar=yes,location=yes');  	
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
<h1>28 - Otros operadores relacionales (in)</h1></td>
<td align="right">
<!--<a href="http://www.sqlserverya.com.ar/publicidad/"><img border="0" style="margin:5px;padding-left:2px" src="../imagenes/publicidad.png"></a>	-->

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
<table>
<tr>
<td align="left">
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
</td>
</tr>
</table>		  

<strong>Problema: </strong><p>Trabajamos con la tabla "libros" de una librería.<br>
<p>Creamos la tabla:</p>
<pre>
 create table libros(
  codigo serial,
  titulo varchar(40) not null,
  autor varchar(20),
  editorial varchar(20),
  precio decimal(6,2),
  primary key(codigo)
 );
</pre>
<p>Ingresamos algunos registros:</p>
<pre>
 insert into libros(titulo,autor,editorial,precio)
  values('El aleph','Borges','Emece',15.90);
 insert into libros(titulo,autor,editorial,precio)
  values('Cervantes y el quijote','Borges','Paidos',null);
 insert into libros(titulo,autor,editorial,precio)
  values('Alicia en el pais de las maravillas','Lewis Carroll',null,19.90);
 insert into libros(titulo,autor,editorial,precio)
  values('Matematica estas ahi','Paenza','Siglo XXI',15);
 insert into libros (titulo,precio)
  values('Antología poética',32);
 insert into libros (titulo,autor,precio)
  values('Martin Fierro','Jose Hernandez',40);
 insert into libros (titulo,autor,precio)
  values('Aprenda PHP','Mario Molina',56.50);
</pre>
<p>Recuperamos los libros cuyo autor es "Paenza" o "Borges":</p>
<pre>
 select * from libros
  where autor in('Borges','Paenza');
</pre>
<p>Recuperamos los libros cuyo autor NO es "Paenza" ni "Borges":</p>
<pre>
 select * from libros
  where autor not in ('Borges','Paenza');
</pre>
<p>Note que los valores "null" no se consideran.</p>

   <form name="formulario2" action="http://www.postgresqlya.com.ar/simulador/ejecuta.php" target="ventanaForm" method="post" onsubmit="abrirVentana()"> 
   <input type="hidden" name="programaautomatico" value=" create table medicamentos(
  codigo serial,
  nombre varchar(20),
  laboratorio varchar(20),
  precio decimal(6,2),
  cantidad smallint,
  fechavencimiento date not null,
  primary key(codigo)
 );

 insert into medicamentos(nombre,laboratorio,precio,cantidad,fechavencimiento)
  values('Sertal','Roche',5.2,1,'2005-02-01');
 insert into medicamentos(nombre,laboratorio,precio,cantidad,fechavencimiento) 
  values('Buscapina','Roche',4.10,3,'2006-03-01');
 insert into medicamentos(nombre,laboratorio,precio,cantidad,fechavencimiento) 
  values('Amoxidal 500','Bayer',15.60,100,'2007-05-01');
 insert into medicamentos(nombre,laboratorio,precio,cantidad,fechavencimiento)
  values('Paracetamol 500','Bago',1.90,20,'2008-02-01');
 insert into medicamentos(nombre,laboratorio,precio,cantidad,fechavencimiento) 
  values('Bayaspirina','Bayer',2.10,150,'2009-12-01'); 
 insert into medicamentos(nombre,laboratorio,precio,cantidad,fechavencimiento) 
  values('Amoxidal jarabe','Bayer',5.10,250,'2010-10-01'); 

 select nombre,precio from medicamentos
  where laboratorio in ('Bayer','Bago');

 select * from medicamentos
  where cantidad between 1 and 5;

 select * from medicamentos
  where cantidad in (1,2,3,4,5);
">
   <input type="hidden" name="extension1" value="">

          <textarea class="programafuente" name="programa" rows=15 cols=80 wrap="off">
 create table libros(
  codigo serial,
  titulo varchar(40) not null,
  autor varchar(20),
  editorial varchar(20),
  precio decimal(6,2),
  primary key(codigo)
 );

 insert into libros(titulo,autor,editorial,precio)
  values('El aleph','Borges','Emece',15.90);
 insert into libros(titulo,autor,editorial,precio)
  values('Cervantes y el quijote','Borges','Paidos',null);
 insert into libros(titulo,autor,editorial,precio)
  values('Alicia en el pais de las maravillas','Lewis Carroll',null,19.90);
 insert into libros(titulo,autor,editorial,precio)
  values('Matematica estas ahi','Paenza','Siglo XXI',15);
 insert into libros (titulo,precio)
  values('Antología poética',32);
 insert into libros (titulo,autor,precio)
  values('Martin Fierro','Jose Hernandez',40);
 insert into libros (titulo,autor,precio)
  values('Aprenda PHP','Mario Molina',56.50);

 select * from libros
  where autor in('Borges','Paenza');

 select * from libros
  where autor not in ('Borges','Paenza');
</textarea>
    <br>

	<br>

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

   

</form>
<br>
   <h2><a href="../indexfc77.html?inicio=25">Retornar</a></h2>   

      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-628756-24");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>


<!-- Mirrored from www.postgresqlya.com.ar/simulador/simulador.php?inicio=25&cod=186&punto=28 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
</html>

