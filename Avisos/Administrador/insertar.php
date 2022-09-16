<?php
	//Recibir los datos y almacenarlos en variables
	$aviso = $_POST["aviso"];
	$boton=$_POST["boton"];
	//Conectar a la base de datos
	$conex = mysqli_connect("localhost", "root", "", "supervision");
	//$conex = mysqli_connect("localhost", "root", "", "bd_registro");
	//Se va realizar una consulta SQL de insertar
	



switch ($boton) {
    case 'agregar':
       


       $insertar = "INSERT INTO avisos values('', '$aviso', NOW(),NOW())";
	$resultado = mysqli_query($conex, $insertar);
    		if (!$resultado) {
		echo"<script language='javascript'>alert('Error al registrar, intente de nuevo');</script>;";
	}else{
		//echo"<script language='javascript'>alert('El aviso a sido registrado exitosamente');</script>;";
		echo"<script language='javascript'> window.location='admin.php' </script>;";
	}
	//Cerrar conexion
	mysqli_close($conex);


        break;
    case 'borrar':

    	 $eliminar = "DELETE FROM avisos";
		$resultado2 = mysqli_query($conex, $eliminar);
        if (!$resultado2) {
		echo"<script language='javascript'>alert('Error al eliminar, intente de nuevo');</script>;";
	}else{
		//echo"<script language='javascript'>alert('Los avisos han sido eliminados exitosamente');</script>;";
		echo"<script language='javascript'> window.location='admin.php' </script>;";
	}
		break;
	}












