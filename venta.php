<?php include ('productos/clases.php');

include('shared/head_ven.php');

$resulta = new temporal_venta();
$resulta -> view();

$resulta = new Inventario();
$resulta -> produ();

$resulta = new cliente();
$resulta -> view();
?>

<div class="con_for">
    <form class="for" action="controlador/ingresar_cliefac.php" method="post">
    <div class="titu"><span class="icon icon-user"> ingresar datos</span></div>
    <div class="div1">
        <div class="input">
            <label><span class="icon icon-user-plus"> nambre</span></label>
            <input type="text" name="name_clie" placeholder="ingresar nombre">
        </div>
        <div class="input">
            <label><span class="icon icon-user-plus"> apellido</span></label>
            <input type="text" name="apel_clie" placeholder="ingresar apellido">
        </div>
    </div>
    <div class="div2">
        <div class="input">
            <label><span class="icon icon-user-plus"> cedula</span></label>
            <input type="text" name="cedu_clie" placeholder="ingresar cedula">
        </div>
        <div class="boton">
            <input type="submit" name="submit">
        </div>
    </div>
    </form>
</div>

<?php include('shared/footer.php');?>

