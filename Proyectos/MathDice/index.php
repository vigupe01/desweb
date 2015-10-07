




<html>
    <head>
          <title>Menu</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <?php
                
                $lang="en";
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
  
        
    </body>
</html>