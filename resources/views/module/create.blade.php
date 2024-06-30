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
            <h1>Upload Modul Ajar</h1>
            <a href="{{route('modules.index')}}" class="btn btn-secondary">
              Kembali
            </a>
          </div>
          <div class="section-body">
            <form action="{{route('modules.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="file">File</label>
                    <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" id="file" accept=".pdf,.doc,.docx"/>
                    @error('file')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <button class="btn btn-warning">Upload Modul</button>
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