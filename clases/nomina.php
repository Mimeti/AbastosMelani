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

    public function __construct()
    {
        $this->con = mysqli_connect('localhost','root','','abastos_melani');
    }

    public function add(){
        $this->ID_nom = 'ID_nom';
        $this->name_nom=$_POST['name_nom'];
        $this->nameii_nom=$_POST['nameii_nom'];
        $this->ape_nom=$_POST['ape_nom'];
        $this->apeii_nom=$_POST['apeii_nom'];
        $this->ci_nom=$_POST['ci_nom'];
        $this->num_nom=$_POST['num_nom'];
        $this->ingre_nom=$_POST['ingre_nom'];
        $this->ID_pues=$_POST['ID_pues'];


        $sql1="INSERT INTO nomina (ID_nom,name_nom,nameii_nom,ape_nom,apeii_nom,ci_nom,num_nom,ingre_nom,ID_pues) 
        VALUES ('ID_nom','$this->name_nom','$this->nameii_nom','$this->ape_nom','$this->apeii_nom','$this->ci_nom','$this->num_nom','$this->ingre_nom','$this->ID_pues')";
        $query1= mysqli_query($this->con,$sql1);

        if($query1 == 1){
            Header("Location: ../nomina.php");
        }else {
            die(mysqli_error($this->con));
        }
    }
    public function addu(){
        $this->ID_nom = 'ID_nom';
        $this->name_nom=$_POST['name_nom'];
        $this->nameii_nom=$_POST['nameii_nom'];
        $this->ape_nom=$_POST['ape_nom'];
        $this->apeii_nom=$_POST['apeii_nom'];
        $this->ci_nom=$_POST['ci_nom'];
        $this->num_nom=$_POST['num_nom'];
        $this->ingre_nom=$_POST['ingre_nom'];
        $this->ID_pues=$_POST['ID_pues'];


        $sql1="UPDATE nomina SET ID_nom='$this->ID_nom', name_nom='$this->name_nom', nameii_nom='$this->nameii_nom', ape_nom='$this->ape_nom',
        apeii_nom='$this->apeii_nom', ci_nom='$this->ci_nom', num_nom='$this->num_nom', ingre_nom='$this->ingre_nom', ID_pues='$this->ID_pues' WHERE ID_nom = '$this->ID_nom'";
       $query1= mysqli_query($this->con,$sql1);
       

        if($query1 == 1){
            Header("Location: ../nomina.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function delete(){
        $sql = "DELETE nomina WHERE ID_nom = '{this->ID_nom}'";
        $query1= mysqli_query($this->con,$sql);

        
        if($query1 == 1){
            Header("Location: ../nomina.php");
        }else {
            die(mysqli_error($this->con));
        }
    }

    public function edit(){
        
    }

    public function view(){
        $sql = "SELECT * FROM nomina INNER JOIN puesto_trabajo ON nomina.ID_pues = puesto_trabajo.ID_pues";
        $datos = mysqli_query($this->con,$sql);
        

        include('view/nomina_view.php');

    }
    public function viewu(){
        
        $this->ID_asi=$_GET['id'];

        $sql1 = "SELECT * FROM nomina WHERE ID_nom = '$this->ID_asi'";
        $resultados = mysqli_query($this->con,$sql1);

        if(!empty($resultados)){
            $sql = "SELECT * FROM nomina INNER JOIN puesto_trabajo ON nomina.ID_pues = puesto_trabajo.ID_pues";
            $datos = mysqli_query($this->con,$sql);
        
            $row=mysqli_fetch_row($datos);
            include('view/update_view.php');
        }

        
    }
    public function viewg(){
        $sql = "SELECT * FROM nomina INNER JOIN puesto_trabajo ON nomina.ID_pues = puesto_trabajo.ID_pues";
        $datos = mysqli_query($this->con,$sql);
        

        include('view/nominag_view.php');

    }

}