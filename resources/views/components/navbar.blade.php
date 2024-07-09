<nav class="navbar navbar-secondary navbar-expand-lg">
  <div class="container">
    <ul class="navbar-nav">
      @if (auth()->guard("teacher")->user())
      <li class="nav-item {{ request()->is('users*') ? 'active' : '' }}">
        <a href={{ route('users.index') }} class="nav-link">
          <i class="fas fa-user"></i>
          <span>Siswa</span>
        </a>
      </li>
      @endif
      <li class="nav-item {{ request()->is('absent*') ? 'active' : '' }}">
        <a href={{ route('absent.index') }} class="nav-link">
          <i class="fas fa-clock"></i>
          <span>Absensi</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('modules*') ? 'active' : '' }}">
        <a href={{ route('modules.index') }} class="nav-link">
          <i class="fas fa-book"></i>
          <span>Modul Ajar</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('spaces*') ? 'active' : '' }}">
        <a href={{ route('spaces.index') }} class="nav-link">
          <i class="fas fa-box"></i>
          <span>Space</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('articles*') ? 'active' : '' }}">
        <a href={{ route('articles.index') }} class="nav-link">
          <i class="fas fa-newspaper"></i>
          <span>Article</span>
        </a>
      </li>
    </ul>
  </div>
</nav>