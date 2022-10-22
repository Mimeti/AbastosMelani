<?php include('shared/head.php');?>

<div>
        <div><span class="icon icon-file-text"> clientes</span></div>
        <table>
            <thead>
                <tr>
                    <th>ID cliente</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>cedula</th>
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
                <td><?php  echo $row['ID_clie']?></td>
                <td><?php  echo $row['name_clie']?></td>
                <td><?php  echo $row['apel_clie']?></td>
                <td><?php  echo $row['cedu_clie']?></td>
            </tr>
                    
            <?php
                        }
                    }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('shared/footer.php')?>