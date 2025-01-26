<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('logo.png') }}" alt="CanyoningBaturraden Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> &nbsp; &nbsp;
      {{-- <span class="brand-text font-weight-light">CanyoningBaturraden</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      {{-- <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Dashboard</li>
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::segment(1) === 'dashboard' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Package</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Package
              </p>
            </a>
          </li>
          <li class="nav-header">Website</li>
          <li class="nav-item">
            <a href="{{ route('carousel.index') }}" class="nav-link {{ Request::segment(1) === 'carousel' ? 'active' : '' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Carousel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('faq.index') }}" class="nav-link {{ Request::segment(1) === 'faq' ? 'active' : '' }}">
              <i class="nav-icon fas fa-question"></i>
              <p>
                FAQ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('testimoni.index') }}" class="nav-link {{ Request::segment(1) === 'testimoni' ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Testimonial
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
