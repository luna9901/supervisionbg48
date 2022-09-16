<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Supervisión Escolar No. 48 de Bachillerato General</title>
	<link rel="icon"  href="../../Imagenes/LogoFondo/Logo2.png">
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"><!--Establece el ancho y zoom de la pagina en cualquier dispositivo-->
	<link rel="stylesheet" type="text/css" href="../../Css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../Css/Separador1.css">
	<link rel="stylesheet" type="text/css" href="../../Css/Fondo.css">
	<link rel="stylesheet" type="text/css" href="../../Css/Pie.css">
	<?php

	 session_start();//En todas las paginas donde se va a iniciar se colocara
 $varsesion=$_SESSION['usuario'];
 $clavenueva=$_SESSION['clave'];
 $usuari = htmlspecialchars($varsesion); 
 $clav = htmlspecialchars($clavenueva); 
 if($varsesion == NULL||$varsesion=''){
 	echo"<script language='javascript'>alert('No ha iniciado sesión');</script>;";
		echo"<script language='javascript'>window.location='../index.html'</script>;";
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
						  <img src="../../Imagenes/LogoFondo/Logo3.png" class="img-responsive" class="navbar-brand" width="100" height="50"> 
					</div>
					<div class="collapse navbar-collapse" id="BotonesMenu"><!--Es necesario utilizar el ID para que el efecto toogle funcione-->
						  <ul class="nav navbar-nav">
						
							<li><a href="../../index.html">Inicio</a></li>
								<li class="dropdown"><!--Si este demeniza mas contenido podremos agregar submenus-->
								  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Conocenos <span class="caret"></span></a>
									  <ul class="dropdown-menu">
										<li><a href="../../Html/Misión.html">Misión</a></li>
										<li><a href="../../Html/Visión.html">Visión</a></li>
										<li><a href="../../Html/Valores.html">Valores</a></li>
									  </ul>
								</li>
								<li class="dropdown"><!--Si este demeniza mas contenido podremos agregar submenus-->
									  <a class="dropdown-toggle" data-toggle="dropdown" href="../../Html/Zona.html">Zona 048 BG <span class="caret"></span></a>
										  <ul class="dropdown-menu">
											<a href="../../Html/Zona.html" id="se"  onclick="visualizarse();" class="list-group-item">Supervision Escolar </a>
											<a href="../../Html/Zona.html" id="prepa55"  onclick="visualizar55();" class="list-group-item">EPO 55</a>
											<a href="../../Html/Zona.html" id="prepa74"  onclick="visualizar74();" class="list-group-item">EPO 74</a>
											<a href="../../Html/Zona.html" id="prepa122" onclick="visualizar122();" class="list-group-item">EPO 122</a>
											<a href="../../Html/Zona.html" id="prepa124" onclick="visualizar124();" class="list-group-item">EPO 124</a>
											<a href="../../Html/Zona.html" id="prepa161" onclick="visualizar161();" class="list-group-item">EPO 161</a>
											<a href="../../Html/Zona.html" id="prepa161" onclick="visualizar224();" class="list-group-item">EPO 224</a>
											<a href="../../Html/Zona.html" id="prepa310" onclick="visualizar310();" class="list-group-item">EPO 310</a>
											<a href="../../Html/Zona.html" id="prepanet" onclick="visualizarnet();" class="list-group-item">NetIxtapaluca</a>
										  </ul>
								</li>
								<li><a href="../../Html/Contactanos.html">Contactanos</a></li>
								<li><a href="../index.html">Avisos</a></li>
								<li><a href="index.php">Registrar</a></li>

							<!--<li><a href="#">Contactanos</a></li>-->
						  </ul>
						  <ul class="nav navbar-nav navbar-right">
							<li><a href="../../Html/Clave.html">Office 365</a></li>
							
						  </ul>
					</div>
				</div>
		</nav>
			<section class="jumbotron" class="h">
		<div class="container">
			<center><h1><strong><font face="Arial" size=7 color="white">Avisos</font></strong></h1></center>
		</div>
	</section>
	
	</header>
		






	<?php
 			$conex = mysqli_connect("localhost", "root", "", "supervision");
 	?>

 	<div>
		<center><table border="5" bordercolor="lightblue" bgcolor="000000">
			<tr>
				<!--encabezados-->
				<td><strong><font color="white">Numero</font><font></td>
				<td><strong><font color="white">Aviso</font><font></td>
				<td><strong><font color="white">Hora</font><font></td>
				<td><strong><font color="white">Fecha</font><font></td>
			</tr>
			<?php
				$sql="SELECT * FROM avisos";
				$result=mysqli_query($conex,$sql);
				while($mostrar=mysqli_fetch_array($result)){
			?>
			<tr>
				<!--Valores actualizables dinamicamente-->
				<td><strong><font color="white"><?php echo $mostrar['id'] ?></font></td>
				<td><strong><font color="white"><?php echo $mostrar['aviso'] ?></font></td>
				<td><strong><font color="red"><?php echo $mostrar['hora'] ?></font></td>
				<td><strong><font color="blue"><?php echo $mostrar['fecha'] ?></font></td>
			</tr>
			<?php
				}
			?>
		</table></center>
	</div>





<!--Formulario para enviar aviso-->


		<div id="Contenedor">
		 <div class="Icon">
                    <!--Icono de usuario-->
                   <br><br><br>
                 </div>
<div class="ContentForm">
		 	<form action="insertar.php" method="post" name="FormEntrar">
		 		<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input type="text" class="form-control" name="aviso" placeholder="Escriba el aviso aqui..." id="Correo" aria-describedby="sizing-addon1">
				</div>
				<br>

				<!--botones para generar acciones pertinentes-->
				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" name="boton" value="agregar" type="submit">Agregar aviso</button>
				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" name="boton" value="borrar" type="submit">Borrar avisos</button>

				<a class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" href="salir.php?idbitacora=<?php echo $usuari; ?>" class="button">Cerrar sesión</a>
		 	</form>
		 </div>	
		 </div>





			<!--Inicio del pie de pagina-->
			<footer class="container-fluid">
				<div class="container"><!--Apartir de aqui colocaremos enlaces en dos columnas-->
							<div class="row">
									<div class="col-md-5">
									<br>
										<img src="../../Imagenes/LogoFondo/Piensa.png" class="img-responsive" width="100" height="100">
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
			<!--Herramientas js-->
				<script src="../../JavaScript/jquery.js"></script>
				<script src="../../JavaScript/bootstrap.min.js"></script>
				<script src="../../JavaScript/Visualizador.js"></script>
 <!-- Libreria java scritp de bootstrap -->

	 </body>
</html>