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
            <h1>Artikel</h1>
            @if (auth()->guard("teacher")->user())
            <a href="{{route('articles.create')}}" class="btn btn-warning">
              Tambah Artikel
            </a>
            @endif
          </div>
        </section>

        @foreach ($articles as $article)
          <div class="card">
            <div class="card-body d-flex" style="gap: 20px; align-items: center">
              <div style="width: 25%">
                  <img 
                    alt="articleBanner" 
                    src="{{ asset("storage/".$article->banner) }}" 
                    class="img-fluid img-thumbnail" 
                    style="height: 200px; width: 100%; object-fit: cover" 
                  />
              </div>
              <div style="width: 75%">
                <h5>{{ $article->title }}</h5>
                <p>{!! Str::limit($article->description, 250) !!}</p>
                <a href="{{ route("articles.show", $article->slug) }}">Baca Artikel</a>
              </div>
            </div>
          </div>
        @endforeach

      </div>
      @include("components.footer")
    </div>
  </div>
@endsection