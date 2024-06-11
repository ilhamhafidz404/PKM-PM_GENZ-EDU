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
            @if (!auth()->guard("teacher")->user())
            <a href="{{route('spaces.create')}}" class="btn btn-warning">
              Tambah Siswa
            </a>
            @endif
          </div>

          <div class="card">
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th></th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Orang Tua / Wali</th>
                    <th>Action</th>
                  </tr>
                  @forelse ($users as $user)
                    <tr>
                      <td>
                        <img alt="image" src={{ asset("template/stisla/dist/assets/img/avatar/avatar-4.png") }} class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                      </td>
                      <td>{{ $user->nisn }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ "-" }}</td>
                      <td>
                        <button class="btn btn-warning">Detail</button>
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
      </div>
      @include("components.footer")
    </div>
  </div>
@endsection