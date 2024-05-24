@extends('layouts.app')

@section('content')
  <div id="app">
    <div class="main-wrapper container">
      @include('components.topbar')
      @include("components.navbar")

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Ruang Ekspresi</h1>
          </div>
          <div class="section-body">
              @foreach ($spaces as $space)
                <div class="card">
                  <div class="card-header">
                    <h4>{{$space->title}}</h4>
                  </div>
                  <div class="card-body">
                    <p>{{$space->description}}</p>
                  </div>
                  <div class="card-footer bg-whitesmoke d-flex justify-content-between align-items-center">
                    <div>
                      <p class="m-0">{{$space->user->name}} &bullet; {{$space->created_at->diffForHumans()}}</p>
                    </div>
                    <div>
                      <a href="" class="btn btn-warning">
                      <i class="fas fa-download"></i>
                    </a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>
@endsection