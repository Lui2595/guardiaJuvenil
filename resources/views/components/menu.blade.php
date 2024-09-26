 <!-- Sidebar -->
 <div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="{{ url('/') }}" class="logo d-flex justify-content-center">
          <img
            src="/frontTheme/images/logo.png"
            alt="navbar brand"
            class="navbar-brand"
            height="50"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
            <li class="nav-item">
                <a href="{{ route('home') }}">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
            </li>
            @if(Auth::user()->roll == 'superadmin')
                <li class="nav-item">
                    <a href="{{ route('usuarios.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Lista de Usuarios</p>
                    </a>
                </li>
            @endif
          {{-- <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#dashboard"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="dashboard">
              <ul class="nav nav-collapse">
                <li>
                  <a href="../demo1/index.html">
                    <span class="sub-item">Dashboard 1</span>
                  </a>
                </li>
              </ul>
            </div>
          </li> --}}
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Elementos</h4>
          </li>
          @if(in_array(Auth::user()->roll, ['admin', 'superadmin']))
            <li class="nav-item">
                <a href="{{ route('elementos.index') }}">
                <i class="fas fa-home"></i>
                <p>Lista de Elementos</p>
                </a>
            </li>
          @endif

        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->
