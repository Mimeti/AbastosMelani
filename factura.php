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

<div class="sepa">
    <div><a class="ass link" href="pdf_ven.php">imprimir ventas</a></div>
    <div><a class="ass link" href="pdf_coin.php">imprimir monedas</a></div>
    <div><a class="ass link" href="pdf_clie.php">imprimir clientes</a></div>
</div>


<?php include('shared/footer.php');?>

