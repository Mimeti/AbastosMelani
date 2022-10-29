<?php
//crear imagen
$imagen = imagecreate(100,35);

//color de fondo y texto
$fondo = imagecolorallocate($imagen,126,2,253);
$texto = imagecolorallocate($imagen,255,255,255);

//creamos un valor aleatorio
$aleatorio=rand(100000,999999);
$aleatorio = md5($aleatorio);
$aleatorio = substr($aleatorio,0,5);

//la setcookie es la validacion de la captcha
setcookie("token", $aleatorio);

//rellenar la imagen
imagefill ($imagen,50,0,$fondo);

//imprimir un texto a la imagen
imagestring($imagen,90,25,10,$aleatorio,$texto);

//imprimir la imagen
header('content-type: image/png');
imagepng($imagen);
?>


