<html>

<!-- Mirrored from www.postgresqlya.com.ar/simulador/simulador.php?inicio=25&cod=184&punto=26 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
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
<h1>26 - Otros operadores relacionales (is null)</h1></td>
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
  autor varchar(20) default 'Desconocido',
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
  values('Martin Fierro','Jose Hernandez','Emece',25.90);
 insert into libros (titulo,autor,precio)
  values('Antología poética','Borges',25.50);
 insert into libros (titulo,autor,precio)
  values('Java en 10 minutos','Mario Molina',45.80);
 insert into libros (titulo,autor)
  values('Martin Fierro','Jose Hernandez');
 insert into libros (titulo,autor)
  values('Aprenda PHP','Mario Molina');
</pre>
<p>Recuperamos los registros en los cuales esté almacenado el valor "null" en el campo "editorial":</p>
<pre>
 select * from libros
  where editorial is null;
</pre>
<p>Seleccionamos los libros que no contiene "null" en "editorial":</p>
<pre>
 select * from libros
  where editorial is not null;
</pre>

   <form name="formulario2" action="http://www.postgresqlya.com.ar/simulador/ejecuta.php" target="ventanaForm" method="post" onsubmit="abrirVentana()"> 
   <input type="hidden" name="programaautomatico" value=" create table peliculas(
  codigo serial,
  titulo varchar(40) not null,
  actor varchar(20),
  duracion smallint,
  primary key (codigo)
 );

 insert into peliculas(titulo,actor,duracion)
  values('Mision imposible','Tom Cruise',120);
 insert into peliculas(titulo,actor,duracion)
  values('Harry Potter y la piedra filosofal','Daniel R.',null);
 insert into peliculas(titulo,actor,duracion)
  values('Harry Potter y la camara secreta','Daniel R.',190);
 insert into peliculas(titulo,actor,duracion)
  values('Mision imposible 2','Tom Cruise',120);
 insert into peliculas(titulo,actor,duracion)
  values('Mujer bonita',null,120);
 insert into peliculas(titulo,actor,duracion)
  values('Tootsie','D. Hoffman',90);
 insert into peliculas (titulo)
  values('Un oso rojo');

 select * from peliculas
  where actor is null;

 update peliculas set duracion=0
  where duracion is null;

 delete from peliculas
  where actor is null and
  duracion=0;

 select * from peliculas;">
   <input type="hidden" name="extension1" value="">

          <textarea class="programafuente" name="programa" rows=15 cols=80 wrap="off">
 create table libros(
  codigo serial,
  titulo varchar(40) not null,
  autor varchar(20) default 'Desconocido',
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
  values('Martin Fierro','Jose Hernandez','Emece',25.90);
 insert into libros (titulo,autor,precio)
  values('Antología poética','Borges',25.50);
 insert into libros (titulo,autor,precio)
  values('Java en 10 minutos','Mario Molina',45.80);
 insert into libros (titulo,autor)
  values('Martin Fierro','Jose Hernandez');
 insert into libros (titulo,autor)
  values('Aprenda PHP','Mario Molina');

 select * from libros
  where editorial is null;

 select * from libros
  where editorial is not null;
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


<!-- Mirrored from www.postgresqlya.com.ar/simulador/simulador.php?inicio=25&cod=184&punto=26 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
</html>

