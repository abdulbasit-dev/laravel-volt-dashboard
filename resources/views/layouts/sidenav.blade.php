<nav id="sidebarMenu" class="sidebar d-lg-block collapse bg-gray-800 text-white" data-simplebar>
  <div class="sidebar-inner px-2 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Hi, Jane</h2>
          <a href="/login" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
              </path>
            </svg>
            Sign Out
          </a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
          <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>
    <ul class="nav flex-column pt-md-0 pt-3">
      <li class="mb-3">
        <a href="/dashboard" class="nav-link d-flex align-items-center">
          <img src="{{ asset('assets/img/favicon/logomark.min.svg') }}" style="width: 3rem" alt="">
          <img src="{{ asset('assets/img/favicon/logotype.min.svg') }}" class="ms-3" alt="">
        </a>
      </li>

      <li class="nav-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="nav-link d-flex">
          <span class="sidebar-icon">
            <svg class="icon icon-sm me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
              </path>
            </svg>
          </span>
          <span class="sidebar-text" style="padding-top: 2px">Home</span>
        </a>
      </li>

      {{-- example of dropdown item with active class for each item in it --}}
      {{-- <li class="nav-item">
        <span class="nav-link d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#submenu-laravel" aria-expanded="false">
          <span>
            <span class="sidebar-icon"><i class="fab fa-laravel me-2" style="color: {{ env('APP_COLOR') }};"></i></span>
            <span class="sidebar-text" style="color: {{ env('APP_COLOR') }};">Sales
              Representative</span>
          </span>
          <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg></span>
        </span>
        <div class="multi-level {{ Request::routeIs('sale-representatives.*') ? '' : 'collapse' }}" role="list" id="submenu-laravel" aria-expanded="false" style="">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::routeIs('sale-representatives.index') ? 'active' : '' }}">
              <a href="{{ route('sale-representatives.index') }}" class="nav-link">
                <span class="sidebar-text">All SR</span>
              </a>
            </li>
            <li class="nav-item {{ Request::routeIs('sale-representatives.create') ? 'active' : '' }}">
              <a href="{{ route('sale-representatives.create') }}" class="nav-link">
                <span class="sidebar-text">Add New SR</span>
              </a>
            </li>
            <li class="nav-item {{ Request::routeIs('sale-representatives.map-subscriber') ? 'active' : '' }}">
              <a href="{{ route('sale-representatives.map-subscriber') }}" class="nav-link">
                <span class="sidebar-text">Map SR To Subscriber</span>
              </a>
            </li>
          </ul>
        </div>
      </li> --}}



      <li class="nav-item">
        <span class="nav-link d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#submenu-laravel1" aria-expanded="false">
          <span>
            <span class="sidebar-icon"><i class="fab fa-laravel me-2"></i></span>
            <span class="sidebar-text">Volt Source</span>
          </span>
          <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg></span>
        </span>
        <div class="multi-level" role="list" id="submenu-laravel1" aria-expanded="false" style="">
          <ul class="flex-column nav">
            <li class="nav-item">
              <a href="https://volt-pro-laravel-admin-dashboard.updivision.com/dashboard" class="nav-link">
                <span class="sidebar-text">Demo</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://volt-pro-laravel-admin-dashboard.updivision.com/documentation/getting-started/overview/index.html" class="nav-link">
                <span class="sidebar-text">Docs</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/themesberg/volt-laravel-dashboard" class="nav-link">
                <span class="sidebar-text">Github (!pro)</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <span class="nav-link d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#submenu-laravel2" aria-expanded="false">
          <span>
            <span class="sidebar-icon"><svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg></span>
            <span class="sidebar-text">Icon Reference</span>
          </span>
          <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg></span>
        </span>
        <div class="multi-level" role="list" id="submenu-laravel2" aria-expanded="false" style="">
          <ul class="flex-column nav">
            <li class="nav-item">
              <a href="https://heroicons.dev/" class="nav-link">
                <span class="sidebar-text">Heroicons</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://tablericons.com/" class="nav-link">
                <span class="sidebar-text">Tabler Icons</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://fontawesome.com/" class="nav-link">
                <span class="sidebar-text">Font Awesome</span>
              </a>
            </li>

          </ul>
        </div>
      </li>

    </ul>
  </div>
</nav>
