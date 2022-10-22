<div class="conten_tabla">
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
                if(mysqli_num_rows($datos) > 0)  
                {  
                    while($row = mysqli_fetch_array($datos))  
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
</div>