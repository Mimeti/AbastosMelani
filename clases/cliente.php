<?php

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

        $sql1="INSERT INTO cliente (ID_clie,name_clie,apel_clie,cedu_clie) VALUES ('ID_clie','$this->name_clie','$this->apel_clie','$this->cedu_clie')";
        $query1= mysqli_query($this->con,$sql1);

        if($query1 == 1){
            Header("Location: ../clientes.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function addfac(){
        $this->ID_clie='ID_clie';
        $this->name_clie=$_POST['name_clie'];
        $this->apel_clie=$_POST['apel_clie'];
        $this->cedu_clie=$_POST['cedu_clie'];

        $sql1="INSERT INTO cliente (ID_clie,name_clie,apel_clie,cedu_clie) VALUES ('ID_clie','$this->name_clie','$this->apel_clie','$this->cedu_clie')";
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
        
        include('view/cliente_view.php');
    }

    public function viewg(){
        $sql = "SELECT * FROM cliente";
        $datos = mysqli_query($this->con,$sql);
        
        include('view/clientesg.php');
    }
    public function addg(){
        $this->ID_clie='ID_clie';
        $this->name_clie=$_POST['name_clie'];
        $this->apel_clie=$_POST['apel_clie'];
        $this->cedu_clie=$_POST['cedu_clie'];

        $sql1="INSERT INTO cliente (ID_clie,name_clie,apel_clie,cedu_clie) VALUES ('ID_clie','$this->name_clie','$this->apel_clie','$this->cedu_clie')";
        $query1= mysqli_query($this->con,$sql1);

        if($query1 == 1){
            Header("Location: ../clientesg.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function viewe(){
        $sql = "SELECT * FROM cliente";
        $datos = mysqli_query($this->con,$sql);
        
        include('view/clientesemp.php');
    }
}

?>