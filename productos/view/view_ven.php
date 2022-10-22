

<div>
    <div type="button">
        <div>
            <p>ingresar codigo</p>
            <input type="text" name="codi_fact" id="codi_fact" value="">
        </div>
        <div>
            <p>ingresar ID de venta</p>
            <input type="text" name="ID_teve" id="ID_teve" value="">
        </div>
        <div>
            <div><a id="eliminar" href="#"><span class="icon icon-bin"></span>eliminar</a></div>
        </div>
    </div>
    
    <div type="button">
        <div>
        <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>ID cliente</th>
                        <th>nombre de cliente</th>
                        <th>cedula de cliente</th>
                    </tr>
                </thead>
                <tr>
                    <td></td>
                    <td><input type="int" name="ID_clie" id="ID_clie"></td>
                    <td id="name_clie">-</td>
                    <td id="cedu_clie">-</td>
                </tr>
        </table>
        </div>
        <div>
            <div><a id="anular" href="#">anular</a></div>
        </div>
        <div>
            <div><a id="procesar" href="#">procesar</a></div>
        </div>
    </div>
</div>

<div>
    <h2>nueva venta</h2>
        <table class="table">
            <thead class="thead">
                <tr class="tr">
                    <th></th>
                    <th class="th">ID inventario</th>
                    <th class="th">producto</th>
                    <th class="th">marca</th>
                    <th class="th">en almacen</th>
                    <th class="th">precio</th>
                    <th class="th">cantidad</th>
                    <th class="th">total</th>
                    <th class="th">accion</th>
                </tr>
            </thead>
            <tr class="tr">
                <td></td>
                <td class="td"><input class="form-control form-control-sm" type="int" name="ID_inve" id="ID_inve"></td>
                <td class="td" id="name_inve">-</td>
                <td class="td" id="mark_inve">-</td>
                <td class="td" id="alma_inve">00</td>
                <td class="td" id="prec_inve">0.00</td>
                <td class="td"><input class="form-control form-control-sm" type="text" name="num_ven" id="num_ven" value="0" min="1" disabled></td>
                <td class="td" id="prec_ven">0.00</td>
                <td class="td"><a class="agregar" href="#" id="agregar">agregar</a></td>
            </tr>
            <thead class="thead">
                <tr class="tr"> 
                    <th></th>
                    <th class="th">ID inventario</th>
                    <th class="th">producto</th>
                    <th class="th">factura</th>
                    <th class="th">en almacen</th>
                    <th class="th">precio</th>
                    <th class="th">cantidad</th>
                    <th class="th">total</th>
                    <th class="th">accion</th>
                </tr>
            </thead>
            <tbody id="detalle_ven">
            <?php
                if(mysqli_num_rows($datos) > 0)  
                {  
                     
                    $query_iva = mysqli_query($this->con,"SELECT iva_empr FROM empresa");
                    $result_iva = mysqli_num_rows($query_iva);

                    $sup_total = 0;
                    $iva = 0;
                    $total = 0;

                    if($result_iva > 0){
                        $info_iva = mysqli_fetch_assoc($query_iva);
                        $iva = $info_iva['iva_empr']; 
                    }

                    while($row = mysqli_fetch_array($datos))  
                    {

                        $prec_total = round($row['cant_teve'] * $row['total_teve'], 2);
                        $sup_total = round($sup_total + $prec_total, 2);
                        $sup_total = round($total + $sup_total, 2);
            ?>
             
                <tr class="tr">
                    <td class="td"><?php echo $row['ID_teve']?></td>
                    <td class="td"><?php echo $row['ID_inve']?></td>
                    <td class="td"><?php echo $row['name_inve']?></td>
                    <td class="td"><?php echo $row['codi_fact']?> </td>
                    <td class="td"></td>
                    <td class="td"><?php echo $row['total_teve']?></td>
                    <td class="td"><?php echo $row['cant_teve']?></td>
                    <td class="td"><?php echo $prec_total?></td>
                    <td class="td">
                    
                    </td>
                </tr>
            
            <?php
            }
                        $inpues = round($sup_total * ($iva / 100), 2);
                        $tl_sniva = round($sup_total - $inpues, 2);
                        $total = round($tl_sniva - $inpues, 2);
            ?>
            </tbody>
            <tfoot id="detalle_total">
                <tr class="tr">

                <td class="td">SUBTOTAL Q</td>
                <td class="td"><?php echo $tl_sniva?></td>

                </tr>
                <tr class="tr">

                <td class="td">IVA (<?php echo $iva?>%)</td>
                <td class="td"><?php echo $inpues?></td>

                </tr>
                <tr class="tr">

                <td class="td">TOTAL Q</td>
                <td class="td"><?php echo $total?></td>

                </tr>
                <?php
                    
                }
                ?>
            </tfoot>
        </table>
    </div>
</div>





