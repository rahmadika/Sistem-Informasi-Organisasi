<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i> Menu</a>
          </li>
        </ul>
    
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('dashboard.index') }}" class="brand-link">
          <img src="{{ asset('img/RAL.png') }}" alt="RAL Logo" class="brand-image-xl img-circle"
               style="opacity: .8">
          <span class="brand-text font-weight-light">Ream A Leizen</span>
        </a>
    
        <!-- Sidebar -->
        {{-- @if( auth()->check() ) --}}
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              {{-- @if($user->profile->avatar)
              <img class="profile-menu" src="{{ Storage::url(auth()->user()->profile->avatar) }}" width="30px" />
              @else
              <img class="profile-menu" src="{{ asset('img/profile/default.png') }}" width="30px" />
              @endif --}}
              {{-- @if(auth()->user()->profile->avatar)
                        <img src="{{ asset('img/profile') }}/{{ auth()->user()->profile->avatar }}" width="100%" />
                    @else
                        <img src="{{ asset('img/profile/default.png') }}" width="100%" />
                    @endif --}}
              {{-- <img src="{{ auth()->user()->profile->avatar }}" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info">
              <a href="#" class="d-block">Hi {{ auth()->user()->name }} </a>
                {{-- {{ auth()->user()->name }} --}}
            </div>
          </div>
          {{-- @endif --}}
          <!-- Sidebar Menu -->
          @include('layouts.menudashboard')
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{-- {{ $title }} --}}</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <div class="content">
          @yield('content')
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Powered By : <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->
    
    <!-- REQUIRED SCRIPTS -->
    
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
  
  
  
  
    <!--script modal -->
    <script>
      
    </script>
    
    </body>