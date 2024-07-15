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
            <h1>Evaluasi Siswa</h1>
          </div>

          @if (auth()->guard("teacher")->user())
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                      <th></th>
                      <th>NISN</th>
                      <th>Nama Siswa</th>
                      <th>Action</th>
                    </tr>
                    @forelse ($users as $user)
                      <tr>
                        <td>
                          <img alt="image" src={{ asset("template/stisla/dist/assets/img/avatar/avatar-4.png") }} class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>{{ $user->nisn }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                          <a class="btn btn-warning" href="{{ route("evaluations.show", $user->id) }}">Evaluasi</a>
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
          @else
            <div class="card p-4">
              <h5>Lihat Hasil Evaluasi Kamu</h5>
              <p>
                Hasil evaluasi pembelajaran GENZ-EDU meliputi 5 aspek, yaitu Religius, nasionalis, mandiri, gotong royong, integritas. Nilai-mu akan dapat dilihat oleh orang-tua / wali mu, jadi AYO semangat buat ningkatin prestasimu!
              </p>
              <a href="{{ route("evaluations.show", auth()->user()->id) }}" class="text-warning">Lihat Evaluasi</a>
            </div>
          @endif
        </section>

      </div>
      @include("components.footer")
    </div>
  </div>
@endsection