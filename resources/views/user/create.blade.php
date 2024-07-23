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
            <h1>Buat Akun Siswa</h1>
            <a href="{{route('users.index')}}" class="btn btn-secondary">
              Kembali
            </a>
          </div>
          <div class="section-body">
            <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input 
                          type="text" 
                          class="form-control @error('nisn') is-invalid @enderror" 
                          name="nisn" 
                          id="nisn" 
                          value="{{old('nisn')}}"
                        >
                        @error('nisn')
                          <div class="invalid-feedback">
                            {{$message}}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="student">Nama Siswa</label>
                        <input 
                          type="text" 
                          class="form-control @error('student') is-invalid @enderror" 
                          name="student" 
                          id="student" 
                          value="{{old('student')}}"
                        >
                        @error('student')
                          <div class="invalid-feedback">
                            {{$message}}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="classroom">Kelas</label>
                        <select name="classroom" id="classroom" class="form-control">
                          <option value="" hidden selected>Pilih Kelas</option>
                          @forelse ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                          @empty
                            <option value="">Data Kelas Kosong</option>
                          @endforelse
                        </select>
                        @error('classroom')
                          <div class="invalid-feedback">
                            {{$message}}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="profile">Foto</label>
                        <input 
                          type="file" 
                          class="form-control @error('profile') is-invalid @enderror" 
                          name="profile" 
                          id="profile" 
                          value="{{old('profile')}}"
                        >
                        @error('profile')
                          <div class="invalid-feedback">
                            {{$message}}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input 
                          type="password" 
                          class="form-control @error('password') is-invalid @enderror" 
                          name="password" 
                          id="password" 
                          value="{{old('password')}}"
                        >
                        @error('password')
                          <div class="invalid-feedback">
                            {{$message}}
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="parent">Nama Orang Tua</label>
                        <input 
                          type="text" 
                          class="form-control @error('parent') is-invalid @enderror" 
                          name="parent" 
                          id="parent" 
                          value="{{old('parent')}}"
                        >
                        @error('parent')
                          <div class="invalid-feedback">
                            {{$message}}
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-danger" type="reset">Reset</button>
                    <button class="btn btn-warning">Buat Akun</button>
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