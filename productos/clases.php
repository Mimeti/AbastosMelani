<?php

class Inventario{

    private $ID_inve;
    private $date_inve;
    private $cadu_inve;
    private $name_inve;
    private $mark_inve;
    private $alma_inve;
    private $prec_inve;
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

    public function add(){
        $this->ID_inve = 'ID_inve';
        $this->name_inve=$_POST['name_inve'];
        $this->mark_inve=$_POST['mark_inve'];
        $date= date('Y-d-m');
        $this->date_inve=$date;
        $this->cadu_inve=$_POST['cadu_inve'];
        $this->alma_inve=$_POST['alma_inve'];
        $this->prec_inve=$_POST['prec_inve'];


        $sql1="INSERT INTO inventario (ID_inve,name_inve,mark_inve,date_inve,cadu_inve,alma_inve,prec_inve) 
        VALUES ('ID_inve','$this->name_inve','$this->mark_inve','$this->date_inve','$this->cadu_inve','$this->alma_inve','$this->prec_inve')";
        $query1= mysqli_query($this->con,$sql1);

        if($query1 == 1){
            Header("Location: ../inventario.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function delete(){
        
    }

    public function edit(){
        
    }

    public function view(){
        $sql = "SELECT * FROM inventario";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('productos/view/tabla_inve.php');

    }
    public function viewg(){
        $sql = "SELECT * FROM inventario";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('view/inventariog.php');

    }

    public function produ(){
        $sql = "SELECT * FROM inventario";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('productos/view/tabla_produ.php');

    }
    public function produg(){
        $sql = "SELECT * FROM inventario";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('productos/view/tabla_produ.php');

    }
}

class cliente{

    private $ID_clie;
    private $name_clie;
    private $apel_clie;
    private $cedu_clie;
    private $con;

    public function __construct(){
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    } 

    public function add(){
        $this->ID_clie='ID_clie';
        $this->name_clie=$_POST['name_clie'];
        $this->apel_clie=$_POST['apel_clie'];
        $this->cedu_clie=$_POST['cedu_clie'];

        $sql1="INSERT INTO cliente (ID_clie,name_clie,apel_clie,cedu_clie) VALUES ('ID_clie','$name_clie','$apel_clie','$cedu_clie')";
        $query1= mysqli_query($this->con,$sql1);

        if($query1 == 1){
            Header("Location: ../venta.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function delete(){
        
    }

    public function edit(){
        
        
    }

    public function view(){
        $sql = "SELECT * FROM cliente";
        $datos = mysqli_query($this->con,$sql);
        
        include('productos/view/tabla_clie.php');
    }
}

class facturas{

    private $ID_fact;
    private $date_fact;
    private $codi_fact;
    private $ID_clie;
    private $tota_fact;
    private $esta_fact;
    private $con;

    public function __construct(){
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

    public function view(){
        $sql = "SELECT * FROM facturas INNER JOIN cliente ON facturas.ID_clie = cliente.ID_clie";
        $datos = mysqli_query($this->con,$sql);
        
        include('productos/view/tabla_fact.php');
    }

    public function delete(){
        
    }
}

class temporal_venta{

    private $ID_teve;
    private $codi_fact;
    private $ID_inve;
    private $cant_teve;
    private $total_teve;
    private $con;

    public function __construct(){
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

    public function view(){
        $sql = "SELECT * FROM temporal_venta INNER JOIN inventario ON temporal_venta.ID_inve = inventario.ID_inve";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('productos/view/view_ven.php');

    }

}

class venta{

    private $ID_ven;
    private $codi_fact;
    private $ID_inve;
    private $cant_ven;
    private $total_ven;
    private $con;

    public function __construct(){
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

    public function delete(){
        
    }

    public function view(){
        $sql = "SELECT * FROM venta INNER JOIN inventario ON venta.ID_inve = inventario.ID_inve";
        $datos = mysqli_query($this->con,$sql);
        
        include('productos/view/tabla_ven.php');
    }

}

class moneda{

    private $ID_coin;
    private $ti_coin;
    private $va_coin;
    private $con;

    public function __construct(){
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

    public function add(){
        
    }

    public function delete(){
        
    }

    public function edit(){
        
    }

    public function view(){
        $sql = "SELECT * FROM moneda";
        $datos = mysqli_query($this->con,$sql);
        
        include('productos/view/tabla_coin.php');
    }
}


?>



