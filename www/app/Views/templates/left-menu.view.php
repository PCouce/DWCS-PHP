<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo $_ENV['host.folder'] ?>" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'inicio' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Inicio
              </p>
            </a>
          </li> 
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php echo (in_array($_SERVER['REQUEST_URI'], [$_ENV['host.folder'] . 'demo-proveedores'])) ? 'menu-open' : '';?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panel de control
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $_ENV['host.folder'] ?>demo-proveedores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'demo-proveedores' ? 'active' : ''; ?>">
                  <i class="fas fa-laptop-code nav-icon"></i>
                  <p>Demo Proveedores</p>
                </a>
              </li>              
            </ul>
          </li>

            <li class="nav-item <?php echo (in_array($_SERVER['REQUEST_URI'], [$_ENV['host.folder'] . 'ejercicios1-operadores'])) ? 'menu-open' : '';?>">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p>
                        Ejercicios Operadores
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo $_ENV['host.folder'] ?>ejercicio1-operadores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'ejercicio1-operadores' ? 'active' : ''; ?>">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Ejercicio 1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_ENV['host.folder'] ?>ejercicio2-operadores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'ejercicio2-operadores' ? 'active' : ''; ?>">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Ejercicio 2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_ENV['host.folder'] ?>ejercicio3-operadores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'ejercicio3-operadores' ? 'active' : ''; ?>">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Ejercicio 3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_ENV['host.folder'] ?>ejercicio4-operadores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'ejercicio4-operadores' ? 'active' : ''; ?>">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Ejercicio 4</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_ENV['host.folder'] ?>ejercicio5-operadores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'ejercici5-operadores' ? 'active' : ''; ?>">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Ejercicio 5</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_ENV['host.folder'] ?>ejercicio6-operadores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'ejercicio6-operadores' ? 'active' : ''; ?>">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Ejercicio 6</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_ENV['host.folder'] ?>ejercicio7-operadores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'ejercicio7-operadores' ? 'active' : ''; ?>">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Ejercicio 7</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_ENV['host.folder'] ?>ejercicio8-operadores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'ejercicio8-operadores' ? 'active' : ''; ?>">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Ejercicio 8</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $_ENV['host.folder'] ?>ejercicio9-operadores" class="nav-link <?php echo $_SERVER['REQUEST_URI'] === $_ENV['host.folder'] . 'ejercicio9-operadores' ? 'active' : ''; ?>">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Ejercicio 9</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->