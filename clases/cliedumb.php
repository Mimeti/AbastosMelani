<?php

class Nomina{

    private $ID_nd;
    private $name_nd;
    private $nameii_nd;
    private $ape_nd;
    private $apeii_nd;
    private $ci_nd;
    private $num_nd;
    private $ingre_nd;
    private $pues_nd;
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

   
    public function delete(){
        $sql = "DELETE nominadumb WHERE ID_nd = '{this->ID_nd}'";
        $query1= mysqli_query($this->con,$sql);

        
        if($query1 == 1){
            Header("Location: ../nominadumb.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function edit(){
        
    }

    public function view(){
        $sql = "SELECT * FROM clientedumb";
        $datos = mysqli_query($this->con,$sql);
        

        include('view/clientedumb.php');

    }

    public function drop(){
        $sql = "TRUNCATE TABLE clientedumb";
        $query = mysqli_query($this->con,$sql);

        if($query){
            Header("Location: ../cliedumb.php");
        }
    }
}