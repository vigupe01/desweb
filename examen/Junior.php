<?php

    include "lib/Juego.php";
    include "lib/Jugador.php";
    
    
    
    //si jugador esta vacio devolveremos a intro para que rellene el formulario
    
      
      //creamos el ojeto juego con sus respectivos dados
      $juego = new Juego();
      
      $resultadodadodeseis1 = $juego->dado(1,6);
      $resultadodadodeseis2 = $juego->dado(1,6);
      $resultadodadodeseis3 = $juego->dado(1,6);
      $resultadodadodetres1 = $juego->dado(1,3);
      $resultadodadodetres2 = $juego->dado(1,3);
      $resultadododecaedro = $juego->dado(1,12);
    
    
      // guardamos el valor de resultado en calcular para mas tarde comprobar dicho valor con el valor del dodecaedro y si es asi sumar un punto al jugador
      $_SESSION["calcular"] = $_POST["resultado"];

        if($_POST["dodecaedro"] == $_SESSION["calcular"]){
            //$_SESSION["jugador"]->setPuntos(0);
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
    <LINK REL=StyleSheet HREF="/MathDiceFinal/css/estiloPuntu.css" TYPE="text/css">
    <script src="js/LogicaDados.js"></script>
  </head>
  <body background="/MathDiceFinal/imagenes/naranja.jpg">
    <?php
      include "ArrayMenu.php";
      include "Cabecera.php";
    ?>
     <div class="container-fluid" style="text-align: ritgh;">
            <div class="row">
              <div class="col-md-2"> 
              <?php //recuperamos los datos del objeto jugador?>
                <p href="#" class="button" style="width:300px"/><?php echo "Nombre: ".$_SESSION["jugador"]->getNombre()."<br>"."Apellidos: ".$_SESSION["jugador"]->getApellido()."<br>"."Edad: ".$_SESSION["jugador"]->getEdad()."<br>"."Puntuación: ".$_SESSION["jugador"]->getPuntos()."";?></p>
              </div>
              <div class="col-md-2">
                <img src="/MathDiceFinal/imagenes/mathdice.png" style="margin-left: 20em"></img>
              </div>
            </div>
     </div>
     <?php //al clicar sobre las imagenes guardaremos el valor que el dado?>
      <div class="row">
        <div class="col-sm-2"><br> 
        <img src="imagenes/<?php echo $resultadodadodeseis1 ?>.png" onClick="dadoDeSeis1(<?=$resultadodadodeseis1?>)"></div>
        <div class="col-sm-2"><br> 
        <img src="imagenes/<?php echo $resultadodadodeseis2 ?>.png" onClick="dadoDeSeis2(<?=$resultadodadodeseis2?>)"></div>
        <div class="col-sm-2"><br> 
        <img src="imagenes/<?php echo $resultadodadodeseis3 ?>.png" onClick="dadoDeSeis3(<?=$resultadodadodeseis3?>)"></div>
        <div class="col-sm-2"><br> 
        <img src="imagenes/<?php echo $resultadodadodetres1 ?>.png" onClick="dadoDeTres1(<?=$resultadodadodetres1?>)"></div>
        <div class="col-sm-2"><br> 
        <img src="imagenes/<?php echo $resultadodadodetres2 ?>.png" onClick="dadoDeTres2(<?=$resultadodadodetres2?>)"></div>
        <div class="col-sm-2">  
        <img src="imagenes/dode<?php echo $resultadododecaedro ?>.png"></div>
      </div>
      
      <div class="row">
        <form method="post" action="Junior.php">
            <div class="col-sm-2"><br> 
              <img class="signo" src="imagenes/suma.png"  style="margin-left:200px" onClick="meterSigno('+')"> 
            </div>
            <div class="col-sm-2"><br> 
              <img class="signo" src="imagenes/resta.png"  style="margin-left:200px" onClick="meterSigno('-')"> 
            </div>
            <?php //dependiendo del tipo d ejuego se añadiran + y - o + - * / ?>
          <?php if($_SESSION["jugador"]->getTipo() == "junior+"){?>
            <div class="col-sm-2"><br> 
              <img class="signo" src="imagenes/multiplicacion.png" style="margin-left:200px" onClick="meterSigno('*')"> 
            </div>
            <div class="col-sm-2"><br> 
              <img class="signo" src="imagenes/division.png" style="margin-left:200px" onClick="meterSigno('/')"> 
            </div>
          <?php } ?>
              <?php // guardamos el valor del dodecaedro para comprobar mas tarde si coincide con el resultado de la operacion?>
              <input type="hidden" name="dodecaedro" value="<?=$resultadododecaedro?>"/>
        </div>
        <div class="row">
          <div class="col-md-2"> 
          <br>
          <br>
                  <input type="text" id="operacion" style="margin-left:725px" name="resultado"/>
          </div>
        </div>
        <div class="row">
          <br>
          <div class="col-sm-2"> 
          <br>
          <?php //al clicar mandaremos los valores del formulario por post lo que realizara la operacion que tenga dentro del campo operacion y nos devolvera el resultado?>
              <input type="submit" class="button" name="submit" style="margin-left:700px" value="Comprobar"  onClick="comprobarResultado()"/>
            </form>
      </div>
  </body>
  
</html>