<?php
	//Recibir los datos y almacenarlos en variables
	$nombre = $_POST["nombre"];
	$usuario =$_POST["usuario"];
	$clave =$_POST["contra"];
	$boton =$_POST["boton"];

	//Conectar a la base de datos
	$conex = mysqli_connect("localhost", "root", "", "supervision");
	//$conex = mysqli_connect("localhost", "root", "", "bd_registro");
	//Se va realizar una consulta SQL de insertar
	



switch ($boton) {
    case 'adm':
       
    $insertar = "INSERT INTO usuarios values('', '$nombre', '$usuario','$clave', 'Administrador')";
	$resultado = mysqli_query($conex, $insertar);
    		if (!$resultado) {
		echo"<script language='javascript'>alert('Error al registrar, intente de nuevo');</script>;";
	}else{
		//echo"<script language='javascript'>alert('El aviso a sido registrado exitosamente');</script>;";
		echo"<script language='javascript'> window.location='index.php' </script>;";
	}
	//Cerrar conexion
	mysqli_close($conex);


        break;
    case 'emp':

    	$insertar = "INSERT INTO usuarios values('', '$nombre', '$usuario','$clave', 'Empleado')";
	$resultado = mysqli_query($conex, $insertar);
    		if (!$resultado) {
		echo"<script language='javascript'>alert('Error al registrar, intente de nuevo');</script>;";
	}else{
		//echo"<script language='javascript'>alert('El aviso a sido registrado exitosamente');</script>;";
		echo"<script language='javascript'> window.location='index.php' </script>;";
	}
		break;
	}












