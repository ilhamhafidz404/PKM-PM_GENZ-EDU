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
            @if (!auth()->guard("teacher")->user() && !auth()->guard("parent")->user())
            <a href="{{route('spaces.create')}}" class="btn btn-warning">
              Buat Ekspresi
            </a>
            @endif
          </div>
          <div class="section-body">
            @forelse ($spaces as $space)
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
                  <div class="d-flex align-items-center">
                    @if (auth()->guard("teacher")->user())
                    <form 
                      action="{{ route('spaces.destroy', $space->id) }}" 
                      method="POST" 
                      class="mr-1" 
                      onsubmit="return confirm('Yakin ingin menghapus?')"
                    >
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn btn-danger">
                        <i class="fas fa-ban"></i>
                      </button>
                    </form>
                    @endif
                    <a href="{{asset('storage/'.$space->file)}}" class="btn btn-warning" target="_blank">
                      <i class="fas fa-download"></i>
                    </a>
                  </div>
                </div>
              </div>
            @empty
              <div class="card">
                <div class="card-body">
                  <div class="empty-state" data-height="400">
                    <div class="empty-state-icon bg-warning">
                      <i class="fas fa-question"></i>
                    </div>
                    <h2>Belum Ada Ekspresi</h2>
                    @if (auth()->guard("teacher")->user())
                    <p class="lead">
                      Ayo ajak murid-murid anda untuk berkreasi!
                    </p>
                    @else
                    <p class="lead">
                      Ayo mulailah meng-ekspresikan kehebatanmu!
                    </p>
                    @endif
                  </div>
                </div>
              </div>
            @endforelse
          </div>
          {{ $spaces->links('vendor.pagination.bootstrap-5') }}
        </section>
      </div>
      @include("components.footer")
    </div>
  </div>
@endsection