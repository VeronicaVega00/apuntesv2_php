<?php
// crear y validar si existe la carpeta
if(is_dir('directorio2')){
    echo 'ya existe la carpeta';

}else{
    mkdir("directorio2", 0777)or die("no se puede crear la carpeta");

}


//borrar carpeta
// rmdir('directorio2')
echo '<hr>';
if ($gestor =opendir('./directorio2')) {
    while(false !== ($archivo = readdir($gestor))){
        if ($archivo!="." & $archivo != '..') {
            echo $archivo.'<br>';}
    }
}
?>