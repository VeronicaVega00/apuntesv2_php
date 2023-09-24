<?php
if(isset($_COOKIE['micookie']) && isset($_COOKIE['unyear']))


setcookie('micookie','',-100);

//termina de eliminar la cookie y redirecciona modificando la ruta
header("location:ver_cookies.php")
?>



