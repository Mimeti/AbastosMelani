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
        $this->date_inve=$_POST['date_inve'];
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

    public function addu(){
        $this->name_inve=$_POST['name_inve'];
        $this->mark_inve=$_POST['mark_inve'];
        $this->date_inve=$_POST['date_inve'];
        $this->cadu_inve=$_POST['cadu_inve'];
        $this->alma_inve=$_POST['alma_inve'];
        $this->prec_inve=$_POST['prec_inve'];
        $this->ID_asi=$_POST['ID_inve'];

        $sql1="UPDATE inventario SET ID_inve='$this->ID_asi', mark_inve='$this->mark_inve', date_inve='$this->date_inve', cadu_inve='$this->cadu_inve',
        alma_inve='$this->alma_inve', prec_inve='$this->prec_inve' WHERE ID_inve = '$this->ID_asi'";
       $query1= mysqli_query($this->con,$sql1);
       

        if($query1 == 1){
            Header("Location: ../inventario.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function view(){
        $sql = "SELECT * FROM inventario";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('productos/view/tabla_inve.php');

    }

    public function produ(){
        $sql = "SELECT * FROM inventario";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('productos/view/tabla_produ.php');

    }

    public function viewu(){
        
        $this->ID_asi=$_GET['id'];

        $sql1 = "SELECT * FROM inventario WHERE ID_inve = '$this->ID_asi'";
        $resultados = mysqli_query($this->con,$sql1);

        if(!empty($resultados)){
            $sql = "SELECT * FROM inventario";
            $datos = mysqli_query($this->con,$sql);
        
            $row=mysqli_fetch_row($datos);
            include('view/updatei_view.php');
        }

        
    }
    public function addg(){
        $this->ID_inve = 'ID_inve';
        $this->name_inve=$_POST['name_inve'];
        $this->mark_inve=$_POST['mark_inve'];
        $this->date_inve=$_POST['date_inve'];
        $this->cadu_inve=$_POST['cadu_inve'];
        $this->alma_inve=$_POST['alma_inve'];
        $this->prec_inve=$_POST['prec_inve'];


        $sql1="INSERT INTO inventario (ID_inve,name_inve,mark_inve,date_inve,cadu_inve,alma_inve,prec_inve) 
        VALUES ('ID_inve','$this->name_inve','$this->mark_inve','$this->date_inve','$this->cadu_inve','$this->alma_inve','$this->prec_inve')";
        $query1= mysqli_query($this->con,$sql1);

        if($query1 == 1){
            Header("Location: ../inventariog.php");
        }else {
            die(mysqli_error($this->con));
        }
    }
    
    public function viewe(){
        $sql = "SELECT * FROM inventario";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('view/inventario_emp.php');

    }
}


?>