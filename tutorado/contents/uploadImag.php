<?php
session_start();
$nc = $_SESSION["nc"];
$nom = "$nc.png";
//comprobamos que sea una petición ajax
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    //obtenemos el archivo a subir
    $file = $_FILES['imagen']['name'];
    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    if(!is_dir("../../contents/imagAlum/"))
        mkdir("../../contents/imagAlum/", 0777);
    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['imagen']['tmp_name'],"../../contents/imagAlum/".$nom))
    {
       sleep(3);//retrasamos la petición 3 segundos
       echo 0;
    }
}else{
    throw new Exception("Error Processing Request", 1);
    echo 1;
}

?>
