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
            <h1>Modul Ajar</h1>
            @if (auth()->guard("teacher")->user())
              <a href="{{route('modules.create')}}" class="btn btn-warning">
                Upload Modul
              </a>
            @endif
          </div>
          <div class="section-body">
            <div class="card p-4">
              <div class="summary-item">
                <ul class="list-unstyled list-unstyled-border">
                  @forelse ($modules as $module)
                    <li class="media">
                      <div class="media-body">
                        <div class="media-right">
                          <a href="{{ asset('storage/'.$module->file) }}" class="btn btn-warning" target="_blank">
                            <i class="fas fa-download"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="#">{{ $module->title }}</a>
                        </div>
                        <div class="text-small text-muted">
                          Oleh <span class="text-warning">{{ $module->teacher->name }}</span> 
                          <div class="bullet"></div> 
                          {{ $module->created_at->diffForHumans() }}
                        </div>
                      </div>
                    </li>
                  @empty
                    <div class="card">
                      <div class="card-body">
                        <div class="empty-state" data-height="400">
                          <div class="empty-state-icon bg-warning">
                            <i class="fas fa-question"></i>
                          </div>
                          <h2>Belum Ada Modul Ajar</h2>
                        </div>
                      </div>
                    </div>
                  @endforelse
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
      @include("components.footer")
    </div>
  </div>
@endsection