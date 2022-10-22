<?php

class bitacora{

    private $id_bit;
    private $oper_bit;
    private $user_bit;
    private $host_bit;
    private $modi_bit;
    private $tabla_bit;
  
    public function __construct()
    {
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }


    public function view(){
        $sql = "SELECT * FROM bitacora ";
        //$datos = $this->con->consultaRetorno($sql);
        $datos = mysqli_query($this->con,$sql);
        

        include('view/bitacora_view.php');

    }

}