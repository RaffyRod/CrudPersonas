<?php

session_start();
$mysqli = new mysqli ('localhost','root','','personas') or die (mysqli_error($mysqli));


$nombre = '';
$direccion = '';
$telefono = '';
$nacimiento = '';
$cedula = '';
$update = false;
$id = 0;






///Proceso de Guardar 
if (isset($_POST['guardar'])){

        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $nacimiento =$_POST['nacimiento'];
        $cedula =$_POST['cedula'];

        $_SESSION['message'] = "Datos registrados con Exito!";
        $_SESSION['msg_type'] = "success";

        header("location: index.php");

        $mysqli->query("INSERT into datos (nombre, direccion, telefono, nacimiento, cedula) VALUES('$nombre',
        '$direccion',
        '$telefono',
        '$nacimiento',
        '$cedula')") or die ($mysqli->error);

}
 ///Proceso de Borradp
                if(isset($_GET['delete'])) {
                        $id = $_GET['delete'];
                        $mysqli->query("DELETE FROM datos WHERE id=$id") or die ($mysqli->error());

                        $_SESSION['message'] = "Datos Eliminados con Exito!";
                        $_SESSION['msg_type'] = "danger";

                        header("location: index.php");

                }

                ////proceso de Actualizar 


                if(isset($_GET['edit'])){
                        $id = $_GET['edit'];
                        $update = true;
                        $result= $mysqli->query("SELECT * FROM datos WHERE id=$id") or die ($mysqli->error());                      
                       if ($result){
                               $row = $result->fetch_array();
                               $nombre = $row['nombre'];
                               $direccion = $row['direccion'];
                               $telefono = $row['telefono'];
                               $nacimiento = $row['nacimiento'];
                               $cedula = $row['cedula'];
                        
                          
                        //        header("location: index.php");
                       }else{
                               
                       }

                }

                if(isset($_POST['actualizar'])){
                        $id = $_POST['id'];
                        $nombre = $_POST['nombre'];
                        $direccion = $_POST['direccion'];
                        $telefono = $_POST['telefono'];
                        $nacimiento = $_POST['nacimiento'];
                        $cedula = $_POST['cedula'];

                        $mysqli->query("UPDATE datos SET nombre='$nombre',
                        direccion='$direccion',
                        telefono='$telefono',
                        nacimiento='$nacimiento',
                        cedula='$cedula' 
                        WHERE id=$id") or die ($mysqli->error()); 

                        $_SESSION['message'] = "Los datos han sido Actualizados!!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: index.php");

                }