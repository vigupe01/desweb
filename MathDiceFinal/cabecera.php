<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="intro.php"><?= $menu["titulo"][$lang]?></a>
        </div>
        <div>
          <ul class="nav navbar-nav">
          <li>
            <a href="intro.php"><?= $menu["inicio"][$lang]?></a>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $menu["tipoJuego"][$lang]?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                  <a href="junior.php"><?= $submenu["Junior"][$lang]?></a>
                </li>
                <li>
                  <a href="<?php if(isset($_SESSION["jugador"])){ ?>junior.php <?php }else{ ?>intro.php<?php } ?>"><?= $submenu["Junior+"][$lang]?></a>
                </li>
            </ul>
          </li>
          <li>
            <a href="instrucciones.php"><?= $menu["instrucciones"][$lang]?></a>
          </li>
          </ul>
        </div>
      </div>
</nav>