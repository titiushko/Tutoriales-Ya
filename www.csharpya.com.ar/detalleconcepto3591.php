<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
<html>

<!-- Mirrored from www.csharpya.com.ar/detalleconcepto.php?codigo=183&inicio=40 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:31:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
<title>C #Ya - Estructura repetitiva foreach</title>
<meta name="viewport" content="width=device-width, initial-scale=1">    
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="c#,c sharp, tutorial, programación">
<meta name="description" content="Tutorial de C#">
<link href="css/estilos4.css" rel="stylesheet" type="text/css">
<style>
html,body {
	background-color: #D3E9D0;
	font-family: Arial, sans-serif;
	font-size: 11pt;
	text-align:center;
}

h1 {
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
}

.recuadrooculto {
  background-color:#ffffcc;
  text-align:left;
  font-family:courier;

  border-width:0;
  padding:5px;

  border: 1px dotted #ffaa00;
  display: none;
}

 img {
   padding:11px;
 }
 
 li {
    padding:10px;
 }
</style>

<script type="text/javascript">
function cambiar()
{
  var lista=document.getElementsByTagName('pre');
  for(f=0;f<lista.length;f++)
  {
   lista[f].style.display='block';
  }
  document.getElementById('solucion').style.display='none';
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
<h1>59 - Estructura repetitiva foreach</h1></td>
<td align="right">

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
 <div id="contentdetalle">

<div style="display:block;float:left;margin: 5px;"> 
 
<script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<!-- propuesto-javaya -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4669394804436935"
     data-ad-slot="1400020364"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
 
</div>  
 
<p>La estructura repetitiva foreach es utilizada para recorrer colecciones de datos (por ejemplo vectores), si bien podemos utilizar de forma tradicional las otras estructuras repetitivas el empleo del foreach hacen más natural el acceso a los elementos.</p>

<h3>Problema 1:</h3>
<p>Almacenar los sueldos de 5 operarios en un vector, imprimir los elementos recorriendo el vector con la estructura repetitiva foreach.<br>

<h4>Programa:</h4>
<pre class="recuadro">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Estructuraforeach1
{
    class SueldoEmpleados
    {
        private int[] sueldos;

        public void Cargar()
        {
            sueldos = new int[5];
            for (int f = 0; f < 5; f++)
            {
                Console.Write("Ingrese valor de la componente:");
                String linea;
                linea = Console.ReadLine();
                sueldos[f] = int.Parse(linea);
            }
        }

        public void Imprimir()
        {
            foreach (int s in sueldos)
            {
                Console.WriteLine(s);
            }
            Console.ReadKey();
        }

        static void Main(string[] args)
        {
            SueldoEmpleados pv = new SueldoEmpleados();
            pv.Cargar();
            pv.Imprimir();
        }
    }
}
</pre>
<p>El funcionamiento del foreach:</p>
<pre>

            foreach (int s in sueldos)
            {
                Console.WriteLine(s);
            }
</pre>
<p>La variable s almacena la primera vez el primer elemento del vector sueldos, seguidamente se ejecuta el bloque del foreach (en este caso imprimimos el contenido de la variable s)<br>
Es decir que s almacena en cada vuelta del foreach un elemento del vector.</p>
<p>Con la estructura foreach recorremos en forma completa el vector y en cada iteración tenemos acceso a un elemento del vector que se copia en una variable auxiliar.</p>
<p>Podemos utilizar la palabra clave var para definir en forma implícita la variable que almacena sucesivamente los elementos del vector:</p>
<pre>

        public void Imprimir()
        {
            foreach (var s in sueldos)
            {
                Console.WriteLine(s);
            }
            Console.ReadKey();
        }
</pre>


<h2>Problema propuesto</h2>
<ol>
<li>
Crear un vector de n elementos de tipo entero (n se ingresa por teclado) Mostrar cuantos elementos son superiores a 100 (emplear el foreach para recorrer el vector)
</li>
</ol>
<a href="javascript:cambiar()" id="solucion">Solución</a>
<pre class="recuadrooculto">

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Estructuraforeach2
{
    class Mayores100
    {
        private int[] vec;

        public void Cargar()
        {
            Console.Write("Cantidad de elementos:");
            int n = int.Parse(Console.ReadLine());
            vec = new int[n];
            for (int f = 0; f < vec.Length; f++)
            {
                Console.Write("Ingrese valor de la componente:");
                String linea;
                linea = Console.ReadLine();
                vec[f] = int.Parse(linea);
            }
        }

        public void Imprimir()
        {
            int cant = 0;
            foreach (var valor in vec)
            {
                if (valor > 100)
                {
                    cant++;
                }
            }
            Console.Write("La cantidad de elementos mayores a 100 son:" + cant);
            Console.ReadKey();
        }

        static void Main(string[] args)
        {
            Mayores100 m = new Mayores100();
            m.Cargar();
            m.Imprimir();
        }
    }
}
</pre></div>


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
src="../pagead2.googlesyndication.com/pagead/f.txt">
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
src="../pagead2.googlesyndication.com/pagead/f.txt">
</script>

</td>
</tr>
</table>

<br>
   <h2><a href="index1e61.html?inicio=40">Retornar</a></h2>   

  </div>
    </div>
  </div>
</div>




</body>


<!-- Mirrored from www.csharpya.com.ar/detalleconcepto.php?codigo=183&inicio=40 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:31:27 GMT -->
</html>
