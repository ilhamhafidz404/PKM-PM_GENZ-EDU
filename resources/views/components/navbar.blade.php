<nav class="navbar navbar-secondary navbar-expand-lg">
  <div class="container">
    <ul class="navbar-nav">
      {{-- <li class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="index-0.html" class="nav-link">General Dashboard</a></li>
          <li class="nav-item"><a href="index.html" class="nav-link">Ecommerce Dashboard</a></li>
        </ul>
      </li> --}}
      <li class="nav-item {{ request()->is('users*') ? 'active' : '' }}">
        <a href={{ route('users.index') }} class="nav-link">
          <i class="fas fa-user"></i>
          <span>Siswa</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('spaces*') ? 'active' : '' }}">
        <a href={{ route('spaces.index') }} class="nav-link">
          <i class="fas fa-box"></i>
          <span>Space</span>
        </a>
      </li>
    </ul>
  </div>
</nav>