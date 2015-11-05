
        
        <?php
               
                $lang="es";
                $menu=array(
                    "titulo"=>array(
                        "es"=>"Math Dice",
                        "en"=>"Math Dice"
                    ),
                    "portada"=>array(
                        "es"=>"Inicio",
                        "en"=>"Home"
                    ),
                    "instrucciones"=>array(
                        "es"=>"Instrucciones",
                        "en"=>"Instructions"
                    ),
                    "tiposJuego"=>array(
                        "es"=>"Tipos juego",
                        "en"=>"Game choice",
                        "submenu"=>array(
                            "tipo1"=>array(
                                "es"=>"Juego tradicional",
                                "en"=>"Traditional game",
                            ),
                            "tipo2"=>array(
                                "es"=>"Juego modificado",
                                "en"=>"Game modified",
                            ),
                            "tipo3"=>array(
                                "es"=>"Juego niños",
                                "en"=>"Kid game",
                            )
                        )
                    )
                    
                );
                    
                foreach ($menu as $clave => $valor){
                    if(isset($valor['submenu'])){
                        foreach($valor as $clave => $valor){
                            
                        }
                        
                        
                    }
                };
                      
             
                ?>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#"><?php print_r($menu["titulo"][$lang]);?></a>
            </div>
            <div>
                
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><?php print_r($menu["portada"][$lang]);?></a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print_r($menu["tiposJuego"][$lang]);?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><?php print_r($valor["tipo1"][$lang]);?></a></li>
                            <li><a href="#"><?php print_r($valor["tipo2"][$lang]);?></a></li>
                            <li><a href="#"><?php print_r($valor["tipo3"][$lang]);?></a></li>
                          </ul>
                        </li>
                        <li><a href="#"><?php print_r($menu["instrucciones"][$lang]);?></a></li>
                </ul>
                 
             
            </div>
          </div>
        </nav>
        
        
       <!-- <div class="container-fluid">
          <div class="row">
            <div class="col-md-2"><img src="imagenes/1.png"></img></div>
            <div class="col-md-2"><img src="imagenes/2.png"></img></div>
            <div class="col-md-2"><img src="imagenes/3.png"></img></div>
            <div class="col-md-2"><img src="imagenes/4.png"></img></div>
            <div class="col-md-2"><img src="imagenes/5.png"></img></div>
            <div class="col-md-2"><img src="imagenes/6.png"></img></div>
          </div>
        </div>
        
        <br>
        <?php include "funciones.php";?>
        <?php 
        
        $resultadodado1=dado(1,6); 
        $resultadodado2=dado(1,6);?>
        
       <div class="container-fluid">
        <div class="row">
            <?php //for($i=0;$i<=2;$i++){ ?>
             <div class="col-md-2">
                <img src="imagenes/<?php //echo dado(1,6); ?>.png"/>
             </div>
             <?php //} ?>
             
             <?php //for($i=0;$i<=1;$i++){ ?>
               <div class="col-md-2">
                <img src="imagenes/<?php //echo dado(1,3); ?>.png"/>
            </div>
            <?php// }
            ?>
               <div class="col-md-2">
                <img src="imagenes/dodecaedro<?php //echo dado(1,12); ?>.png"/>
            </div>
        </div>
        </div>-->
        
    <div class="container-fluid">
        <div class="row">
            <?php //for($i=0;$i<=2;$i++){ ?>
            <div class="col-md-2"
                <b><h2><p>Dado 1</p></h2></b>
                <img src="imagenes/<?php echo $resultadodado1; ?>.png"/>
            </div>
            <div class="col-md-2">
                <b><h2><p>Dado 2</p></h2></b>
                <img src="imagenes/<?php echo $resultadodado2; ?>.png"/>
            </div>
            <div class="col-md-2">
                <div class="container">
                    <form style="width:400px" action="resultado.php" method="post">
                        <div class="form-group">
                            <br>
                            <br>
                          <label for="d1">Dado 1:</label>
                          <input type="hidden" name="hidden1" value="<?php echo $resultadodado1?>">
                          <input type="dadouno" class="form-control" name="dadouno" id="d1" placeholder="dado 1">
                        </div>
                        <input type="radio" name="operador" value="+">+ o
                        <input type="radio" name="operador" value="-">- 
                        <div class="form-group">
                          <label for="d2">Dado 2:</label>
                          <input type="hidden" name="hidden2" value="<?php echo $resultadodado2?>">
                          <input type="dadodos" class="form-control" name="dadodos"id="d2" placeholder="dado 2">
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                </div>
            </div>
            <?php //}
            ?>
            
        </div>
    </div>
