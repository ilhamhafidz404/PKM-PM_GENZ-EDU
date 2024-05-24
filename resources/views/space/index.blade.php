@extends('layouts.app')

@section('content')
  <div id="app">
    <div class="main-wrapper container">
      @include('components.topbar')
      @include("components.navbar")

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header d-flex justify-content-between">
            <h1>Ruang Ekspresi</h1>
            <a href="{{route('spaces.create')}}" class="btn btn-warning">
              Buat Ekspresi
            </a>
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
                    @if (auth()->guard("teacher")->user())
                      <a href="{{asset('storage/'.$space->file)}}" class="btn btn-danger" target="_blank">
                        <i class="fas fa-ban"></i>
                      </a>
                    @endif
                    <a href="{{asset('storage/'.$space->file)}}" class="btn btn-warning" target="_blank">
                      <i class="fas fa-download"></i>
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          {{ $spaces->links('vendor.pagination.bootstrap-5') }}
        </section>
      </div>
      @include("components.footer")
    </div>
  </div>
@endsection