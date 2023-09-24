<?php
$error = "echo inicial";

if (!empty($_POST['nombre']) 
    || !empty($_POST['apellido'])
    || !empty($_POST['edad'])
    || !empty($_POST['email'])
    || !empty($_POST['pass'])
) {
    $error = 'ok';
    echo  $error;
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $edad = trim((int)$_POST['edad']);
    $email =trim( $_POST['email']);
    $pass = trim($_POST['pass']);

    if (!is_string($nombre) || !preg_match("/^[a-zA-Z ]+$/", $nombre)) {
        $error = 'nombre';
    } else if (!is_string($apellido) || !preg_match("/^[a-zA-Z ]+$/", $apellido)) {
        $error = 'apellido';
    } else if (!is_numeric($edad)) {
        $error = 'edad';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    } else if (empty($pass) || strlen($pass) < 5) {
        $error = 'pass';
    }

}
    // var_dump($error);
    // die();

if ($error != 'ok') {
    header("Location: index.php?error=$error");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar el formulario</title>
</head>
<body>
    <?php  if($error ==='ok'): ?>
    <h1>Datos validados correctamente</h1>
    <p><?=$nombre?></p> 
    <p><?=$apellido?></p> 
    <p><?=$edad?></p> 
    <p><?=$email?></p> 
    <?php endif; ?>
    
</body>
</html>