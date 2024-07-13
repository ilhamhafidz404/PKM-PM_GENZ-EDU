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
            <h1>Buat Quiz</h1>
            <a href="{{route('quizzes.index')}}" class="btn btn-secondary">
              Kembali
            </a>
          </div>
          <div class="section-body">
            <form action="{{route('quizzes.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Judul</label>
                    <input 
                      type="text" 
                      class="form-control @error('title') is-invalid @enderror" 
                      name="title" 
                      id="title" 
                      value="{{old('title')}}"
                    >
                    @error('title')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea 
                      class="form-control @error('description') is-invalid @enderror" 
                      name="description" 
                      id="description" 
                    >{{old('description')}}</textarea>
                    @error('description')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="category">Kategori</label>
                    <select name="category" id="category" class="form-control">
                      <option value="religius">Religius</option>
                      <option value="nasionalis">Nasionalis</option>
                      <option value="mandiri">Mandiri</option>
                      <option value="gotong royong">Gotong Royong</option>
                      <option value="integritas">Intgritas</option>
                    </select>
                    @error('category')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <button class="btn btn-warning">Upload Quiz</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
      @include("components.footer")
    </div>
  </div>
@endsection