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
            <h1>Siswa</h1>
            <a href="{{route('users.create')}}" class="btn btn-warning">
              Tambah Siswa
            </a>
          </div>

          <form action="" method="GET">
            <div class="d-flex col-4 mb-3" style="gap: 10px">
              <select class="form-control" name="classroom" id="">
                <option value="" hidden selected>Pilih Kelas</option>
                @forelse ($classrooms as $classroom)
                  @if (isset($_GET["classroom"]) && $classroom->id == $_GET["classroom"])  
                    <option value="{{ $classroom->id }}" selected>{{ $classroom->name }}</option>
                  @else
                    <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                  @endif
                @empty
                  <option value="">Tidak ada kelas</option>
                @endforelse 
              </select>
              <div class="d-flex" style="gap: 5px">
                <button class="btn btn-warning" type="submit">Filter</button>
                <a href="{{ route('users.index') }}" class="btn btn-danger">Reset</a>
              </div>
            </div>
          </form>

          <div class="card">
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th></th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Action</th>
                  </tr>
                  @forelse ($users as $user)
                    <tr>
                      <td>
                        <img alt="image" src={{ asset("template/stisla/dist/assets/img/avatar/avatar-4.png") }} class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                      </td>
                      <td>{{ $user->nisn }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->classroom->name }}</td>
                      <td>
                        <button class="btn btn-warning"  data-toggle="modal" data-target="#detailStudent{{ $user->id }}">Detail</button>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="5">Data Siswa Kosong</td>
                    </tr>
                  @endforelse
                </table>
              </div>
            </div>
          </div>
        </section>

        @foreach ($users as $user)
          <div class="modal fade" id="detailStudent{{ $user->id }}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="detailStudentLabel">Detail Siswa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table>
                    <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                      <td>NISN</td>
                      <td>:</td>
                      <td>{{ $user->nisn }}</td>
                    </tr>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>  
        @endforeach

      </div>
      @include("components.footer")
    </div>
  </div>
@endsection