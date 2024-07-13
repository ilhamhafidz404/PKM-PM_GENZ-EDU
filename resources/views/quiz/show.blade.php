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
            <a href="{{route('quizzes.index')}}" class="btn btn-secondary">
              kembali
            </a>
          </div>
          <div class="section-body">
            @forelse ($questions as $index=> $question)
              <div class="card">
                <div class="card-body">
                  <p style="font-weight: bold" class="text-warning mb-0">No {{ $index+1 }}</p>
                  <h5>{{ $question->question }} ?</h5>
                  <p class="mb-0 @if($question->a == $question->answer) text-success font-weight-bold @endif">A. {{ $question->a }}</p>
                  <p class="mb-0 @if($question->b == $question->answer) text-success font-weight-bold @endif">B. {{ $question->b }}</p>
                  <p class="mb-0 @if($question->c == $question->answer) text-success font-weight-bold @endif">C. {{ $question->c }}</p>
                  <p class="mb-0 @if($question->d == $question->answer) text-success font-weight-bold @endif">D. {{ $question->d }}</p>
                </div>
              </div>
            @empty
              <form action="{{ route('questions.store') }}" method="POST">
                @csrf
                <input type="hidden" name="quiz_id" value="{{$quiz->id}}">
                @for ($i = 0; $i < 10; $i++)
                  <div class="card">
                    <div class="card-body">
                      <p style="font-weight: bold" class="text-warning mb-0">No {{ $i+1 }}</p>
                      <div class="mb-3">
                        <label for="" class="form-label">Soal</label>
                        <input type="text" name="question[]" class="form-control">
                      </div>
                      <div class="row">
                        <div class="col-6 mb-3">
                          <label for="" class="form-label">Opsi A</label>
                          <input type="text" name="a[]" class="form-control">
                        </div>
                        <div class="col-6 mb-3">
                          <label for="" class="form-label">Opsi B</label>
                          <input type="text" name="b[]" class="form-control">
                        </div>
                        <div class="col-6 mb-3">
                          <label for="" class="form-label">Opsi C</label>
                          <input type="text" name="c[]" class="form-control">
                        </div>
                        <div class="col-6 mb-3">
                          <label for="" class="form-label">Opsi D</label>
                          <input type="text" name="d[]" class="form-control">
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label class="form-label">Jawaban</label>
                            <div class="selectgroup w-100">
                              <label class="selectgroup-item">
                                <input type="radio" name="{{ 'answers[]'.$i }}" value="a" class="selectgroup-input">
                                <span class="selectgroup-button">A</span>
                              </label>
                              <label class="selectgroup-item">
                                <input type="radio" name="{{ 'answers[]'.$i }}" value="b" class="selectgroup-input">
                                <span class="selectgroup-button">B</span>
                              </label>
                              <label class="selectgroup-item">
                                <input type="radio" name="{{ 'answers[]'.$i }}" value="c" class="selectgroup-input">
                                <span class="selectgroup-button">C</span>
                              </label>
                              <label class="selectgroup-item">
                                <input type="radio" name="{{ 'answers[]'.$i }}" value="d" class="selectgroup-input">
                                <span class="selectgroup-button">D</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endfor
                <button class="btn btn-warning">Submit</button>
              </form>
            @endforelse
          </div>
        </section>
      </div>
      @include("components.footer")
    </div>
  </div>
@endsection