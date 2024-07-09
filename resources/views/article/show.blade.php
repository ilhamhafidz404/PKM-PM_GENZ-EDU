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
            <h1>{{ $article->title }}</h1>
            <a href="{{route('articles.index')}}" class="btn btn-secondary">
              kembali
            </a>
          </div>
        </section>

        <section class="card">
          <div class="card-body">
            <div>
              <img src="{{ asset('storage/'.$article->banner) }}" class="w-100">
            </div>

            <div class="mt-5">
              {!! $article->description !!}
            </div>
          </div>
        </section>

      </div>
      @include("components.footer")
    </div>
  </div>
@endsection