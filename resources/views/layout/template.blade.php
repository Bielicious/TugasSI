<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aranara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aranara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  </head>
  <body class="bg-light">
    <aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
  
          <div id="main-menu" class="main-menu collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li class="active">
                      <a href="home"> <i class="menu-icon fa fa-home"></i>Dashboard </a>
                  </li>
                  <h3 class="menu-title">pegawai&customer</h3><!-- /.menu-title -->
                  <li class="menu-item-has-children dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male""></i>Pegawai</a>
                      <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-id-badge"></i><a href="{{url('pegawai/create')}}">Daftar sebagai Pegawai</a></li>                            
                          <li><i class="fa fa-id-badge"></i><a href="{{url('pegawai')}}">Data Pegawai</a></li>                                                    
                      </ul>
                  </li>
                  <li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>Customer</a>
                      <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-id-badge"></i><a href="tables-basic.html">Data customer</a></li> 
                      </ul>
                  </li>
                 
  
                  <h3 class="menu-title">Pergudangan</h3><!-- /.menu-title -->
  
                  <li>
                      <a href="{{url('barang/create')}}"> <i class="menu-icon fa fa-tasks"></i>Tambah Barang</a>
                  </li>
                  <li>
                      <a href="{{url('barang')}}"> <i class="menu-icon fa fa-archive"></i>List Barang</a>
                  </li>
                  </li>
  
  
                  <h3 class="menu-title">pengiriman</h3><!-- /.menu-title -->
  
                  </li>
                  <li>
                      <a href="widgets.html"> <i class="menu-icon fa fa-truck"></i>Pengiriman</a>
                  </li>
                  <li>
                      <a href="widgets.html"> <i class="menu-icon fa fa-building-o"></i>Outlet</a>
                  </li>
                  <li>
                      <a href="widgets.html"> <i class="menu-icon fa fa-road"></i>Rute</a>
                  </li>
                  <li>
                      <a href="widgets.html"> <i class="menu-icon fa fa-calendar-o"></i>Jadwal</a>
                  </li>
              </ul>
          </div><!-- /.navbar-collapse -->
      </nav>
  </aside><!-- /#left-panel -->
    <main class="container">
        @if (Session::has('success'))
            <div class="pt-3">
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            </div>            
        @endif
        @yield('konten')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  
  
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
  </body>
</html>