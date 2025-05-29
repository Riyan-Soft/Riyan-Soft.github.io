      <!-- Header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SSD</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Servi</b>Salud</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                </a>
              </li>
            <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img
                    src="html/dist/img/black bulls.jpg"
                    class="user-image"
                    alt="User Image" />
                  <span class="hidden-xs">
                    <?php //inicio
                    echo $nombre_usuario . " " . $apellido_usuario
                    //cierre 
                    ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header" id="user-header-color">
                    <img
                      src="html/dist/img/black bulls.jpg"
                      class="img-circle"
                      alt="User Image" />
                    <p>
                      <?php //inicio
                      echo "Bienvenido <br>" . $nombre_usuario . " " . $apellido_usuario
                      //cierre 
                      ?>
                      <small class="textitos"> Cerrar Sesión solo por aquí</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer" id="user-footer-changes">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Click Me</a>
                    </div>
                    <div class="pull-right">
                      <a href="../controllers/cerrar_sesion.php" class="btn btn-default btn-flat"> Cerrar Sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="html/dist/img/black bulls.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php //inicio
                  echo $nombre_usuario . " " . $apellido_usuario
                  //cierre 
                  ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Navegación principal</li>
            <?php
            // 1 = ADMIN  -- 2 = USUARIO NORMAL
            if ($privilegios_usuario == 1) {
            ?>
              <!-- Inicio Escribimos el html -->
              <li class="active">
                <a href="dashboard.php"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-user-plus"></i> <span>Clientes</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="panel_clientes_registrar.php"><i class="fa fa-circle-o"></i>Registrar</a>
                  </li>
                  <li>
                    <a href="panel_clientes_reportes.php"><i class="fa fa-circle-o"></i> Reportes</a>
                  </li>
                  <li>
                    <a href="panel_clientes_consultas.php"><i class="fa fa-circle-o"></i>Consultas</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-cube"></i> <span>Productos</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="panel_productos_registrar.php"><i class="fa fa-circle-o"></i> Registrar </a>
                  </li>
                  <li>
                    <a href="panel_productos_reportes.php"><i class="fa fa-circle-o"></i> Reportes </a>
                  </li>
                  <li>
                    <a href="panel_productos_consultas.php"><i class="fa fa-circle-o"></i> Consultas </a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-users"></i> <span>Usuarios</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="panel_usuarios_registrar.php"><i class="fa fa-circle-o"></i> Registrar</a>
                  </li>
                  <li>
                    <a href="panel_usuarios_reportes.php"><i class="fa fa-circle-o"></i> Reportes </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="panel_venta.php"><i class="fa fa-shopping-cart"></i> <span>Ventas</span> </a>
              </li>
              <!-- Fin del escribir del html -->
            <?php
            } else {
            ?>
              <!-- Inicio Escribimos el html -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-user-plus"></i> <span>Clientes</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="panel_clientes_registrar.php"><i class="fa fa-circle-o"></i>Registrar</a>
                  </li>
                  <li>
                    <a href="panel_clientes_reportes.php"><i class="fa fa-circle-o"></i> Reportes</a>
                  </li>
                  <li>
                    <a href="panel_clientes_consultas.php"><i class="fa fa-circle-o"></i>Consultas</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-cube"></i> <span>Productos</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="#"><i class="fa fa-circle-o"></i> Registrar </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-circle-o"></i> Reportes </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-circle-o"></i> Consultas </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="panel_venta.php"><i class="fa fa-shopping-cart"></i> <span>Ventas</span> </a>
              </li>
              <!-- Fin del escribir del html -->
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
