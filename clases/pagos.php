<?php

class Nomina{

    private $ID_nom;
    private $name_nom;
    private $nameii_nom;
    private $ape_nom;
    private $apeii_nom;
    private $ci_nom;
    private $num_nom;
    private $ingre_nom;
    private $ID_pues;
    private $con;
    private $ID_asi;
    private $dedu;
    private $bono;
    private $total;
    private $dedut;
    private $bonot;

    public function __construct()
    {
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

    public function view(){
        $sql = "SELECT * FROM pago 
        INNER JOIN puesto_trabajo ON pago.ID_pues = puesto_trabajo.ID_pues
        INNER JOIN nomina ON pago.ID_nom = nomina.ID_nom ";
   
        $datos=mysqli_query($this->con,$sql);

        include('view/pagos.php');
    }
    
    public function drop(){
        $sql = "TRUNCATE TABLE pago";
        $query = mysqli_query($this->con,$sql);

        if($query){
            Header("Location: ../nomina.php");
        }
    }
}
