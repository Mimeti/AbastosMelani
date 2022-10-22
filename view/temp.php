<?php 

include('confi/db.php');

        $sql="SELECT * FROM inventario";
        $resultado=mysqli_query($coon,$sql);

?>

<div>
    <div>
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
                if(mysqli_num_rows($resultado) > 0)  
                {  
                    while($row = mysqli_fetch_array($resultado))  
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
    
    <?php 
    
    include('confi/db.php');
    $sql="SELECT * FROM cliente";
    $resultado=mysqli_query($coon,$sql);
    
    ?>
    
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

<div>
    <form action="productos/ingresar_clie.php" method="post">
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
    </form>
</div>