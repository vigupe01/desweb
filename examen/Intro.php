<?php
    include 'ArrayMenu.php';
    include 'lib/Jugador.php';
    
    session_start();
    if($_POST["submit"]){
    $_SESSION['jugador'] = new Jugador();
    $_SESSION['jugador']->setNombre($_POST["nombre"]);
    $_SESSION['jugador']->setApellido($_POST["apellido"]);
    $_SESSION['jugador']->setEdad($_POST["edad"]);
    
    if($_POST["juego"] == "junior"){
        $_SESSION['jugador']->setTipo("junior");
    }else{
        $_SESSION['jugador']->setTipo("junior+");
    }
  
  
    if($_POST["submit"]=="Jugar"){
        header('Location: Junior.php');
    }
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
    <?php include 'Cabecera.php';?>
    <CENTER><img src="/MathDiceFinal/imagenes/mathdice.png"></img></CENTER>
  
  
    <?php //formulario con la recogida de datos?>
  
    <div class="container">
      <div class="row">
        <center><div class="form-group" style="width:400px"> </center>
          <center><form method="post" action="Intro.php" style="width:400px">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="" required/> <br>
            <label for="apellido">Apellido:</label> <br>
            <input type="text" class="form-control" name="apellido" value="" required/> <br>
            <label for="edad">Edad:</label> <br>
            <input type="text" class="form-control" name="edad" value="" required/> <br>
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
          <br><CENTER><p href="#" class="button" style="width:300px" onclick = "location='/MathDiceFinal/Instrucciones.php'"/>Instrucciones</p></CENTER>
        </div>
      </div>
    </div>
  </body>
</html>