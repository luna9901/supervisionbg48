<?php
	$usuario = $_POST['usuario'];
	$clave = $_POST['contra'];
	//$clave=hash('sha1',$clave);

	//VALIDAR INICIO DE SESION
	session_start();//Se ha iniciado la sesión
	$_SESSION['usuario']=$usuario;
	$varsesion=$_SESSION['usuario'];
 	$usuari = htmlspecialchars($varsesion); 
 	if($varsesion == NULL||$varsesion=''){
 	echo"<script language='javascript'>alert('No ha iniciado sesión');</script>;";
		echo"<script language='javascript'>window.location='../index.html'</script>;";
 	die();//Finaliza todo el proceso y ya no muestra nada
 	}

	#Conectar a la base de datos
	$conex = mysqli_connect("localhost", "root", "", "supervision");
	//$conexion=mysqli_connect("localhost", "root", "", "bd_registro");
	#Realizar una consulta de validacion de datos capturados
	$us= "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave' AND puesto='Administrador'";
	$us2= "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave' AND puesto='Empleado'";

	#Ahora ejecutar la consulta
	$resultado = mysqli_query($conex, $us);
	$resultado2 = mysqli_query($conex, $us2);

	#Ahora evaluar los resultados
	$filas=mysqli_num_rows($resultado); #Obtiene el numero de filas, si coincide alguno devolvera un valor siendo 1
	$filas2=mysqli_num_rows($resultado2);

	if ($filas>0){
		//echo"<script language='javascript'>window.location='../formularioP/index.php'</script>;";
		echo"<script language='javascript'>alert('¡Bienvenido administrador!');</script>;";
		echo"<script language='javascript'>window.location='Administrador/admin.php'</script>;";
	}elseif($filas2>0){
		echo"<script language='javascript'>alert('Te damos la bienvenida, estos son los avisos de hoy');</script>;";
		echo"<script language='javascript'>window.location='Empleado/emple.php'</script>;";
	}else{
		echo"<script language='javascript'>alert('Error al ingresar, intente de nuevo');</script>;";
		echo"<script language='javascript'>window.location='index.html'</script>;";
	}
	#Ahora liberar los resultados para no consumir memoria
	mysqli_free_result($resultado);
	mysqli_close($conexion);