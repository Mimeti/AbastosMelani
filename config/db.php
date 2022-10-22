<?php 
session_start();
$coon = mysqli_connect('localhost','root','','abastos_melani');
if(!$coon){
    echo 'error';
}
