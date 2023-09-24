<?php
//mostrar valor de cookies en tonces usar la global

if (isset($_COOKIE['micookie']) && isset($_COOKIE['unyear'])) {
    echo "si existe ".$_COOKIE['micookie'];
    echo "si existe ".$_COOKIE['unyear'];

}else{
    echo"no existr";
}

?>

<a href="borrar.php">borrar mis galletas</a>