<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Supervisión Escolar No. 48 de Bachillerato General</title>
	<link rel="icon"  href="../Imagenes/LogoFondo/Logo2.png">
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"><!--Establece el ancho y zoom de la pagina en cualquier dispositivo-->
	<link rel="stylesheet" type="text/css" href="../Css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Css/Separador.css">
	<link rel="stylesheet" type="text/css" href="../Css/FondoO.css">
	<link rel="stylesheet" type="text/css" href="../Css/Pie.css">

	<?php

session_start();//En todas las paginas donde se va a iniciar se colocara
 $varsesion=$_SESSION['usuario'];
 $clavenueva=$_SESSION['clave'];
 $usuari = htmlspecialchars($varsesion); 
 $clav = htmlspecialchars($clavenueva); 
 if($varsesion == NULL||$varsesion=''){
 	echo"<script language='javascript'>alert('No ha iniciado sesión');</script>;";
		echo"<script language='javascript'>window.location='Clave.html'</script>;";
 	die();//Finaliza todo el proceso y ya no muestra nada
 }
	?>
 </head>
	 <body>	
	<!--MENU-->
		<header>
		<nav class="navbar navbar-inverse navbar-fixed-top"> <!--Determinamos el color de la barra de menu-->
				<div class="container-fluid"> <!--Determinamos que nuestro menu ocupara todo el ancho de nuestro monitor-->
					<div class="navbar-header"><!--Coloca el menu en una misma fila-->
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#BotonesMenu"><!--Realizamos el efecto toogle para el menu y esta se esconda-->
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						  <img src="../Imagenes/LogoFondo/Logo3.png" class="img-responsive" class="navbar-brand" width="100" height="50">
					</div>
					<div class="collapse navbar-collapse" id="BotonesMenu"><!--Es necesario utilizar el ID para que el efecto toogle funcione-->
						  <ul class="nav navbar-nav">
							<li><a href="../index.html">Inicio</a></li>
								<li class="dropdown"><!--Si este demeniza mas contenido podremos agregar submenus-->
								  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Conocenos <span class="caret"></span></a>
									  <ul class="dropdown-menu">
										<li><a href="Misión.html">Misión</a></li>
										<li><a href="Visión.html">Visión</a></li>
										<li><a href="Valores.html">Valores</a></li>
									  </ul>
								</li>
								<li class="dropdown"><!--Si este demeniza mas contenido podremos agregar submenus-->
									  <a class="dropdown-toggle" data-toggle="dropdown" href="Zona.html">Zona 048 BG <span class="caret"></span></a>
										  <ul class="dropdown-menu">
											<a href="Zona.html" id="se"  onclick="visualizarse();" class="list-group-item">Supervision Escolar </a>
											<a href="Zona.html" id="prepa55"  onclick="visualizar55();" class="list-group-item">EPO 55</a>
											<a href="Zona.html" id="prepa74"  onclick="visualizar74();" class="list-group-item">EPO 74</a>
											<a href="Zona.html" id="prepa122" onclick="visualizar122();" class="list-group-item">EPO 122</a>
											<a href="Zona.html" id="prepa124" onclick="visualizar124();" class="list-group-item">EPO 124</a>
											<a href="Zona.html" id="prepa161" onclick="visualizar161();" class="list-group-item">EPO 161</a>
											<a href="Zona.html" id="prepa161" onclick="visualizar224();" class="list-group-item">EPO 224</a>
											<a href="Zona.html" id="prepa310" onclick="visualizar310();" class="list-group-item">EPO 310</a>
											<a href="Zona.html" id="prepanet" onclick="visualizarnet();" class="list-group-item">NetIxtapaluca</a>
										  </ul>
								</li>
							<li><a href="Contactanos.html">Contactanos</a></li>
							<li><a href="../Avisos/index.html">Avisos</a></li>
						  </ul>
						  <ul class="nav navbar-nav navbar-right">
							<li><a href="Clave.html">Office 365</a></li>
							
						  </ul>
					</div>
				</div>
		</nav>
		<section class="jumbotron">
		<div class="container">
			<center><h1><strong><font face="Arial" size=6 color="White">Bienvenido</font></strong></h1></center>
						<center><h4><strong><font face="Arial" size=4 color="White"> Esperamos que las capacitaciones de Microsoft Office 365 les sean de gran ayuda. </font></strong></h4></center>
		</div>
	</section>
	<style type="text/css">
		body {
			background-image: url('../Imagenes/LogoFondo/Fondo3.png');
		}
		div#precarga{
			width: 100px;
			height: 100px;
			margin: 0px;
			padding: 0px;
			background-image: url('../Imagenes/LogoFondo/Invierno.png');
		}
	</style>
	<script type="text/javascript">
		//Lista de imágenes para el cambio automático
		var fondos = ['../Imagenes/LogoFondo/Primavera.png', '../Imagenes/LogoFondo/Fondo3.png', '../Imagenes/LogoFondo/Invierno.png'];
		var fondo_actual = 0;
		// Aqui hacemos la rotación
		var CambiarFondo = function(){
		if (fondo_actual == fondos.length) {
		fondo_actual = 0;
		}
		var precargar =fondo_actual++;
		var precargar2 = precargar+2;
		// Cambiamos el background del body
		document.body.style.backgroundImage = 'url('+ fondos[precargar]+ ')';
		// Cargamos en el div no visible "#precarga" la imagen siguiente que se cargará en el body
		// Para ya tenerla en la cache, comenzamos con la imagen 3, ya que la 1 y 2 las tenemos en el css IMPORTANTE!!
		document.getElementById('precarga').style.backgroundImage =  'url('+fondos[precargar2]+ ')';
		}
		//Aqui defines el tiempo en milisegundos e  inicias la función con setInterval para que se repita indefinidamente
		window.setInterval(CambiarFondo, 10000); 
	</script>
	</header>
		<section class="main container"><!--Apartir de aqui empezaremos a colocar recuadros de la paqueteria de office -->
			<div class="row">
			
			<!--Pendiente-->
			
				<!--<aside class="col-md-3 hidden-xs hidden-sm">
						<h4>Asesorias de:</h4>
						<div class="list-group">
							<a href="#" class="list-group-item active">One Note</a>
							<a href="#" class="list-group-item">Excel</a>
							<a href="#" class="list-group-item">Sway</a>
							<a href="#" class="list-group-item">Delve</a>
							<a href="#" class="list-group-item">Skype</a>
							<a href="#" class="list-group-item">OneDrive</a>
							<a href="#" class="list-group-item">Calendarios</a>
							<a href="#" class="list-group-item">Contactos</a>
							<a href="#" class="list-group-item">Tareas</a>
						</div>

						<h4>Proposito de este apartado:</h4>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Capacitación de herramientas escenciales de Officce 365 Educativo</h4>
							<p class="list-group-item-text">Esperamos que los tutoriales le sea de gran ayuda, ¡Mucha suerte!</p>
						</a>
				</aside>-->
				<div class="container"><!--Colocamos un contenedor con 3 imagenes x 3 imagenes -->
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/Office1.png" onmouseover="this.src='../Imagenes/Gif/Office.gif';" onmouseout="this.src='../Imagenes/Office/Office1.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/Microsoft Offcie 365 - Introducción.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/OneDrive.png" onmouseover="this.src='../Imagenes/Gif/OneDrive.gif';" onmouseout="this.src='../Imagenes/Office/OneDrive.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/One drive.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/Calendario.png" onmouseover="this.src='../Imagenes/Gif/Calendario.gif';" onmouseout="this.src='../Imagenes/Office/Calendario.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/Calendario.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
				</div>
				<br>
				<div class="container">
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/Tareas.png" onmouseover="this.src='../Imagenes/Gif/Tareas.gif';" onmouseout="this.src='../Imagenes/Office/Tareas.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/Tareas.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/Contactos.png" onmouseover="this.src='../Imagenes/Gif/Contacto.gif';" onmouseout="this.src='../Imagenes/Office/Contactos.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/Contactos.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/Excel.png" onmouseover="this.src='../Imagenes/Gif/Excel.gif';" onmouseout="this.src='../Imagenes/Office/Excel.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/Excel.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
				</div>
				<br>
				<div class="container">
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/OneNote1.png" onmouseover="this.src='../Imagenes/Gif/OneNote.gif';" onmouseout="this.src='../Imagenes/Office/OneNote1.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/OneNote.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/Sway.png" onmouseover="this.src='../Imagenes/Gif/Sway.gif';" onmouseout="this.src='../Imagenes/Office/Sway.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/Sway.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/Delve.png" onmouseover="this.src='../Imagenes/Gif/Delve.gif';" onmouseout="this.src='../Imagenes/Office/Delve.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/Delve.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
				</div>
				<br>
				<div class="container">
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/Skype.png" onmouseover="this.src='../Imagenes/Gif/Skype.gif';" onmouseout="this.src='../Imagenes/Office/Skype.png';"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/Skype.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="../Imagenes/Office/Prezi.jpg"/>
						<center><button class="btn btn-succes"><a href="../Presentaciones/Prezi.pptx"><font size="Arial" color="Black"><strong>Descargar Presentación</strong></font></a></button></center>
					</div>
				</div>

			</div>
				
		</section>
		<br><br>
		<a class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" href="extracursos/salir.php?idbitacora=<?php echo $usuari; ?>" class="button">Cerrar sesión</a>
		<br>
		<!--Fin del contenido central-->
		<!--Inicio del pie de la pagina-->
				<footer>
					<div class="container"><!--Apartir de aqui colocaremos enlaces en dos columnas-->
								<div class="row">
										<div class="col-md-5">
										<br>
											<img src="../Imagenes/LogoFondo/Piensa.png" class="img-responsive" width="100" height="100">
										</div>
										<div class="col-md-7">
											<strong><br>
												AV. Principal Wahingtonia S/N y circuito palmera imperial "Las palmas |" Hacienda
												<br>
												Ixtapaluca Edo. México CP. 56535
												<br>
												Correo electronico: zona48bg@gmail.com
												<br>
												Tel: 5541191217
												</br>
												</br></strong>
										</div>
								</div>
					</div>			
				</footer>
				<!--Herramientas Js-->
				<script src="../JavaScript/jquery.js"></script>
				<script src="../JavaScript/bootstrap.min.js"></script>
	 </body>
</html>