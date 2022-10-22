<?php include('config/db.php');

if(!empty($_POST)){

    if($_POST['action'] == 'info_cedu'){

        $cedu_clie = $_POST['cedu'];
        $query = mysqli_query($coon,"SELECT ID_clie,name_clie,apel_clie,cedu_clie FROM cliente
                                     WHERE ID_clie = $cedu_clie");
        mysqli_close($coon);

        $result = mysqli_num_rows($query);
        
        if($result > 0 ){
            $data = mysqli_fetch_assoc($query);
            echo json_encode($data);
            exit;
        }

        echo '1';
        exit;

    }

    if($_POST['action'] == 'info_inve'){

        $ID_inve = $_POST['inven'];
        $query = mysqli_query($coon,"SELECT ID_inve,name_inve,mark_inve,alma_inve,prec_inve FROM inventario
                                     WHERE ID_inve = $ID_inve");
        mysqli_close($coon);

        $result = mysqli_num_rows($query);
        if($result > 0 ){
            $data = mysqli_fetch_assoc($query);
            echo json_encode($data);
            exit;
        }

        echo '1';
        exit;

    }

    if($_POST['action'] == 'fact'){

        if(empty($_POST['ID_inve']) || empty($_POST['num_ven']) || empty($_POST['factu']))
        {
        echo '1';
        }else{
            $ID_inve = $_POST['ID_inve'];
            $num_ven = $_POST['num_ven'];
            $codi_fact = $_POST['factu'];

            $query_iva = mysqli_query($coon,"SELECT iva_empr FROM empresa");
            $result_iva = mysqli_num_rows($query_iva);


            $query_temp_ven  = mysqli_query($coon,"CALL temp_inve_ven($ID_inve,$num_ven,'$codi_fact')");
            $result = mysqli_num_rows($query_temp_ven);


            $detalletabla = '';
            $sup_total = 0;
            $iva = 0;
            $total = 0;
            $arrydata = array();

            if($result > 0){
                if($result_iva > 0){
                    $info_iva = mysqli_fetch_assoc($query_iva);
                    $iva = $info_iva['iva_empr']; 
                }

                while ($data = mysqli_fetch_assoc($query_temp_ven)){
                    $prec_total = round($data['cant_teve'] * $data['total_teve'], 2);
                    $sup_total = round($sup_total + $prec_total, 2);
                    $sup_total = round($total + $sup_total, 2);
                    
                    $detalletabla .= '
                    <tr class="tr">
                    <td class="td">'.$data['ID_teve'].'</td>
                    <td class="td">'.$data['ID_inve'].'</td>
                    <td class="td">'.$data['name_inve'].'</td>
                    <td class="td">'.$data['codi_fact'].'</td>
                    <td class="td"></td>
                    <td class="td">'.$data['total_teve'].'</td>
                    <td class="td">'.$data['cant_teve'].'</td>
                    <td class="td">'.$prec_total.'</td>
                    <td class="td">
                    </td>
                
                    </tr>
                    ';

                }

                $inpues = round($sup_total * ($iva / 100), 2);
                $tl_sniva = round($sup_total - $inpues, 2);
                $total = round($tl_sniva - $inpues, 2);

                $detalletotal = '
                <tr class="tr">

                <td class="td">SUBTOTAL Q</td>
                <td class="td">'.$tl_sniva.'</td>

                </tr>
                <tr class="tr">

                <td class="td">IVA ('.$iva.'%)</td>
                <td class="td">'.$inpues.'</td>

                </tr>
                <tr class="tr">

                <td class="td">TOTAL Q</td>
                <td class="td">'.$total.'</td>

                </tr>
                
                ';

                $arrydata['detalle'] = $detalletabla;
                $arrydata['total'] = $detalletotal;

                echo json_encode($arrydata,JSON_UNESCAPED_UNICODE);

            }else{
                echo '1';
            }
            mysqli_close($coon);
        }
        exit;
    }

    if($_POST['action'] == 'delinveven'){
        if(empty($_POST['ID_del']) || empty($_POST['factu']))
        {
            echo 'error';

        }else{
                $action = $_POST['action'];
                $codi_fact = $_POST['factu'];
                $ID_teve = $_POST['ID_del'];

                $query_iva = mysqli_query($coon,"SELECT iva_empr FROM empresa");
                $result_iva = mysqli_num_rows($query_iva);

                $query_del_ven  = mysqli_query($coon,"CALL el_inve_ven($ID_teve,'$codi_fact')");
                $result = mysqli_num_rows($query_del_ven);

                $detalletabla = '';
                $sup_total = 0;
                $iva = 0;
                $total = 0;
                $arrydata = array();

            if($result > 0){
                if($result_iva > 0){
                    $info_iva = mysqli_fetch_assoc($query_iva);
                    $iva = $info_iva['iva_empr']; 
                }
                while($data = mysqli_fetch_assoc($query_del_ven)){

                    $prec_total = round($data['cant_teve'] * $data['total_teve'], 2);
                    $sup_total = round($sup_total + $prec_total, 2);
                    $sup_total = round($total + $sup_total, 2);

                    $detalletabla .= '
                    <tr class="tr">
                    <td class="td">'.$data['ID_teve'].'</td>
                    <td class="td">'.$data['ID_inve'].'</td>
                    <td class="td">'.$data['name_inve'].'</td>
                    <td class="td">'.$data['codi_fact'].'</td>
                    <td class="td"></td>
                    <td class="td">'.$data['total_teve'].'</td>
                    <td class="td">'.$data['cant_teve'].'</td>
                    <td class="td">'.$prec_total.'</td>
                    <td class="td">
                    </td>
                    
                    </tr>';
                }

                $inpues = round($sup_total * ($iva / 100), 2);
                $tl_sniva = round($sup_total - $inpues, 2);
                $total = round($tl_sniva - $inpues, 2);

                $detalletotal = '
                <tr class="tr">

                <td class="td">SUBTOTAL Q</td>
                <td class="td">'.$tl_sniva.'</td>

                </tr>
                <tr class="tr">
                
                <td class="td">IVA ('.$iva.'%)</td>
                <td class="td">'.$inpues.'</td>

                </tr>

                <tr class="tr">

            
                <td class="td">TOTAL Q</td>
            
                <td class="td">'.$total.'</td>

            
                </tr>';

                $arrydata['detalle'] = $detalletabla;
                $arrydata['total'] = $detalletotal;

                echo json_encode($arrydata,JSON_UNESCAPED_UNICODE);
                    
            }else{
                  echo 'fallo';  
                }
                exit;
            mysqli_close($coon);
        }
    }

    if($_POST['action'] == 'anularven'){

        $codi_fact = $_POST['factu'];
        

        $query_del = mysqli_query($coon,"DELETE FROM temporal_venta WHERE codi_fact = '$codi_fact'");
        mysqli_close($coon);
        if($query_del){
            echo 'ok';
        }else{
            echo 'error';
        }
    }

    if($_POST['action'] == 'procesarven'){

        if(empty($_POST['clie']) || empty($_POST['factu']))
        {
            echo 'error';

        }else{

            $codi_fact = $_POST['factu'];
            $ID_clie = $_POST['clie'];

            $query = mysqli_query($coon,"SELECT * FROM temporal_venta WHERE codi_fact = '$codi_fact'");
            $result = mysqli_num_rows($query);

            if($result > 0){
                $query_procesar = mysqli_query($coon,"CALL proceso_ven($ID_clie,'$codi_fact')");
                $result_detalle = mysqli_num_rows($query_procesar);

                if($result_detalle > 0){
                    $data = mysqli_fetch_assoc($query_procesar);
                    echo json_encode($data,JSON_UNESCAPED_UNICODE);

                }else{
                    echo "error";
                }
            }else{
                echo "error";
            }
            mysqli_close($coon);
            exit;

        }

    }
    
}
exit;
 
?>