<?php

class Puesto{

 
    private $ID_pues;
    private $name_pues;
    private $suel_pues;
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

  
    public function view(){
        $sql = "SELECT * FROM puesto_trabajo";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('view/formu_nomi.php');

    }
}