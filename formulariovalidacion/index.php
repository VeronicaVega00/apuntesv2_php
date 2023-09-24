<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con validaciónes</title>
</head>
<body>
    <?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if($error==="nombre"){
        echo '<strong style="color:red"> el error esta en' . $error . '</strong>';
    }else if($error==="apellido"){
        echo '<strong style="color:red"> el error esta en' . $error . '</strong>';
    }else if($error==="email"){
        echo '<strong style="color:red"> el error esta en' . $error . '</strong>';
    }else if($error==="pass"){
        echo '<strong style="color:red"> el error esta en' . $error . '</strong>';
    }

}

    ?>
    <h1>Validar Formulario Php</h1>
    <form  method="POST" action="procesarFormulario.php"class="Formulario">
        <h3>Completa el Formulario</h3>
        <label for="nombre">nombre</label>
        <input type="text" name="nombre"  required="required" pattern="[a-zA-Z]+" >
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" required="required" pattern="[a-zA-Z]+" >
        <label for="edad">Edad</label>
        <input type="number" name="edad"  required="required" >
        <label for="email">Email</label>
        <input type="email" name="email"  required="required" >
        <label for="pass">Password</label>
        <input type="password" name="pass"  required="required" minlength="5">
        <input type="submit" value="enviar ">

    </form>

</body>
</html>




<style>
    .Formulario {
        background-color: rgb(201, 201, 201);
        border: solid 1px rgb(135, 135, 207);
        margin: auto;
        width: 50%;
        flex-direction: column;
        display: flex;
        justify-content: center;
        text-align: center;
        padding: 30px;

    }
    .Formulario input{
        display: block;
        margin: 10px;
        justify-content: center;
        text-align: center;
    }
</style>