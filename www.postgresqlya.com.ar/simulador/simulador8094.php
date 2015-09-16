<html>

<!-- Mirrored from www.postgresqlya.com.ar/simulador/simulador.php?inicio=25&cod=189&punto=31 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
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
<h1>31 - Funciones de agrupamiento (count - sum - min - max - avg)</h1></td>
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
  autor varchar(30) default 'Desconocido',
  editorial varchar(15),
  precio decimal(5,2),
  cantidad smallint,
  primary key(codigo)
 );
</pre>
<p>Ingresamos algunos registros:</p>
<pre>
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('El aleph','Borges','Planeta',15,null);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Martin Fierro','Jose Hernandez','Emece',22.20,200);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Antologia poetica','J.L. Borges','Planeta',null,150);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Aprenda PHP','Mario Molina','Emece',18.20,null);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Cervantes y el quijote','Bioy Casares- J.L. Borges','Paidos',null,100);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Manual de PHP', 'J.C. Paez', 'Siglo XXI',31.80,120);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Harry Potter y la piedra filosofal','J.K. Rowling',default,45.00,90);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Harry Potter y la camara secreta','J.K. Rowling','Emece',46.00,100);
 insert into libros (titulo,autor,cantidad)
  values('Alicia en el pais de las maravillas','Lewis Carroll',220);
 insert into libros (titulo,autor,cantidad)
  values('PHP de la A a la Z',default,0);
</pre>
<p>Para conocer la cantidad total de libros, sumamos las cantidades de cada uno:</p>
<pre>
 select sum(cantidad)
  from libros;
</pre>
<p>Retorna 980; verifique la suma, sumando los valores de todos los registros del campo "cantidad".</p>

<p>Queremos saber cuántos libros tenemos de la editorial "Emece":</p>
<pre>
 select sum(cantidad)
  from libros
  where editorial='Emece';
</pre>
<p>
retorna 300.
</p>
<p>Queremos saber cuál es el libro más costoso; usamos la función "max()":</p>
<pre>
 select max(precio)
  from libros;
</pre>
<p>retorna 46.00.</p>

<p>Para conocer el precio mínimo de los libros de "Rowling" tipeamos:</p>
<pre>
 select min(precio)
  from libros
  where autor like '%Rowling%';
</pre>
<p>retorna 45.00.</p>

<p>Queremos saber el promedio del precio de los libros referentes a "PHP":</p>
<pre>
 select avg(precio)
  from libros
  where titulo like '%PHP%';
</pre>
<p>Devuelve 25.00. Note que hay 3 libros sobre "PHP", pero uno de ellos tiene precio nulo entonces PostgreSQL no lo incluye para calcular el promedio.</p>

   <form name="formulario2" action="http://www.postgresqlya.com.ar/simulador/ejecuta.php" target="ventanaForm" method="post" onsubmit="abrirVentana()"> 
   <input type="hidden" name="programaautomatico" value=" create table empleados(
  nombre varchar(30),
  documento char(8),
  domicilio varchar(30),
  seccion varchar(20),
  sueldo decimal(6,2),
  cantidadhijos smallint,
  primary key(documento)
 );

 insert into empleados
  values('Juan Perez','22333444','Colon 123','Gerencia',5000,2);
 insert into empleados
  values('Ana Acosta','23444555','Caseros 987','Secretaria',2000,0);
 insert into empleados
  values('Lucas Duarte','25666777','Sucre 235','Sistemas',4000,1);
 insert into empleados
  values('Pamela Gonzalez','26777888','Sarmiento 873','Secretaria',2200,3);
 insert into empleados
  values('Marcos Juarez','30000111','Rivadavia 801','Contaduria',3000,0);
 insert into empleados
  values('Yolanda Perez','35111222','Colon 180','Administracion',3200,1);
 insert into empleados
  values('Rodolfo Perez','35555888','Coronel Olmedo 588','Sistemas',4000,3);
 insert into empleados
  values('Martina Rodriguez','30141414','Sarmiento 1234','Administracion',3800,4);
 insert into empleados
  values('Andres Costa','28444555',default,'Secretaria',null,null);

 select count(*)
  from empleados;

 select count(sueldo)
  from empleados
  where seccion='Secretaria';

 select max(sueldo) as Mayorsueldo,
  min(sueldo) as Menorsueldo
  from empleados;

 select max(cantidadhijos)
  from empleados
  where nombre like '%Perez%';

 select avg(sueldo)
  from empleados;

 select avg(sueldo)
  from empleados
  where seccion='Secretaria';

 select avg(cantidadhijos)
  from empleados
  where seccion='Sistemas';
">
   <input type="hidden" name="extension1" value="">

          <textarea class="programafuente" name="programa" rows=15 cols=80 wrap="off">
 create table libros(
  codigo serial,
  titulo varchar(40) not null,
  autor varchar(30) default 'Desconocido',
  editorial varchar(15),
  precio decimal(5,2),
  cantidad smallint,
  primary key(codigo)
 );

 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('El aleph','Borges','Planeta',15,null);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Martin Fierro','Jose Hernandez','Emece',22.20,200);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Antologia poetica','J.L. Borges','Planeta',null,150);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Aprenda PHP','Mario Molina','Emece',18.20,null);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Cervantes y el quijote','Bioy Casares- J.L. Borges','Paidos',null,100);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Manual de PHP', 'J.C. Paez', 'Siglo XXI',31.80,120);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Harry Potter y la piedra filosofal','J.K. Rowling',default,45.00,90);
 insert into libros(titulo,autor,editorial,precio,cantidad)
  values('Harry Potter y la camara secreta','J.K. Rowling','Emece',46.00,100);
 insert into libros (titulo,autor,cantidad)
  values('Alicia en el pais de las maravillas','Lewis Carroll',220);
 insert into libros (titulo,autor,cantidad)
  values('PHP de la A a la Z',default,0);

 select sum(cantidad)
  from libros;

 select sum(cantidad)
  from libros
  where editorial='Emece';

 select max(precio)
  from libros;

 select min(precio)
  from libros
  where autor like '%Rowling%';

 select avg(precio)
  from libros
  where titulo like '%PHP%';
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


<!-- Mirrored from www.postgresqlya.com.ar/simulador/simulador.php?inicio=25&cod=189&punto=31 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
</html>

