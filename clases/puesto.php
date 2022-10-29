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

    public function add(){
        $this->ID_pues = 'ID_pues';
        $this->name_pues=$_POST['name_pues'];
        $this->suel_pues=$_POST['suel_pues'];
    
        $sql1="INSERT INTO puesto_trabajo (ID_pues,name_pues,suel_pues) 
        VALUES ('ID_pues','$this->name_pues','$this->suel_pues')";
        $query1= mysqli_query($this->con,$sql1);

        if($query1 == 1){
            Header("Location: ../nomina.php");
        }else {
            die(mysqli_error($this->con));
        }
    }
}