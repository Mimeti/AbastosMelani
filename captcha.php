<?php

$imagen = imagecreate(100,35);

$fondo = imagecolorallocate($imagen,126,2,253);
$texto = imagecolorallocate($imagen,255,255,255);

$aleatorio=rand(100000,999999);
$aleatorio = md5($aleatorio);
$aleatorio = substr($aleatorio,0,5);

setcookie("token", $aleatorio);

imagefill($imagen,50,0,$fondo);

imagestring($imagen,90,25,10,$aleatorio,$texto);

header('content-type: image/png');
imagepng($imagen);
?>