



    
<div>
    <form action="productos/ingresar_inve.php" method="post">
        <div><span class="icon icon-folder-open"> ingresar datos</span></div>
        <div>
            <div>
                <label><span class="icon icon-folder-plus"> producto</span></label>
                <input type="text" name="name_inve" placeholder="ingresar producto y medida">
            </div>
            <div>
                <label><span class="icon icon-folder-plus"> marca</span></label>
                <input type="text" name="mark_inve" placeholder="ingresar marca">
            </div>
        </div>
        <div>
            <div>
                <label><span class="icon icon-folder-plus"> caducidad</span></label>
                <input type="date" name="cadu_inve" placeholder="ingresar caducidad">
            </div>
            <div>
                <label><span class="icon icon-folder-plus"> cantidad en almacen</span></label>
                <input type="int" name="alma_inve" placeholder="ingresar cantidad en almacen">
            </div>
        </div>
        <div>
            <div>
                <label><span class="icon icon-folder-plus"> precio</span></label>
                <input type="int" name="prec_inve" placeholder="ingresar precio de producto">
            </div>
            <div>
                <input type="submit" name="submit">
            </div>
        </div>
    </form>
</div>


