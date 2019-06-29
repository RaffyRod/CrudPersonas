<!DOCTYPE html>

<html>
        <head>
                <title>Primer CRUD en PHP </title>
                <script src="jquery/jquery.js"></script>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/stilos.css">
                <link href="https://fonts.googleapis.com/css?family=Inconsolata|Modak|Oswald|Pacifico|Source+Code+Pro" rel="stylesheet">
        </head>

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







        <div class="container">
            <body>

            <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="registros.php">Ver Registros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="proyecto.php">Sobre el Proyecto</a>
  </li>
  
</ul>
         

               



                </br></br>
                   <center> <h1 class="welcome"> Sea Bienvenido</h1> </center>
                   <center> <h1 class="titulo">Ingrese sus Datos Personales</h1> </center>
                   </br></br>

                        <div class="row justify-content-center">
                            <form action="procesos.php"  method="POST">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <div class="form-group">
                                    <label>Nombre:</label>
                                    <input type="text" name="nombre"  class="form-control "  value="<?php echo $nombre; ?>"
                                    placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                    <label>Direccion:</label>
                                    <input type="text" name="direccion" class="form-control" value="<?php echo $direccion; ?>"
                                    placeholder="Direccion">
                                    </div>
                                    <div class="form-group">
                                    <label>Telefono:</label>
                                    <input type="text" name="telefono" class="form-control"  value="<?php echo $telefono; ?>"
                                    placeholder="Telefono">
                                    </div>
                                    <div class="form-group">
                                    <label>Fecha de Nacimiento:</label>
                                    <input type="date" name="nacimiento"   class="form-control" value="<?php echo $nacimiento; ?>"
                                     placeholder="Nacimiento">
                                    </div>
                                    <div class="form-group">
                                    <label>Cedula:</label>
                                    <input type="text" name="cedula" class="form-control" value="<?php echo $cedula; ?>"
                                    placeholder="Cedula">
                                    </div>
                                    <div class="form-group">

                                    <?php
                                    if($update == true):
                                      ?>
                                      <button type="submit" name="actualizar" class="btn btn-info">Actualizar</button>
                                    <?php else: ?>
                                    
                                    <button type="submit" name="guardar"  class="btn btn-success">Guardar</button>

                                    <?php endif; ?>
                                    </div>    
                                    
                                    
                            
                            </form>
                            </div>

                         
                            
            </body>
            </div>

           
</html>