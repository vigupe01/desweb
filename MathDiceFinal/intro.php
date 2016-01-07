<?php
    include 'arrayMenu.php';
    include 'lib/Jugador.php';
    require_once('conexionBD.php');
    
    session_start();
    
    $baseDatos = new BaseDatos();
    
    
    $jugador1=$_SESSION['jugador'] = new Jugador();
    var_dump($_SESSION['jugador']);
    if($jugadorBd=$baseDatos->comprobarUser($_POST['nombre'])){
                   $jugador1->setNombre($jugadorBd['nombre']);
                   $jugador1->setApellido($jugadorBd['apellido']);
                   $jugador1->setEdad($jugadorBd['edad']);
    }else{
      $baseDatos->insertarUser($_POST['nombre'],$_POST['apellido'],$_POST['edad']);
      
                    $jugador1->setNombre($_POST['nombre']);
                    $jugador1->setApellido($_POST['apellido']);
                    $jugador1->setEdad($_POST['edad']);
    }
    if($_POST["juego"] == "junior"){
        $_SESSION['jugador']->setTipo("junior");
    }else{
        $_SESSION['jugador']->setTipo("junior+");
    }
  
  
    if($_POST["submit"]=="Jugar"){
        header('Location: junior.php');
    }
?>
<!DOCTYPE html>
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
    <?php include 'cabecera.php';?>
    <CENTER><img src="/MathDiceFinal/imagenes/mathdice.png"></img></CENTER>
  
  
    <?php //formulario con la recogida de datos?>
  
    <div class="container">
      <div class="row">
        <center><div class="form-group" style="width:400px"> </center>
          <center><form method="post" action="intro.php" style="width:400px">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value=""/> <br>
            <label for="apellido">Apellido:</label> <br>
            <input type="text" class="form-control" name="apellido" value=""/> <br>
            <label for="edad">Edad:</label> <br>
            <input type="text" class="form-control" name="edad" value=""/> <br>
            <div class="form-group"> 
            <label for="tipojuego">Tipo de Juego:</label> <br>
            <label for="junior">Junior:</label> 
            <input type="radio" name="juego" value="junior" checked/> 
            <label for="junior+">Junior+:</label>
            <input type="radio" name="juego" value="junior+"/><br>
            </div>
            <div class="form-group"> 
            <input type="submit" class="button" name="submit" style="width:300px" value="Jugar"/>
            </div>
          </form></center>
          <br><CENTER><p href="#" class="button" style="width:300px" onclick = "location='/MathDiceFinal/instrucciones.php'"/>Instrucciones</p></CENTER>
        </div>
      </div>
    </div>
  </body>
</html>