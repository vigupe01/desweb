<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="Intro.php"><?= $menu["titulo"][$lang]?></a>
        </div>
        <div>
          <ul class="nav navbar-nav">
          <li>
            <a href="Intro.php"><?= $menu["inicio"][$lang]?></a>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $menu["tipoJuego"][$lang]?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                  <a href="Junior.php"><?= $submenu["Junior"][$lang]?></a>
                </li>
                <li>
                  <a href="<?php if(isset($_SESSION["jugador"])){ ?>Junior.php <?php }else{ ?>Intro.php<?php } ?>"><?= $submenu["Junior+"][$lang]?></a>
                </li>
            </ul>
          </li>
          <li>
            <a href="Instrucciones.php"><?= $menu["instrucciones"][$lang]?></a>
          </li>
          </ul>
        </div>
      </div>
</nav>