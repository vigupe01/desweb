
<?php 
  include 'lib/Autentication.php';
    include 'ArrayMenu.php';
    include 'lib/Jugador.php';
    
    if($_POST["submit"]=="SalvarDatos"){
     
    $_SESSION['jugador']->setNombre($_POST["nombre"]);
    $_SESSION['jugador']->setApellido($_POST["apellido"]);
    $_SESSION['jugador']->setEdad($_POST["edad"]);
    }
      
    
    
?>
<html>
  <head>
    <title>MathDice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <LINK REL=StyleSheet HREF="/MathDiceFinal/css/estilos.css" TYPE="text/css">
  </head>
  <body background="/MathDiceFinal/imagenes/naranja.jpg">
      <?php include 'Cabecera.php';?>
      <div class="container">
      <div class="row">
        <center><div class="form-group" style="width:400px"> </center>
          <center><form method="post" action="Perfil.php" style="width:400px">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?= $_SESSION["jugador"]->getNombre()?>" required/> <br>
            <label for="apellido">Apellido:</label> <br>
            <input type="text" class="form-control" name="apellido" value="<?= $_SESSION["jugador"]->getApellido()?>" required/> <br>
            <label for="edad">Edad:</label> <br>
            <input type="text" class="form-control" name="edad" value="<?= $_SESSION["jugador"]->getEdad()?>" required/> <br>
            
            <div class="form-group"> 
            <input type="submit" class="button" name="submit" style="width:300px" value="SalvarDatos"/>
            </div>
          </form></center>
          
        </div>
      </div>
    </div>
  </body>