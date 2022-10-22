<div class="conten_tabla">
    <div><span class="icon icon-file-text"> Productos</span></div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>producto</th>
                <th>marca</th>
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
            <td><?php  echo $row['ID_inve']?></td>
            <td><?php  echo $row['name_inve']?></td>
            <td><?php  echo $row['mark_inve']?></td>
        </tr>
                
        <?php
                    }
                }
        ?>
        </tbody>
    </table>
</div>