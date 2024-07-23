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
            <h1>Buat Ekspresi</h1>
            <a href="{{route('spaces.index')}}" class="btn btn-secondary">
              Kembali
            </a>
          </div>
          <div class="section-body">
            <form action="{{route('spaces.store')}}" method="POST" enctype="multipart/form-data">
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
                      placeholder="contoh: Tugas Membuat Puisi : Judul 'Puisi Untuk Ibu'"
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
                      placeholder="contoh: Puisi ini saya persembahkan untuk Ibu tersayang, oleh Kelompok 2: Ilham Hafidz, Gyan Fadli, Epa Noviana & Azka"
                    >{{old('description')}}</textarea>
                    @error('description')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" id="file"/>
                    @error('file')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <button class="btn btn-warning">Upload Ekspresi</button>
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