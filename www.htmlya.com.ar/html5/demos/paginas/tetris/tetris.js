
function aleatorio(inferior,superior){ 
   	numPosibilidades = superior - inferior; 
   	aleat = Math.random() * numPosibilidades; 
   	aleat = Math.round(aleat); 
   	return parseInt(inferior) + aleat; 
}  

//objeto papel **********************************************
var papel= {
   retornarPapel: function(x) {
    this.x=x;
    var canvas = document.getElementById(x);
    if (canvas.getContext) {
      this.lienzo = canvas.getContext("2d");
      this.ancho=canvas.width;
      this.alto=canvas.height;
      return this.lienzo;
	} else
      return false;
  },
  redimensionar:function() {
    var viewportWidth = window.innerWidth;
    var viewportHeight = window.innerHeight;
    var canvasWidth = viewportWidth * 0.95;
    var canvasHeight = (viewportHeight-110) * 0.98;
    this.ancho = canvasWidth;
    this.alto = canvasHeight; 
    var canvas = document.getElementById(this.x);
    canvas.width=this.ancho;
	canvas.height=this.alto;
  },
  linea: function(x1,y1,x2,y2) {
    this.lienzo.beginPath();
    this.lienzo.moveTo(x1,y1);
	this.lienzo.lineTo(x2,y2);
    this.lienzo.stroke();
  },
  rectangulo: function(x,y,ancho,alto) {
    this.lienzo.beginPath(); 
    this.lienzo.rect(x,y,ancho,alto);
    this.lienzo.stroke();	
  },
    rectanguloRelleno: function(x,y,ancho,alto) {
    this.lienzo.fillRect(x,y,ancho,alto);
  },
  elipseRelleno: function(x,y,radio) {
    this.lienzo.beginPath();
	this.lienzo.arc(x,y,radio,0,Math.PI+(Math.PI),true);
	this.lienzo.fill();
  },
    borrar: function(x,y,ancho,alto) {
    this.lienzo.clearRect(x,y,ancho,alto);
  },  
  fijarColor: function(rojo,verde,azul) {
    this.lienzo.fillStyle="rgb("+rojo+","+verde+","+azul+")";
  },
  fijarColorLinea: function(rojo,verde,azul) {
    this.lienzo.strokeStyle="rgb("+rojo+","+verde+","+azul+")";
  },
  fijarTexto: function(x,y,texto) {
  	this.lienzo.font = "18pt Arial";
    this.lienzo.fillText(texto,x,y);
  },
  retornarAncho: function() {
    return this.ancho;
  },
  retornarAlto: function() {
    return this.alto;
  },
  fijarCentrado: function(centrado) {
    this.lienzo.textAlign=centrado;  
  },
  borrar: function(x,y,ancho,alto) {
    this.lienzo.clearRect(x,y,ancho,alto);
  },
  dibujarImagen: function(img,x,y) {
    this.lienzo.drawImage(img,x,y);
  },
  dibujarParteImagen: function(img,sx, sy, sWidth, sHeight, dx, dy, dWidth, dHeight) {
    this.lienzo.drawImage(img,sx, sy, sWidth, sHeight, dx, dy, dWidth, dHeight);
  },
  triangulo: function(x1,y1,x2,y2,x3,y3) {
    this.lienzo.beginPath();
    this.lienzo.moveTo(x1,y1);
	this.lienzo.lineTo(x2,y2);
	this.lienzo.lineTo(x3,y3);	
    this.lienzo.fill();
  },
  cuadrilatero: function(x1,y1,x2,y2,x3,y3,x4,y4) {
    this.lienzo.beginPath();
    this.lienzo.moveTo(x1,y1);
	this.lienzo.lineTo(x2,y2);
	this.lienzo.lineTo(x3,y3);
	this.lienzo.lineTo(x4,y4);		
    this.lienzo.fill();
  }
  
};

//********************************************************


var mouse = {
  inicioMouse: function() {
    this.canvasMinX = $("#lienzo1").offset().left;
    this.canvasMaxX = this.canvasMinX + papel.retornarAncho();
    this.canvasMinY= $("#lienzo1").position().top;
    this.canvasMaxY = this.canvasMinY + papel.retornarAlto();
    $("#lienzo1").mousedown(this.presionMouse);
	$("#lienzo1").mouseup(this.soltarMouse);
	this.botones=new Array();
  },
  presionMouse: function (evt) {
    mouse.canvasMinX = $("#lienzo1").offset().left;
    mouse.canvasMaxX = mouse.canvasMinX + papel.retornarAncho();
    mouse.canvasMinY= $("#lienzo1").position().top;
    mouse.canvasMaxY = mouse.canvasMinY + papel.retornarAlto();
  if (evt.pageX > mouse.canvasMinX && evt.pageX < mouse.canvasMaxX &&
      evt.pageY > mouse.canvasMinY && evt.pageY < mouse.canvasMaxY) {
     x = evt.pageX - mouse.canvasMinX;  
     y = evt.pageY - mouse.canvasMinY;  
	 for(var i=0;i<mouse.botones.length;i++) {
	   if (mouse.botones[i].dentro(x,y))
	     mouse.botones[i].presionar();
	 }
   }
  },
  soltarMouse: function(evt) {
    mouse.canvasMinX = $("#lienzo1").offset().left;
    mouse.canvasMaxX = mouse.canvasMinX + papel.retornarAncho();
    mouse.canvasMinY= $("#lienzo1").position().top;
    mouse.canvasMaxY = mouse.canvasMinY + papel.retornarAlto();  
     x = evt.pageX - mouse.canvasMinX;  
     y = evt.pageY - mouse.canvasMinY;  
	 for(var i=0;i<mouse.botones.length;i++) {
	   if (mouse.botones[i].estaPresionado()) {
	     mouse.botones[i].soltar();
		 mouse.botones[i].informar();
	  }	 
	 }
  },
  presionado: function(boton) {
    this.botones.push(boton);
  }
};



//Clase Boton **********************************************
function Boton(x,y,ancho,alto,lienzo,objeto,capturaClic) {
  this.objeto=objeto;
  this.estado=true;
  this.capturaClic=capturaClic;
  this.x=x;
  this.y=y;
  this.ancho=ancho;
  this.alto=alto;
  this.lienzo=lienzo;
  this.colorTexto=new Array(3);
  this.colorTexto[0]=0;
  this.colorTexto[1]=0;
  this.colorTexto[2]=0;
  this.color=new Array(3);
  this.color[0]=212;
  this.color[1]=208;
  this.color[2]=200;
  this.texto='';
  this.presionado=false;
  mouse.presionado(this);
  this.seleccionado=false;
}

Boton.prototype.graficar=function() {
  if (this.estado)
  {
      if (this.seleccionado)
	    this.lienzo.fijarColor(255,255,0);
	  else
	    this.lienzo.fijarColor(this.color[0],this.color[1],this.color[2]);
	  this.lienzo.rectanguloRelleno(this.x,this.y,this.ancho,this.alto);
	  this.lienzo.fijarColor(this.colorTexto[0],this.colorTexto[1],this.colorTexto[2]);
	  this.lienzo.fijarCentrado("center");
	  this.lienzo.fijarTexto(this.x+this.ancho/2,this.y+this.alto/2+8,this.texto); 
	  this.sombra();
  } else {
  	  this.lienzo.borrar(this.x,this.y,this.ancho,this.alto);
  }
  
}

Boton.prototype.sombra=function() {
  var cr=this.color[0]+30;
  if (cr>255) cr=255;
  var cv=this.color[1]+30;
  if (cv>255) cv=255;
  var ca=this.color[2]+30;
  if (ca>255) ca=255;
  this.lienzo.fijarColorLinea(cr,cv,ca);
  this.lienzo.linea(this.x,this.y+1,this.x+this.ancho,this.y+1);
  this.lienzo.linea(this.x+1,this.y,this.x+1,this.y+this.alto);  
  cr=this.color[0]-50;
  if (cr<0) cr=0;
  cv=this.color[1]-50;
  if (cv<0) cv=0;
  ca=this.color[2]-50;
  if (ca<0) ca=0;
  this.lienzo.fijarColorLinea(cr,cv,ca);
  this.lienzo.linea(this.x,this.y+this.alto-1,this.x+this.ancho-1,this.y+this.alto-1);
  this.lienzo.linea(this.x+this.ancho-1,this.y,this.x+this.ancho-1,this.y+this.alto-1);  
}

Boton.prototype.dentro=function(x,y) {
   if (this.estado && x>this.x && y>this.y && x<this.x+this.ancho && y<this.y+this.alto) {
     return true;
   } else
     return false;
}

Boton.prototype.fijarColor= function(rojo,verde,azul) {    
  this.color[0]=rojo;
  this.color[1]=verde;
  this.color[2]=azul;
  this.graficar();
}

Boton.prototype.fijarTexto = function(texto) {
  this.texto=texto;
  this.graficar();
}

Boton.prototype.fijarColorTexto = function(rojo,verde,azul) {
  this.colorTexto[0]=rojo;
  this.colorTexto[1]=verde;
  this.colorTexto[2]=azul;
  this.graficar();
}

Boton.prototype.graficarHundido = function() {
  if (this.estado) {
	  this.lienzo.fijarColor(150,150,150);
	  this.lienzo.rectanguloRelleno(this.x,this.y,this.ancho-1,this.alto-1);
	  this.lienzo.fijarColor(this.colorTexto[0],this.colorTexto[1],this.colorTexto[2]);
	  this.lienzo.fijarCentrado("center");  
	  this.lienzo.fijarTexto(this.x+this.ancho/2,this.y+this.alto/2+8,this.texto); 
	}  
}

Boton.prototype.estaPresionado = function() {
  return this.presionado;
}

Boton.prototype.soltar= function() {
  this.presionado=false;
  this.graficar();
}

Boton.prototype.presionar = function() {
  this.presionado=true;
  this.graficarHundido();
}

Boton.prototype.informar = function() {
  this.capturaClic(this.objeto,this);
}

Boton.prototype.desactivar = function() {
  this.estado=false;
  this.graficar();
}

Boton.prototype.activar = function() {
  this.estado=true;
  this.graficar();
}

Boton.prototype.seleccionar = function() {
  this.seleccionado=true;
  this.graficar();
}

Boton.prototype.noSeleccionar = function() {
  this.seleccionado=false;
  this.graficar();
}

//********************************************************

//Clase Etiqueta **********************************************
function Etiqueta(x,y,ancho,alto,lienzo) {
  this.x=x;
  this.y=y;
  this.ancho=ancho;
  this.alto=alto;
  this.lienzo=lienzo;
  this.colorTexto=new Array(3);
  this.colorTexto[0]=0;
  this.colorTexto[1]=0;
  this.colorTexto[2]=0;
  this.color=new Array(3);
  this.color[0]=230;
  this.color[1]=230;
  this.color[2]=230;
  this.texto='';
}

Etiqueta.prototype.graficar=function() {
  this.lienzo.fijarColor(this.color[0],this.color[1],this.color[2]);
  this.lienzo.rectanguloRelleno(this.x,this.y,this.ancho,this.alto);
  this.lienzo.fijarColor(this.colorTexto[0],this.colorTexto[1],this.colorTexto[2]);
  this.lienzo.fijarCentrado("center");
  this.lienzo.fijarTexto(this.x+this.ancho/2,this.y+this.alto/2+8,this.texto); 
  this.sombra();
}

Etiqueta.prototype.sombra=function() {
  var cr=this.color[0]+30;
  if (cr>255) cr=255;
  var cv=this.color[1]+30;
  if (cv>255) cv=255;
  var ca=this.color[2]+30;
  if (ca>255) ca=255;
  this.lienzo.fijarColorLinea(cr,cv,ca);
  this.lienzo.linea(this.x,this.y,this.x+this.ancho,this.y);
  this.lienzo.linea(this.x,this.y,this.x,this.y+this.alto);  
  cr=this.color[0]-50;
  if (cr<0) cr=0;
  cv=this.color[1]-50;
  if (cv<0) cv=0;
  ca=this.color[2]-50;
  if (ca<0) ca=0;
  this.lienzo.fijarColorLinea(cr,cv,ca);
  this.lienzo.linea(this.x,this.y+this.alto-1,this.x+this.ancho-1,this.y+this.alto-1);
  this.lienzo.linea(this.x+this.ancho-1,this.y,this.x+this.ancho-1,this.y+this.alto-1);  
}

Etiqueta.prototype.fijarColor= function(rojo,verde,azul) {    
  this.color[0]=rojo;
  this.color[1]=verde;
  this.color[2]=azul;
  this.graficar();
}

Etiqueta.prototype.fijarTexto = function(texto) {
  this.texto=texto;
  this.graficar();
}

Etiqueta.prototype.fijarColorTexto = function(rojo,verde,azul) {
  this.colorTexto[0]=rojo;
  this.colorTexto[1]=verde;
  this.colorTexto[2]=azul;
  this.graficar();
}


//********************************************************


//Clase Casilla **********************************************
function Casilla(x,y,ancho,alto,lienzo) {
  this.x=x;
  this.y=y;
  this.ancho=ancho;
  this.alto=alto;
  this.lienzo=lienzo;
  this.color=new Array(3);
  this.color[0]=212;
  this.color[1]=208;
  this.color[2]=200;
  this.colorOcu=new Array(3);
 // this.colorOcu[0]=212;
 // this.colorOcu[1]=208;
 // this.colorOcu[2]=200;
 
  this.valor=0;
  this.gravedad=0;
  this.tempo=0;
}

Casilla.prototype.graficar=function() {
  if (this.valor==0)
    this.lienzo.fijarColor(this.color[0],this.color[1],this.color[2]);
  if (this.valor==1) //ficha actual
    this.lienzo.fijarColor(this.colorOcu[0],this.colorOcu[1],this.colorOcu[2]);	
  if (this.valor==10) //ocupado
    this.lienzo.fijarColor(this.colorOcu[0],this.colorOcu[1],this.colorOcu[2]);		
  this.lienzo.rectanguloRelleno(this.x,this.y,this.ancho,this.alto);
  this.sombra();
}

Casilla.prototype.sombra=function() {
  var cr=this.color[0]+30;
  if (cr>255) cr=255;
  var cv=this.color[1]+30;
  if (cv>255) cv=255;
  var ca=this.color[2]+30;
  if (ca>255) ca=255;
  this.lienzo.fijarColorLinea(cr,cv,ca);
  this.lienzo.linea(this.x,this.y+1,this.x+this.ancho,this.y+1);
  this.lienzo.linea(this.x+1,this.y,this.x+1,this.y+this.alto);  
  cr=this.color[0]-50;
  if (cr<0) cr=0;
  cv=this.color[1]-50;
  if (cv<0) cv=0;
  ca=this.color[2]-50;
  if (ca<0) ca=0;
  this.lienzo.fijarColorLinea(cr,cv,ca);
  this.lienzo.linea(this.x,this.y+this.alto-1,this.x+this.ancho-1,this.y+this.alto-1);
  this.lienzo.linea(this.x+this.ancho-1,this.y,this.x+this.ancho-1,this.y+this.alto-1);  
}


Casilla.prototype.fijarColor= function(rojo,verde,azul) {    
  this.color[0]=rojo;
  this.color[1]=verde;
  this.color[2]=azul;
  this.graficar();
}

Casilla.prototype.fijarColorOcupado= function(rojo,verde,azul) {    
  this.colorOcu[0]=rojo;
  this.colorOcu[1]=verde;
  this.colorOcu[2]=azul;
  this.graficar();
}

Casilla.prototype.activar = function() {
  this.valor=1;
  this.graficar();
}

Casilla.prototype.fijar = function(valor) {
  this.valor=valor;
  this.graficar();
}


//***************************************************


var ale=-1;

function fichaActual() {
  return ale;
}

function retornarFicha() {
  ficha1=[[1,1],[1,1]];
  ficha2=[[1],[9],[1],[1]];
  ficha3=[[1,0],[9,0],[1,1]];
  ficha4=[[0,1],[0,9],[1,1]];  
  ficha5=[[0,1],[9,1],[1,0]];
  ficha6=[[1,0],[9,1],[0,1]];
  ficha7=[[1,0],[9,1],[1,0]];
  ale=aleatorio(1,7);
  switch (ale) {
    case 1:return ficha1;break;
    case 2:return ficha2;break;
    case 3:return ficha3;break;
    case 4:return ficha4;break;
    case 5:return ficha5;break;
    case 6:return ficha6;break;
    case 7:return ficha7;break;
  }
}

function retornarColor() {
  color1=[197,41,166];
  color2=[234,46,84];
  color3=[240,121,25];
  color4=[41,92,210];
  color5=[254,198,40];
  color6=[89,177,1];
  color7=[255,194,36];
  color8=[9,174,247];
  
  var x=aleatorio(1,3);
  switch (x) {
    case 1:return color1;break;
    case 2:return color2;break;
    case 3:return color3;break;
    case 4:return color4;break;
    case 5:return color5;break;
    case 6:return color6;break;
    case 7:return color7;break;
    case 8:return color8;break;
	
  }  
}


//********************************************************************************

function Tetris() {
  this.col=null;
  this.tope=false;
  this.casillas=new Array(20);
  this.juegoActivo=false;
  var x=0;
  var y=0;
  for(var f=0;f<20;f++) {
    this.casillas[f]=new Array(10);
    for(var c=0;c<10;c++) {
	  this.casillas[f][c]=new Casilla(x,y,25,25,papel);
	  this.casillas[f][c].fijarColor(43,43,43);
	  x+=25;
	}
	x=0;
	y+=25;
  } 
  this.etiqueta1=new Etiqueta(300,50,70,30,papel);
  this.etiqueta1.fijarTexto("0"); 

  
  Tetris.prototype.inicializarPartida = function() {
    tetris.juegoActivo=true;
	tetris.etiqueta1.texto=0;
    tetris.etiqueta1.graficar();
    for(var f=0;f<20;f++) {
      for(var c=0;c<10;c++) {
        tetris.casillas[f][c].fijar(0);
	  }
	}    
	tetris.eliminarGravedad();
  }
  
  Tetris.prototype.fichaInicial=function() {
     tetris.col=retornarColor();
     var ficha=retornarFicha();
	 for(var f=0;f<ficha.length;f++) {
	   for(var c=0;c<ficha[f].length;c++) {
	     if (tetris.casillas[f][c+4].valor==10) {
		   tetris.juegoActivo=false;
	       clearInterval(ini);  	   
		   return;
		 }
		 tetris.casillas[f][c+4].fijarColorOcupado(tetris.col[0],tetris.col[1],tetris.col[2]);
	     if (ficha[f][c]==1 || ficha[f][c]==9)
	       tetris.casillas[f][c+4].activar();
	     if (ficha[f][c]==9)
		 {
           tetris.casillas[f][c+4].gravedad=9; 		 
		 }  
	   }
	 }
  }  
 
  Tetris.prototype.vaciarFila=function(fila) {
	 for(var f=fila;f>0;f--) 
	   for(var c=0;c<10;c++) 
	   {
	     tetris.casillas[f][c].valor=tetris.casillas[f-1][c].valor;
		 tetris.casillas[f][c].graficar();
	   }
 
  }
 
  Tetris.prototype.verificarLineas = function() {
     var cantFilas=0;
	 for(var f=19;f>=0;f--) {
	   var lleno=0;
	   for(var c=0;c<10;c++) {
		 if (tetris.casillas[f][c].valor==10)
		   lleno++;
	   }
	   if (lleno==10) {
	      tetris.vaciarFila(f);
		  f++;
		  cantFilas++;
	   }	  
	 }  
	 var total=parseInt(tetris.etiqueta1.texto)+cantFilas;
	 
     var x=$("#nivel");
	 var rango=1;
	 for(var k=1;k<=10;k++) {
	   if (total>=rango && total<=rango+5) {
         x.val(k)
	   }	 
	   rango+=5;
	 }
	
     if (ini!=0) 
       clearInterval(ini);
  
    ini=setInterval(tetris.accion,retornarNivel()); 
	
	 tetris.etiqueta1.texto=parseInt(tetris.etiqueta1.texto)+cantFilas;
	 tetris.etiqueta1.graficar();
  }
 
  Tetris.prototype.eliminarGravedad=function() {
    for(var f=0;f<20;f++) 
      for(var c=0;c<10;c++) 
	    if (tetris.casillas[f][c].gravedad==9)
		  tetris.casillas[f][c].gravedad=0;
  }
  
  Tetris.prototype.accion=function() {
    if (tetris.tope)
	{
	  tetris.eliminarGravedad();
	  tetris.congelarFicha();
	  tetris.tope=false;
	  tetris.verificarLineas();
	  tetris.fichaInicial();
	  if (!tetris.juegoActivo)
	    alert('Perdio');
	}  
	else 
	  tetris.descenderFicha();
  }

  Tetris.prototype.congelarFicha = function() {
    for(var f=0;f<20;f++) {
      for(var c=0;c<10;c++) {
	    if (tetris.casillas[f][c].valor==1)
	      tetris.casillas[f][c].fijar(10);
	  }
	}  

  }
  
  Tetris.prototype.todosPuedenBajar = function() {
	 for(var f=18;f>=0;f--) {
	   for(var c=0;c<10;c++) {
		 if (tetris.casillas[f][c].valor==1)
		 {
		   if (tetris.casillas[f+1][c].valor==0 || tetris.casillas[f+1][c].valor==1)
		   {
		   }
		   else
		     return false;
		 }
	  }	  
	}
    for(var c=0;c<10;c++) 
 	  if (tetris.casillas[19][c].valor==1)
	  {
        return false;
      }
	return true;
  }
  
  Tetris.prototype.descenderFicha=function() {
     if (tetris.todosPuedenBajar()) {
		 tetris.tope=true; 
		 for(var f=18;f>=0;f--) {
		   for(var c=0;c<10;c++) {
			 if (tetris.casillas[f][c].valor==1 && tetris.casillas[f+1][c].valor==0)
			 {
			   tetris.casillas[f][c].valor=0;
			   tetris.casillas[f][c].graficar();
			   tetris.casillas[f+1][c].valor=1;
			   tetris.casillas[f+1][c].fijarColorOcupado(tetris.col[0],tetris.col[1],tetris.col[2]);
			   tetris.casillas[f+1][c].graficar();
			   tetris.tope=false;
			 }
		  }	  
		}
		tetris.descenderGravedad();
	  }
      else
        tetris.tope=true;	  
  }
  
  Tetris.prototype.descenderGravedad=function() {
  for(var f=0;f<20;f++) 
    for(var c=0;c<10;c++) 
	  if (tetris.casillas[f][c].gravedad==9) {
	    tetris.casillas[f][c].gravedad=0; 
	    tetris.casillas[f+1][c].gravedad=9;
		return;
	  }
  }

  Tetris.prototype.gravedadDerecha=function() {
  for(var f=0;f<20;f++) 
    for(var c=0;c<10;c++) 
	  if (tetris.casillas[f][c].gravedad==9) {
	    tetris.casillas[f][c].gravedad=0; 
	    tetris.casillas[f][c+1].gravedad=9;
		return;
	  }
  }

  Tetris.prototype.gravedadIzquierda=function() {
  for(var f=0;f<20;f++) 
    for(var c=0;c<10;c++) 
	  if (tetris.casillas[f][c].gravedad==9) {
	    tetris.casillas[f][c].gravedad=0; 
	    tetris.casillas[f][c-1].gravedad=9;
		return;
	  }
  }
  
  
  Tetris.prototype.todosPuedenDerecha=function() {
	 for(var f=19;f>=0;f--) 
	   for(var c=8;c>=0;c--) 
		 if (tetris.casillas[f][c].valor==1) {
		   if (tetris.casillas[f][c+1].valor==0 || tetris.casillas[f][c+1].valor==1)
		   {
		   }
		   else
		     return false;		 
		 }
      for(var f=0;f<20;f++) 
 	  if (tetris.casillas[f][9].valor==1)
	  {
        return false;
      }
	 return true;	
  }
  
  Tetris.prototype.moverDerecha=function() {
     if (tetris.todosPuedenDerecha())
		 if (!tetris.tope) {
			 for(var f=19;f>=0;f--) {
			   for(var c=8;c>=0;c--) {
				 if (tetris.casillas[f][c].valor==1 && tetris.casillas[f][c+1].valor==0)
				 {
				   tetris.casillas[f][c].valor=0;
				   tetris.casillas[f][c].graficar();
				   tetris.casillas[f][c+1].valor=1;
			       tetris.casillas[f][c+1].fijarColorOcupado(tetris.col[0],tetris.col[1],tetris.col[2]);		   
				   tetris.casillas[f][c+1].graficar();
				 }
			  }
			}
			tetris.gravedadDerecha();
		}	
  }   

  Tetris.prototype.todosPuedenIzquierda=function() {
	 for(var f=19;f>=0;f--) 
	   for(var c=1;c<10;c++) 
		 if (tetris.casillas[f][c].valor==1) {
		   if (tetris.casillas[f][c-1].valor==0 || tetris.casillas[f][c-1].valor==1)
		   {
		   }
		   else
		     return false;		 
		 }
      for(var f=0;f<20;f++) 
 	    if (tetris.casillas[f][0].valor==1)
          return false;
	 return true;	  
  }
  
  Tetris.prototype.moverIzquierda=function() {
     if (tetris.todosPuedenIzquierda())
		 if (!tetris.tope) {
			 for(var f=19;f>=0;f--) {
			   for(var c=1;c<10;c++) {
				 if (tetris.casillas[f][c].valor==1 && tetris.casillas[f][c-1].valor==0)
				 {
				   tetris.casillas[f][c].valor=0;
				   tetris.casillas[f][c].graficar();
				   tetris.casillas[f][c-1].valor=1;
			       tetris.casillas[f][c-1].fijarColorOcupado(tetris.col[0],tetris.col[1],tetris.col[2]);		   		   
				   tetris.casillas[f][c-1].graficar();
				 }
			  }
			}
            tetris.gravedadIzquierda();			
		}
  }   
  
  Tetris.prototype.maximoDescenso=function() {
     while (tetris.tope==false)
	 {
		 if (tetris.todosPuedenBajar()) {
			 tetris.tope=true; 
			 for(var f=18;f>=0;f--) {
			   for(var c=0;c<10;c++) {
				 if (tetris.casillas[f][c].valor==1 && tetris.casillas[f+1][c].valor==0)
				 {
				   tetris.casillas[f][c].valor=0;
				   tetris.casillas[f][c].graficar();
				   tetris.casillas[f+1][c].valor=1;
				   tetris.casillas[f+1][c].fijarColorOcupado(tetris.col[0],tetris.col[1],tetris.col[2]);		   
				   tetris.casillas[f+1][c].graficar();
				   tetris.tope=false;
				 }
			  }	  
			}
		  }
		  else
			tetris.tope=true;	    
	}
  }
  
  Tetris.prototype.rotarDerecha=function() {
    var fila,columna;
	var enco=false;
    for(var f=0;f<20;f++) 
      for(var c=0;c<10;c++) 
        if (tetris.casillas[f][c].gravedad==9) {
	      fila=f;
		  columna=c;
		  enco=true;
		//  alert(fila+'-'+columna);
	    }
    if (!enco) return;
	if ((fichaActual()==2 && columna>=2 && columna<=7 && fila>=2 && fila<=16) ||
	    (fichaActual()!=2 && columna>=1 && columna<=8 && fila>=2 && fila<=16)){
		tetris.casillas[fila][columna].tempo=1;
		if (tetris.casillas[fila][columna+1].valor==1)
		   if (tetris.casillas[fila-1][columna].valor==10)
		     return;
		   else	 
		     tetris.casillas[fila-1][columna].tempo=1;
		if (tetris.casillas[fila+1][columna+1].valor==1)
		  if (tetris.casillas[fila-1][columna+1].valor==10)
		    return; 
		  else	
		    tetris.casillas[fila-1][columna+1].tempo=1;
		if (tetris.casillas[fila-1][columna].valor==1)
		  if (tetris.casillas[fila][columna-1].valor==10)
		    return;
		  else	
		    tetris.casillas[fila][columna-1].tempo=1;

		if (tetris.casillas[fila-1][columna+1].valor==1)
		  if (tetris.casillas[fila-1][columna-1].valor==10)
		    return;
		  else	
		    tetris.casillas[fila-1][columna-1].tempo=1;
		if (tetris.casillas[fila][columna-1].valor==1)
		  if (tetris.casillas[fila+1][columna].valor==10)
		    return ;
		  else
		    tetris.casillas[fila+1][columna].tempo=1;

		if (tetris.casillas[fila-1][columna-1].valor==1)
		  if (tetris.casillas[fila+1][columna-1].valor==10)
		    return;
		  else
		    tetris.casillas[fila+1][columna-1].tempo=1;
		if (tetris.casillas[fila+1][columna].valor==1)
		  if (tetris.casillas[fila][columna+1].valor==10)
		    return;
		  else	
		    tetris.casillas[fila][columna+1].tempo=1;

		if (tetris.casillas[fila+1][columna-1].valor==1)
		  if (tetris.casillas[fila+1][columna+1].valor==10)
		    return;
		  else
		    tetris.casillas[fila+1][columna+1].tempo=1;

		if (fila+2<=19 && tetris.casillas[fila+2][columna].valor==1)
		  if (tetris.casillas[fila][columna+2].valor==10)
		    return;
		  else	
		    tetris.casillas[fila][columna+2].tempo=1;
		if (columna+2<=9 && tetris.casillas[fila][columna+2].valor==1)
		  if (tetris.casillas[fila-2][columna].valor==10)
		    return;
		  else	
		    tetris.casillas[fila-2][columna].tempo=1;
		if (fila-2>=0 && tetris.casillas[fila-2][columna].valor==1)
		  if (tetris.casillas[fila][columna-2].valor==10)
		    return;
		  else	
		    tetris.casillas[fila][columna-2].tempo=1;
		if (columna-2>=0 && tetris.casillas[fila][columna-2].valor==1)
		  if (tetris.casillas[fila+2][columna].valor==10)
		    return;
		  else	
		    tetris.casillas[fila+2][columna].tempo=1;

		  
		for(var f=0;f<20;f++) 
		  for(var c=0;c<10;c++) {
			if (tetris.casillas[f][c].valor==1) 
			  tetris.casillas[f][c].valor=0;
			if (tetris.casillas[f][c].tempo==1) 
			{
			  tetris.casillas[f][c].valor=1;
              tetris.casillas[f][c].fijarColorOcupado(tetris.col[0],tetris.col[1],tetris.col[2]);		   
			}  
			tetris.casillas[f][c].tempo=0;		  
			tetris.casillas[f][c].graficar();
		  }  
    }
  }
  
}

  Tetris.prototype.limpiarTemporal=function() {
	for(var f=0;f<20;f++) 
	  for(var c=0;c<10;c++) {
		if (tetris.casillas[f][c].tempo==1) 
  		  tetris.casillas[f][c].tempo=0;		  
	  }  
  
  }


//********************************************************

var teclaDerecha=false;
var teclaIzquierda=false;
var teclaArriba=false;
var teclado = {
  inicioTeclado: function() {
    $(document).keydown(this.onKeyDown);
    $(document).keyup(this.onKeyUp)
  },
  onKeyDown: function (evt) {
    if (evt.keyCode==39) { //Derecha
	  tetris.moverDerecha();
	  teclaDerecha=true;
	}
    if (evt.keyCode==37) { //Izquierda
	  tetris.moverIzquierda();
	  teclaIzquierda=true;
	}	
	if (evt.keyCode==40) {  //Flecha hacia abajo
	  tetris.maximoDescenso();
	}
	if (evt.keyCode==38 && !teclaArriba) { //Flecha arriba - rotamos a derecha
	  teclaArriba=true;
	  tetris.rotarDerecha();
	  tetris.limpiarTemporal();
	}
  },
  onKeyUp: function(evt) {
    if (evt.keyCode==39) { //Derecha
	  teclaDerecha=false;
    }  
    if (evt.keyCode==37) { //Izquierda
	  teclaIzquierda=false;
    }  	
	if (evt.keyCode==38) {
	  teclaArriba=false;
	}
  }
};



function retornarNivel() {
  var nivel=parseInt($("#nivel").val());
  switch (nivel) {
    case 1:return 500;
	case 2:return 480;
    case 3:return 450;
	case 4:return 400;
    case 5:return 350;
	case 6:return 330;
    case 7:return 300;
	case 8:return 250;
    case 9:return 200;
    case 10:return 150;
  }
}


var ini=0;
function presionInicio() {
  if (ini!=0) 
    clearInterval(ini);
  tetris.inicializarPartida();
  tetris.limpiarTemporal();
  tetris.fichaInicial();
   ini=setInterval(tetris.accion,retornarNivel()); 
   
}


var tetris;
var x=$(document).ready(inicializarEventos);
var botonInicio;
function inicializarEventos() {
   
  var canvas = document.getElementById("lienzo1");
  var li=papel.retornarPapel("lienzo1");
  mouse.inicioMouse();
  teclado.inicioTeclado();
  papel.fijarColor(0,0,0);
  papel.rectanguloRelleno(0,0,canvas.width,canvas.height);
  tetris=new Tetris();

   botonInicio=new Boton(300,10,70,30,papel,this,presionInicio);
   botonInicio.fijarTexto("Iniciar");
  var x=$("#nivel");
  for(var i=1;i<=10;i++)
    x.append('<option>'+i+'</option>');
  x.val(1);
   
}

