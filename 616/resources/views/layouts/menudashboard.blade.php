<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ route('dashboard.index') }}"  class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-newspaper"></i>
          <p>
            Berita
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('news.create')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Berita Baru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('news.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Daftar Berita</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-handshake"></i>
          <p>
            Acara
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('acaras.create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Acara Baru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('acaras.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Daftar Acara</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{ route('transactions.index') }} " class="nav-link">
          <i class="nav-icon fas fa-money-bill-wave"></i>
          <p>
            Keuangan
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('anggotas.index') }}" class="nav-link">
          <i class="nav-icon fas fa-smile"></i>
          <p>
            Anggota
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('register.index') }}" class="nav-link">
          <i class="nav-icon fas fa-eye"></i>
          <p>
            User Management
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('logout')}}" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>
            Log Out
          </p>
        </a>
      </li>
    </ul>
</nav>