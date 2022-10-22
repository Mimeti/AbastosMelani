<?php include ('productos/clases.php');

include('shared/head.php');

$resulta = new temporal_venta();
$resulta -> view();

$resulta = new Inventario();
$resulta -> produ();

$resulta = new cliente();
$resulta -> view();
?>

<div>
    <form action="controlador/ingresar_cliefac.php" method="post">
    <div><span class="icon icon-user"> ingresar datos</span></div>
    <div>
        <div>
            <label><span class="icon icon-user-plus"> nambre</span></label>
            <input type="text" name="name_clie" placeholder="ingresar nombre">
        </div>
        <div>
            <label><span class="icon icon-user-plus"> apellido</span></label>
            <input type="text" name="apel_clie" placeholder="ingresar apellido">
        </div>
    </div>
    <div>
        <div>
            <label><span class="icon icon-user-plus"> cedula</span></label>
            <input type="text" name="cedu_clie" placeholder="ingresar cedula">
        </div>
        <div>
            <input type="submit" name="submit">
        </div>
    </div>
    </form>
</div>

<?php include('shared/footer.php');?>
