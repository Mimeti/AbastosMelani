<?php include('shared/head.php');?>


<div>
    <div>
        <div class="titulo_inve"><span class="icon icon-database"> facturas</span></div>
        <table>
            <thead>
                <tr>
                    <th>fecha de facturacion</th>
                    <th>codigo</th>
                    <th>cliente</th>
                    <th>total</th>
                    <th>estado</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if(mysqli_num_rows($resultado) > 0)  
                {  
                    while($row = mysqli_fetch_array($resultado))  
                    { 
            ?>
    
            <tr>
                <td><?php  echo $row['date_fact']?></td>
                <td><?php  echo $row['codi_fact']?></td>
                <td><?php  echo $row['cedu_clie']?></td>
                <td><?php  echo $row['tota_fact']?></td>
                <td><?php  echo $row['esta_fact']?></td>
            </tr>
                    
            <?php
                        }
                    }
            ?>
            </tbody>
        </table>
    </div>
    
    <?php 
    
    include('confi/db.php');
    
    $sql="SELECT * FROM venta
    INNER JOIN inventario ON venta.ID_inve = inventario.ID_inve";
    $resultado=mysqli_query($coon,$sql);
    
    
    ?>
    
    
    <div>
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
                if(mysqli_num_rows($resultado) > 0)  
                {  
                    while($row = mysqli_fetch_array($resultado))  
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

    <?php 
    
    include('confi/db.php');
    
    $sql="SELECT * FROM moneda";
    $resultado=mysqli_query($coon,$sql);
    
    
    ?>
    
    
    <div>
        <div class="titulo_inve"><span class="icon icon-database"> moneda</span></div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>moneda</th>
                    <th>valor</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if(mysqli_num_rows($resultado) > 0)  
                {  
                    while($row = mysqli_fetch_array($resultado))  
                    { 
            ?>
    
            <tr>
                <td><?php  echo $row['ID_coin']?></td>
                <td><?php  echo $row['ti_coin']?></td>
                <td><?php  echo $row['va_coin']?></td>
            </tr>
                    
            <?php
                        }
                    }
            ?>
            </tbody>
        </table>
        <div><a href="pdf_coin.php">imprimir tabla</a></div>
    </div>
</div>

<?php include('shared/footer.php')?>