<!DOCTYPE html>

<html>
<head>
                <title>Registros </title>
                <script src="jquery/jquery.js"></script>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/bootstrap.css">
                <link rel="stylesheet" href="css/stilos.css">
                <link href="https://fonts.googleapis.com/css?family=Inconsolata|Modak|Oswald|Pacifico|Source+Code+Pro" rel="stylesheet">
        </head>

        
        <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="proyecto.php">Sobre el Proyecto</a>
  </li>
  
</ul>
        
        
       
      <center><h1>Registros Disponibles</h1>
      
</center> 



</br> </br>
   <body>
   <?php require_once 'procesos.php' ; ?>
   
   
                <?php
                if(isset($_SESSION['message'])): ?>

                  <div class="alert alert-<?=$_SESSION['msg_type']?>">

                  <?php

                  echo $_SESSION['message'];
                  unset($_SESSION['message']);
                  ?>
                  </div>

                  <?php endif ?>






   <?php
   $mysqli = new mysqli ('localhost','root','','personas') or die (mysqli_error($mysqli));
   $result = $mysqli -> query("SELECT * FROM datos") or die (mysqli_error($mysqli->error));
   
   ?>

   <div class="container">

<div class="row justify-content-center">
            <table class="table table-hover table-dark">
                    <thead>
                            <tr>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Cedula</th>
                                    <th colspan="2">Accion</th>
                            
                            </tr>
                    </thead>
            <?php
            while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['direccion']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['nacimiento']; ?></td>
                    <td><?php echo $row['cedula']; ?></td>
                    <td>
                        <a href="index.php?edit=<?php echo $row['id'];?>"
                      class="btn btn-info">Editar</a>
                      <a href="procesos.php?delete=<?php echo $row['id'];?>"
                      class="btn btn-danger">Eliminar</a>

                    </td>
                
                </tr>
                     <?php endwhile; ?>
            </table>
        
</div>
   
</div>
   </body>



</html>