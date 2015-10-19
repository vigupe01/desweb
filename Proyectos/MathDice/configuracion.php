
        
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
        
        <div class="container-fluid">
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
        
    <div class="container-fluid">
        <div class="row">
            <?php //for($i=0;$i<=2;$i++){ ?>
            <div class="col-md-2">
                <img src="imagenes/<?php echo dado(1,6); ?>.png"/>
            </div>
            <?php //}
            ?>
            <?php// for($i=0;$i<=1;$i++){ ?>
           <!-- <div class="col-md-2">
                <img src="imagenes/<?php echo dado(1,3); ?>.png"/>
            </div>-->
            <?php //}
            ?>
        </div>
    </div>
