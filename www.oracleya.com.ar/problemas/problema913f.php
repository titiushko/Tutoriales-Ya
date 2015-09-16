

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<!-- Mirrored from www.oracleya.com.ar/problemas/problema.php?inicio=50&cod=214&punto=56 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
<title>Ejercicios propuestos : Otros tipos de combinaciones(Oracle)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="oracle, programación, sql, tutorial">
<meta name="description" content="El objetivo de este tutorial 
es presentar los conceptos básicos de Oracle.">
<meta name="author" content="Diego Moisset">
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
pre {
  text-align:left;
  font-family:verdana,sans-serif;
}
.recuadro {
background-color:#ffffcc;
  text-align:left;
  font-family:verdana;

  border-width:0;
  padding:5px;

  border: 1px dotted #ffaa00;
}
.recuadrooculto {
  background-color:#ffffcc;
  text-align:left;
  font-family:verdana;

  border-width:0;
  padding:5px;
  border: 1px dotted #ffaa00;
  display: none;
}

</style>

<script language="JavaScript">
function abrirVentana()
{
  alto=(screen.availHeight/2)+100;
  ancho=screen.availWidth-10;	
  window.open('', 'ventanaForm', 'top=0,left=0,width='+ancho+',height='+alto+',resizable=yes,scrollbars=yes,menubar=no,status=yes,toolbar=yes,location=yes');  	
}

function VentanaTeorico(codigo)
{
  alto=400;
  window.open('../temarios/descripcion2ade4.html?cod='+codigo+'&origen=problema', '', 'top=0,left=0,width=800,height='+alto+',resizable=yes,scrollbars=yes,menubar=no');  	
}

function cambiar(nro)
{
  var lista=document.getElementsByTagName('pre');
  for(f=0;f<lista.length;f++)
  {
   if (nro==1)
   {
     if (lista[f].id=='solu1')
       lista[f].style.display='block';
   }
   else
     if (nro==2)
     {
       if (lista[f].id=='solu2')
         lista[f].style.display='block';
     }
	   
  }
  if (nro==1)
    document.getElementById('solucion1').style.display='none';
  if (nro==2)
    document.getElementById('solucion2').style.display='none';
}

</script>

</head>

<body>
<div class="upperleft">
  <div class="upperright">
    <div class="lowerleft">
      <div class="lowerright">

<table width="98%">
<tr>
<td> 
<h1>56 - Otros tipos de combinaciones</h1></td>
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
/* 728x90, creado 1/09/10 - largo */
google_ad_slot = "4269167522";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script>
</td>
</tr>
</table>		  

<b>Primer problema: </b><br><p>Una empresa tiene registrados sus clientes en una tabla llamada "clientes", también tiene una tabla "provincias" donde registra los nombres de las provincias.</p>
<p>1- Elimine las tablas "clientes" y "provincias" y créelas:</p>
<pre>
 drop table clientes;
 drop table provincias;

 create table clientes (
  codigo number(5),
  nombre varchar2(30),
  domicilio varchar2(30),
  ciudad varchar2(20),
  codigoprovincia number(2)
 );

 create table provincias(
  codigoprovincia number(2),
  nombre varchar2(20)
 );
</pre>
<p>2- Ingrese algunos registros para ambas tablas:</p>
<pre>
 insert into provincias values(1,'Cordoba');
 insert into provincias values(2,'Santa Fe');
 insert into provincias values(3,'Corrientes');
 insert into provincias values(null,'Salta');

 insert into clientes values (100,'Lopez Marcos','Colon 111','Córdoba',1);
 insert into clientes values (101,'Perez Ana','San Martin 222','Cruz del Eje',1);
 insert into clientes values (102,'Garcia Juan','Rivadavia 333','Villa Maria',1);
 insert into clientes values (103,'Perez Luis','Sarmiento 444','Rosario',2);
 insert into clientes values (104,'Gomez Ines','San Martin 666','Santa Fe',2);
 insert into clientes values (105,'Torres Fabiola','Alem 777','La Plata',4);
 insert into clientes values (106,'Garcia Luis','Sucre 475','Santa Rosa',null);
</pre>
<p>3- Muestre todos los datos de los clientes, incluido el nombre de la provincia empleando un "left join" (7 filas)</p>
<p>4- Obtenga la misma salida que la consulta anterior pero empleando un "join" con el modificador (+)<br>
<p>Note que en los puntos 3 y 4, los registros "Garcia Luis" y "Torres Fabiola" aparecen aunque no encuentran coincidencia en "provincias", mostrando "null" en la columna "provincia".</p>

<p>5- Muestre todos los datos de los clientes, incluido el nombre de la provincia empleando un "right join" para que las provincias de las cuales no hay clientes también aparezcan en la consulta (7 filas)</p>
<p>6- Obtenga la misma salida que la consulta anterior pero empleando un "join" con el modificador (+)<br>
<p>Note que en los puntos 5 y 6, las provincias "Salta" y "Corrientes" aparecen aunque no encuentran coincidencia en "clientes", mostrando "null" en todos los campos de tal tabla.</p>
<p>7- Intente colocar en una consulta "join", el modificador "(+)" en ambos campos del enlace (mensaje de error)</p>
<p>8- Intente realizar un natural join entre ambas tablas mostrando el nombre del cliente, la ciudad y nombre de la provincia (las tablas tienen 2 campos con igual nombre "codigoprovincia" y "nombre"; mensaje de error)</p>
<p>9- Realice una combinación entre ambas tablas empleando la cláusula "using" (5 filas)</p>
<a href="javascript:cambiar(1)" id="solucion1">Ver solución</a>
<br><br>
<pre id="solu1" class="recuadrooculto">
 drop table clientes;
 drop table provincias;

 create table clientes (
  codigo number(5),
  nombre varchar2(30),
  domicilio varchar2(30),
  ciudad varchar2(20),
  codigoprovincia number(2)
 );

 create table provincias(
  codigoprovincia number(2),
  nombre varchar2(20)
 );

 insert into provincias values(1,'Cordoba');
 insert into provincias values(2,'Santa Fe');
 insert into provincias values(3,'Corrientes');
 insert into provincias values(null,'Salta');

 insert into clientes values (100,'Lopez Marcos','Colon 111','C&oacute;rdoba',1);
 insert into clientes values (101,'Perez Ana','San Martin 222','Cruz del Eje',1);
 insert into clientes values (102,'Garcia Juan','Rivadavia 333','Villa Maria',1);
 insert into clientes values (103,'Perez Luis','Sarmiento 444','Rosario',2);
 insert into clientes values (104,'Gomez Ines','San Martin 666','Santa Fe',2);
 insert into clientes values (105,'Torres Fabiola','Alem 777','La Plata',4);
 insert into clientes values (106,'Garcia Luis','Sucre 475','Santa Rosa',null);

 select c.nombre,domicilio,ciudad, p.nombre as provincia
  from clientes c
  left join provincias p
  on c.codigoprovincia = p.codigoprovincia;

 select c.nombre,domicilio,ciudad, p.nombre as provincia
  from clientes c
  join provincias p
  on c.codigoprovincia = p.codigoprovincia(+);

 select c.nombre,domicilio,ciudad, p.nombre as provincia
  from clientes c
  right join provincias p
  on c.codigoprovincia = p.codigoprovincia;

 select c.nombre,domicilio,ciudad, p.nombre as provincia
  from clientes c
  join provincias p
  on c.codigoprovincia(+)= p.codigoprovincia;

 select c.nombre,domicilio,ciudad, p.nombre as provincia
  from clientes c
  join provincias p
  on codigoprovincia(+)= p.codigo(+);

 select c.nombre,ciudad,p.nombre as provincia
  from clientes c
  natural join
  provincias p;

 select c.nombre,ciudad,p.nombre as provincia
  from clientes c
  join provincias p
  using (codigoprovincia);</pre>
        <p>&nbsp;</p>
  
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
	
	

<b>Segundo problema: </b><br><p>Un club dicta clases de distintos deportes. Almacena la información en una tabla llamada "inscriptos" que incluye el documento, el nombre, el deporte y si la matricula esta paga o no y una tabla llamada "inasistencias" que incluye el documento, el deporte y la fecha de la inasistencia.</p>
<p>1- Elimine las tablas y créelas:</p>
<pre>
 drop table inscriptos;
 drop table inasistencias;

 create table inscriptos(
  nombre varchar2(30),
  documento char(8),
  deporte varchar2(15),
  matricula char(1), --'s'=paga; 'n'=impaga
  primary key(documento,deporte)
 );

 create table inasistencias(
  documento char(8),
  deporte varchar2(15),
  fecha date
 );
</pre>
<p>2- Ingrese algunos registros para ambas tablas:</p>
<pre>
 insert into inscriptos values('Juan Perez','22222222','tenis','s');
 insert into inscriptos values('Maria Lopez','23333333','tenis','s');
 insert into inscriptos values('Agustin Juarez','24444444','tenis','n');
 insert into inscriptos values('Marta Garcia','25555555','natacion','s');
 insert into inscriptos values('Juan Perez','22222222','natacion','s');
 insert into inscriptos values('Maria Lopez','23333333','natacion','n');

 insert into inasistencias values('22222222','tenis','01/12/2006');
 insert into inasistencias values('22222222','tenis','08/12/2006');
 insert into inasistencias values('23333333','tenis','01/12/2006');
 insert into inasistencias values('24444444','tenis','08/12/2006');
 insert into inasistencias values('22222222','natacion','02/12/2006');
 insert into inasistencias values('23333333','natacion','02/12/2006');
</pre>
<p>3- Muestre toda la información de "inscriptos", realizando una combinación con "inasistencias". Realice un "left join" para incluir todos los "inscriptos" aunque no se encuentren en "inasistencias" (7 filas)<br>
<p>Note que la condición es compuesta porque para identificar los registros necesitamos ambos campos.
Note que la persona con documento '25555555' aparece en la consulta aún cuando no está presente en "inasistencias".</p>
<p>4- Obtenga el mismo resultado anterior empleando un "join" y el modificador "(+)" (7 filas)<br>
<p>Note que se coloca el modificador en ambos campos. Si se omite en alguno de ellos, el resultado será diferente (6 filas)</p>
<p>5- Intente realizar un natural join entre ambas tablas mostrando el nombre del inscripto, el deporte y la fecha de inasistencia (mensaje de error porque hay 2 campos con igual nombre)</p>
<p>6- Realice una combinación entre ambas tablas mostrando toda la información y empleando la cláusula "using" (6 filas)</p>
<br>
<a href="javascript:cambiar(2)" id="solucion2">Ver solución</a>
<pre id="solu2" class="recuadrooculto">
 drop table inscriptos;
 drop table inasistencias;

 create table inscriptos(
  nombre varchar2(30),
  documento char(8),
  deporte varchar2(15),
  matricula char(1), --'s'=paga; 'n'=impaga
  primary key(documento,deporte)
 );

 create table inasistencias(
  documento char(8),
  deporte varchar2(15),
  fecha date
 );

 insert into inscriptos values('Juan Perez','22222222','tenis','s');
 insert into inscriptos values('Maria Lopez','23333333','tenis','s');
 insert into inscriptos values('Agustin Juarez','24444444','tenis','n');
 insert into inscriptos values('Marta Garcia','25555555','natacion','s');
 insert into inscriptos values('Juan Perez','22222222','natacion','s');
 insert into inscriptos values('Maria Lopez','23333333','natacion','n');

 insert into inasistencias values('22222222','tenis','01/12/2006');
 insert into inasistencias values('22222222','tenis','08/12/2006');
 insert into inasistencias values('23333333','tenis','01/12/2006');
 insert into inasistencias values('24444444','tenis','08/12/2006');
 insert into inasistencias values('22222222','natacion','02/12/2006');
 insert into inasistencias values('23333333','natacion','02/12/2006');

 select ins.documento,nombre,ins.deporte,ina.fecha
  from inscriptos ins
  left join inasistencias ina
  on ins.documento=ina.documento and
  ins.deporte=ina.deporte;

 select ins.documento,nombre,ins.deporte,ina.fecha
  from inscriptos ins
  join inasistencias ina
  on ins.documento=ina.documento(+) and
  ins.deporte=ina.deporte(+);

 select ins.documento,nombre,ins.deporte,ina.fecha
  from inscriptos ins
  join inasistencias ina
  on ins.documento=ina.documento(+) and
  ins.deporte=ina.deporte;

 select nombre,ins.deporte,fecha
  from inscriptos ins
  natural join
  inasistencias ina;

 select * from inscriptos ins
  join inasistencias ina
  using (documento,deporte);

</pre>

		
<br>
   <h2><a href="../indexefd7.html?inicio=50">Retornar</a></h2>   


      </div>
    </div>
  </div>
</div>



</body>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-628756-18");
pageTracker._trackPageview();
} catch(err) {}</script>

<!-- Mirrored from www.oracleya.com.ar/problemas/problema.php?inicio=50&cod=214&punto=56 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
</html>
