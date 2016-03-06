    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'home'), array('class' => 'navbar-brand')); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Clientes', array('controller' => 'clientes', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nuevo Cliente', array('controller' => 'clientes', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sesiones<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Sesiones', array('controller' => 'sesiones', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nueva Sesion', array('controller' => 'sesiones', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agencias<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Agencias', array('controller' => 'agencias', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nueva Agencia', array('controller' => 'agencias', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Circustancias Medicas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Circustancias Medicas', array('controller' => 'CircustanciasMedicas', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nueva Circustancia Medica', array('controller' => 'CircustanciasMedicas', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hoteles<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Hoteles', array('controller' => 'hoteles', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nuevo Hotel', array('controller' => 'hoteles', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Idiomas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Idiomas', array('controller' => 'Idiomas', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nuevo Idioma', array('controller' => 'Idiomas', 'action' => 'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opiniones<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Opiniones', array('controller' => 'Opiniones', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nueva Opinion', array('controller' => 'Opiniones', 'action' => 'add')); ?></li>
              </ul>
            </li><li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paises<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Paises', array('controller' => 'paises', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nuevo Pais', array('controller' => 'paises', 'action' => 'add')); ?></li>
              </ul>
            </li><li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Terapeutas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Terapeutas', array('controller' => 'Terapeutas', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nuevo Terapeutas', array('controller' => 'Terapeutas', 'action' => 'add')); ?></li>
              </ul>
            </li><li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tratamientos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Tratamientos', array('controller' => 'tratamientos', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Nuevo Tratamiento', array('controller' => 'tratamientos', 'action' => 'add')); ?></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
