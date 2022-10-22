<?php include ('productos/clases.php');

include('shared/head.php');

$resulta = new facturas();
$resulta -> view();

$resulta = new venta();
$resulta -> view();

$resulta = new moneda();
$resulta -> view();

$resulta = new cliente();
$resulta -> view();

?>

<div><a href="pdf_coin.php">imprimir ventas</a></div>
<div><a href="pdf_coin.php">imprimir monedas</a></div>
<div><a href="pdf_coin.php">imprimir clientes</a></div>

<?php include('shared/footer.php');?>

