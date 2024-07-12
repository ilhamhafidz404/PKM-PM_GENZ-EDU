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
            <h1>Quiz</h1>
            @if (!auth()->guard("teacher")->user() && !auth()->guard("parent")->user())
            <a href="{{route('spaces.create')}}" class="btn btn-warning">
              Buat Quiz
            </a>
            @endif
          </div>
          <div class="section-body">
            <div class="row">
              @forelse ($quizzes as $quiz)
                  <div class="col-12 col-md-4 col-lg-4">
                    <article class="article article-style-c">
                      <div class="article-details">
                        <div class="article-category">
                          <span>{{ $quiz->category }}</span>
                          <div class="bullet"></div> 
                          <a href="#">{{ $quiz->created_at->diffForHumans() }}</a>
                        </div>
                        <div class="article-title">
                          <h2>
                            <a href="{{ route('quizzes.show', $quiz->slug) }}" class="text-warning">
                              {{ $quiz->title }}
                            </a>
                          </h2>
                        </div>
                        <p>{{ Str::limit($quiz->description, 100, '...') }}</p>
                      </div>
                    </article>
                </div>
              @empty
                <div class="card col-12">
                  <div class="card-body">
                    <div class="empty-state" data-height="400">
                      <div class="empty-state-icon bg-warning">
                        <i class="fas fa-question"></i>
                      </div>
                      <h2>Belum Ada Quiz</h2>
                      @if (auth()->guard("teacher")->user())
                      <p class="lead">
                        Ayo mulailah membuat quiz untuk muridmu berlatih soal!
                      </p>
                      @else
                      <p class="lead">
                        Kamu bisa meminta gurumu untuk membuatkanmu soal latihan.
                      </p>
                      @endif
                    </div>
                  </div>
                </div>
              @endforelse
            </div>
          </div>
        </section>
      </div>
      @include("components.footer")
    </div>
  </div>
@endsection