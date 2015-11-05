<html>
    <head>
        <title>Menu</title>
          
    </head>
    <body background="imagenes/fondo.jpg">
        <?php
            if(isset($_POST)){
                
                if($_POST['simbolo']=='+'){
                    echo "hola";
                }
                
                if($_POST['simbolo']=='+' && $_POST['dadouno']==$_POST['hidden1'] && $_POST['dadodos']==$_POST['hidden2']){
                    echo "Dado 1: ". $_POST['dadouno'];
                    echo '<br>';
                    echo "Dado 2: ". $_POST['dadodos'];
                    echo '<br>';
                    $resultado=$_POST['dadouno'] + $_POST['dadodos'];
                    echo "El resultado es ".$_POST['dadouno']." + ".$_POST['dadodos']." = ".$resultado;
                }else{
                    echo "Dado 1: ". $_POST['dadouno'];
                    echo '<br>';
                    echo "Dado 2: ". $_POST['dadodos'];
                    echo '<br>';
                    $resultado=$_POST['dadouno'] - $_POST['dadodos'];
                    echo "El resultado es ".$_POST['dadouno']." - ".$_POST['dadodos']." = ".$resultado;
                    
               
                }
                
            }
        ?>
    </body>
</html>