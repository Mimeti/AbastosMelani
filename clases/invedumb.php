<?php

class Nomina{

    private $ID_id;
    private $name_nd;
    private $nameii_nd;
    private $ape_nd;
    private $apeii_nd;
    private $ci_nd;
    private $num_nd;
    private $ingre_nd;
    private $pues_nd;
    private $con;
    private $id;

    public function __construct()
    {
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

   
    public function delete(){
        $this->id = $_GET['id'];

        $sql = "DELETE inventariodumb WHERE ID_id = '$this->id'";
        $query1= mysqli_query($this->con,$sql);

        
        if($query1 == 1){
            Header("Location: ../invedumb.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function view(){
        $sql = "SELECT * FROM inventariodumb";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('view/invedumb.php');

    }

    public function drop(){
        $sql = "TRUNCATE TABLE inventariodumb";
        $query = mysqli_query($this->con,$sql);

        if($query){
            Header("Location: ../invedumb.php");
        }
    }

    /*public function produ(){
        $sql = "SELECT * FROM inventario";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('productos/view/tabla_produ.php');

    }*/
}