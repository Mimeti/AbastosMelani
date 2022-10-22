<?php

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
        $sql = "SELECT * FROM facturas";
        $datos = mysqli_query($this->con,$sql);
        
        include('productos/view/tabla_fact.php');
    }

    public function delete(){
        
    }
}


?>