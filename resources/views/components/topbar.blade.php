<div class="navbar-bg bg-warning"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <a href="index.html" class="navbar-brand sidebar-gone-hide">GENZ EDU</a>
  <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
  <ul class="navbar-nav navbar-right ml-auto">
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{asset('template/stisla/dist/')}}/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">
          @if (auth()->guard("teacher")->user())
            {{auth()->guard("teacher")->user()->name}}
          @elseif (auth()->guard("parent")->user())
            {{auth()->guard("parent")->user()->name}} (Orang Tua: {{auth()->guard("parent")->user()->user->name}})
          @else  
            {{Auth::user()->name}}
          @endif
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button type="submit" class="dropdown-item has-icon text-danger d-flex align-items-center">
            <i class="fas fa-sign-out-alt"></i> 
            <span>
              Logout
            </span>
          </button>
        </form>
      </div>
    </li>
  </ul>
</nav>