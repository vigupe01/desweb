<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body background="imagenes/fondo.jpg">
         <?php
            if(isset($_POST)){
                
                if($_POST['operador']=='+' && $_POST['dadouno']==$_POST['hidden1'] && $_POST['dadodos']==$_POST['hidden2']){
                    echo "<h1>Dado 1: ". $_POST['dadouno']."</h1>";
                    echo '<br>';
                    echo "<h1>Dado 2: ". $_POST['dadodos']."</h1>";
                    echo '<br>';
                    $resultado=$_POST['dadouno'] + $_POST['dadodos'];
                    echo "<h1>El resultado es ".$_POST['dadouno']." ".$_POST['operador']." ".$_POST['dadodos']." = ".$resultado."</h1>";
                }else if($_POST['operador']=='-' && $_POST['dadouno']==$_POST['hidden1'] && $_POST['dadodos']==$_POST['hidden2']){
                    echo "<h1>Dado 1: ". $_POST['dadouno']."</h1>";
                    echo '<br>';
                    echo "<h1>Dado 2: ". $_POST['dadodos']."</h1>";
                    echo '<br>';
                    $resultado=$_POST['dadouno'] - $_POST['dadodos'];
                    echo "<h1>El resultado es ".$_POST['dadouno']." ".$_POST['operador']." ".$_POST['dadodos']." = ".$resultado."</h1>";
                    
               
                }else{
                    echo "<h1>Error al introducir datos</h1>";
                }
                
            }
        ?>
    </body>
</html>