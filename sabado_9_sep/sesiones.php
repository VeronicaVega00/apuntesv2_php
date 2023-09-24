<?php
echo '<h1> sesiones en php</h1>';

echo " <p> almacenay y persistir datos del usuario mientras la estadia del mismo </p>";
session_start();

//variable normal

$variable_normal ="soy una cadena de texto";

//variable sesion
$_SESSION['variable_persistente']='hola soy una sesion activa';


echo "$variable_normal";
echo $_SESSION['variable_persistente'];
?>