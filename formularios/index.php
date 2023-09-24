<!-- <
para trabajar la informacion desde la misma pagina
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

}

//permite pedir y envia informacion
?>  -->

<a href="formulario.html">volver al formulario</a>
<?php 
//para traer la informacion desde otra pagina
if (isset($_POST['titulo']) &&isset($_POST['descripcion']) ) {
    $titulo = $_POST['titulo'];
    $descipcion=$_POST['descripcion'];

    echo "Mi titulo es $titulo y la descripcion es $descipcion";
}else{
    echo "ocurrio un error";
}
?>