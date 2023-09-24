<!-- <?php
// */
// //abres el archivo
// $archivo =fopen("text.txt", "a+");

// //

// //le haces el while para poder ver todas las lineas
// while (!feof($archivo)) {
// $contenido = fgets($archivo);
// echo $contenido;
// }


// //escribes en el contenido del archivo
// fwrite($archivo, "estoy alterando tu composicion desde otro archivo");


// //se cierra
// fclose($archivo)  ; 
// -->

//copio la informacion de un fichero
copy('text.txt', 'fichero_copiado')or die("error copiar");

//renombrar
rename('fichero_copiado', 'archivito.txt');

//eliminar ficher
unlink('archivito.txt') or die("error al borrar");


//existe el archivo
if (file_exists("text.tx")) {
    echo "el archivo  existe";
}else{
    echo 'el archivo no existe';
}

?>