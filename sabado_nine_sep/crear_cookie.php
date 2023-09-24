<!-- //cookies almacenan datos 
//cookis van a estar guardadas socket_import_stream
buenas para el inicio de sessio 
datos temporales de un usuario 
desventaja 
pequeños-ficheros del usuario, el puede alterarlo, una pequeña cantidad de datos de usuario -->

<?php
 echo "PHP HYPERTEXT PRE-PROCESSOR  HPH  PRE-PROCESADOR DE HYPERTEXTOS";

 //crear cookies

//  setcookie("nombre", "valor solo string", caducidad,ruta,dominio);

 //cookie basica
 setcookie("micookie", "valor de im galleta");

 //cookie diferente
 setcookie("unyear", "valor de mi 365", time()+(60*60*24*365));




?>

<a href="ver_cookies.php">ver las galletas</a>