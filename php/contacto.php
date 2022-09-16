<?php
/*Formulario de contacto HTML5, PHP Y Bootstraps
Creado por: www.render2web.com
Version: 1.1*/

//Comprobamos que se haya presionado el boton enviar
if(isset($_POST['enviar'])){
	//Guardamos en variables los datos enviados
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$institucion = $_POST['institucion'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	///Validamos del lado del servidor que el nombre y el email no estén vacios
	if($nombre == ''){
		echo "Debe ingresar su nombre";
	}
	else if($email == ''){
		echo "Debe ingresar su email";
}else{
	$para = "antgarlun99@gmail.com";//Email al que se enviará
	$asuntores = "Confirmación Supervision Escolar BG 48";//Puedes cambiar el asunto del mensaje desde aqui
	//Este sería el cuerpo del mensaje
	$mensaje = "
		<table border='0' cellspacing='3' cellpadding='2'>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Nombre:</strong></td>
			<td width='80%' align='left'>$nombre</td>
		  </tr>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Asunto:</strong></td>
			<td width='70%' align='left'>$asunto</td>
		  </tr>
		  <tr>
			<td align='left' bgcolor='#f0efef'><strong>E-mail:</strong></td>
			<td align='left'>$email</td>
		  </tr>
		   <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Telefono:</strong></td>
			<td width='70%' align='left'>$telefono</td>
		  </tr>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Institucion:</strong></td>
			<td width='70%' align='left'>$institucion</td>
		  </tr>
		  <tr>
			<td align='left' bgcolor='#f0efef'><strong>Comentario:</strong></td>
			<td align='left'>$mensaje</td>
		  </tr>
	</table>	
";	

$comentario2="Usted se ha contactado con Supervisión Escolar BG 48, Ixtapaluca. En breve tendra su respuesta.";

//Cabeceras del correo
    $headers = "From: $nombre <$email>\r\n"; //Quien envia?
    $headers .= "X-Mailer: PHP5\n";//Control de dominios como gmail, hotmail, outlook
    $headers .= 'MIME-Version: 1.0' . "\n";// Versión de hipertexto para cifrado de punto a punto
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //Envio de paquete seguro de servidor a dominio receptor
	
//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
    var_dump(mail($para, $asunto, $mensaje, $headers));
    exit();
	if(mail($para, $asunto, $mensaje, $headers)){
		echo"<script language='javascript'>alert('Su mensaje se ha enviado correctamente');</script>;";
		echo"<script language='javascript'>window.location='../Html/Contactanos.html'</script>;";

		mail($email,$asuntores,$comentario2,$headers);//Envio de correo como respuesta a la persona que quiere contactar a la supervisión

	}else{
		echo"<script language='javascript'>alert('Hubo un error en el envío inténtelo más tarde');</script>;";
		echo"<script language='javascript'>window.location='../Html/Contactanos.html'</script>;";
	}
}
}	
?>