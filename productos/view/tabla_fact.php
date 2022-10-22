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
            if(mysqli_num_rows($datos) > 0)  
            {  
                while($row = mysqli_fetch_array($datos))  
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