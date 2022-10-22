<?php

class registro{

    private $ID_user;
    private $name_user;
    private $cont_user;
    private $mail_user;
    private $ID_rol;
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

    public function add(){
        $this->ID_user = 'ID_user';
        $this->name_user=$_POST['name_user'];
        $this->cont_user=$_POST['cont_user'];
        $this->mail_user=$_POST['mail_user'];
        $this->ID_rol=$_POST['ID_rol'];
    

        $sql1="INSERT INTO user (ID_user,name_user,cont_user,mail_user,ID_rol) 
        VALUES ('ID_user','$this->name_user','$this->cont_user','$this->mail_user','$this->ID_rol')";
        $query1= mysqli_query($this->con,$sql1);

        if($query1 == 1){
            Header("Location: ../index_admin.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function view(){
        $sql = "SELECT * FROM rol ORDER BY ID_rol";
        $datos = mysqli_query($this->con,$sql);

        include('view/registro_view.php');
    }

}