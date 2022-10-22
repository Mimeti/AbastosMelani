<div class="conten_tabla">
    <div class="titulo_inve"><span class="icon icon-database"> ventas</span></div>
    <table>
        <thead>
            <tr>
                <th>ID venta</th>
                <th>codigo de factura</th>
                <th>ID inventario</th>
                <th>cantidad  de la venta</th>
                <th>total de la venta</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if(mysqli_num_rows($datos) > 0)  
            {  
                while($row = mysqli_fetch_array($datos))  
                { 
        ?>

        <tr>
            <td><?php  echo $row['ID_ven']?></td>
            <td><?php  echo $row['codi_fact']?></td>
            <td><?php  echo $row['ID_inve']?></td>
            <td><?php  echo $row['cant_ven']?></td>
            <td><?php  echo $row['total_ven']?></td>
        </tr>
                
        <?php
                    }
                }
        ?>
        </tbody>
    </table>
</div>