<!DOCTYPE html>
<html>
<head>
	<title>Estoque Simples</title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<link rel="stylesheet" href="/../bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="/../bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="/../bower_components/Ionicons/css/ionicons.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="/../dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  	<link rel="stylesheet" href="/../dist/css/skins/skin-blue.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Estoque Simples</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="/../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Yuri Neves</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="/../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Yuri do Valle Neves
                  <small>Membro desde 19/12/2017</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/profile/1" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sair</a>
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

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Yuri do Valle Neves</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Administrador</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
          <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Cadastros Básicos</span>
             <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/suppliers"><i class="fa fa-circle-o"></i> Fornecedores</a></li>
            <li><a href="/clients"><i class="fa fa-circle-o"></i> Clientes</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-laptop"></i> <span>Estoque</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/categories"><i class="fa fa-circle-o"></i> Categorias</a></li>
            <li><a href="/products"><i class="fa fa-circle-o"></i> Produtos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Movimentos</span>
             <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/products_entries"><i class="fa fa-circle-o"></i> Entradas</a></li>
            <li><a href="/products_outputs"><i class="fa fa-circle-o"></i> Saídas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Relatórios</span>
             <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/reports/products_entries"><i class="fa fa-circle-o"></i> Entradas</a></li>
            <li><a href="/reports/products_outputs"><i class="fa fa-circle-o"></i> Saídas</a></li>
            <li><a href="/reports/products"><i class="fa fa-circle-o"></i> Produtos</a></li>
            <li><a href="/reports/products_suppliers"><i class="fa fa-circle-o"></i> Por Fornecedores</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Usuários</span>
             <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/users"><i class="fa fa-circle-o"></i> Listagem</a></li>
            <li><a href="/user/add"><i class="fa fa-circle-o"></i> Novo Usuário</a></li>
          </ul>
        </li>
        <li>
          <a href="/contact">
            <i class="fa fa-question-circle"></i> <span>Contato</span>
          </a>
        </li>
        <li>
          <a href="/contact">
            <i class="fa fa-group"></i> <span>Suporte</span>
          </a>
        </li>
        <li>
          <a href="/help">
            <i class="fa fa-plus-square"></i> <span>Ajuda</span>
            <small class="label pull-right bg-red">PDF</small>
          </a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">
    	@yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Sistema de fidelidade
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Yuri Neves</a>.</strong> Todos direitos reservados.
  </footer>
  	<!-- /.control-sidebar -->
  	<!-- Add the sidebar's background. This div must be placed
  	immediately after the control sidebar -->
  	<div class="control-sidebar-bg"></div>
  	<!-- jQuery 3 -->
	<script src="/../bower_components/jquery/dist/jquery.min.js"></script>
  @stack('scripts')
	<!-- Bootstrap 3.3.7 -->
	<script src="/../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- AdminLTE App -->
	<script src="/../dist/js/adminlte.min.js"></script>
</body>
</html>