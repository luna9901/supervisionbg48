<?php
$usuari=$_GET['idbitacora'];
session_start();//Tomo la sesión
session_destroy();//Ahora se destruye la sesión
header("Location:../Clave.html");
?>