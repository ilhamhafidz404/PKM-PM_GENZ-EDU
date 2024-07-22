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
            <h1>Presensi</h1>
          </div>
          <div class="section-body">
            @if (auth()->guard("teacher")->user())
            <form action="" method="GET" class="mb-5">
              <div class="d-flex col-4" style="gap: 20px; align-items: center">
                @if (isset($_GET["filterDate"]))
                  <p class="mb-0" style="white-space: nowrap">{{ $_GET["filterDate"] }}</p>
                @endif
                <input type="date" class="form-control" name="filterDate">
                <div class="d-flex" style="gap: 5px">
                  <a href="{{ route('absent.index') }}" class="btn btn-danger">Reset</a>
                  <button class="btn btn-warning">Filter</button> 
                </div>
              </div>
            </form>
              <table class="table table-striped">
                <tr>
                  <th>Foto Absen</th>
                  <th>Tanggal</th>
                  <th>Nama Siswa</th>
                  <th>Status</th>
                </tr>
                @forelse ($absents as $absent)
                  <tr>
                    <td>
                      <div class="my-2">
                        <img alt="photo tidak ada" src={{ asset("storage/".$absent->photo) }} style="width: 100px; height: 100px; border-radius: 10px; object-fit:cover" />
                      </div>
                    </td>
                    <td>
                      {{ $absent->created_at->translatedFormat('d F Y') }}
                    </td>
                    <td>{{ $absent->user->name }}</td>
                    <td>
                      @if ($absent->status == "late")
                        <span class="badge badge-danger">Terlambat</span>
                      @else
                        <span class="badge badge-success">Tepat Waktu</span>
                      @endif
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="5">Data Absen Kosong</td>
                  </tr>
                @endforelse
              </table>
            @elseif (auth()->guard("parent")->user())
              @if ($checkTodayAbsent)
                <div class="card p-3">
                  <h5>Anak kamu sudah absen</h5>
                </div>
              @else
                @if ($now->greaterThan($eightAM))
                  <div class="card p-3">
                    <h5>Anak kamu belum absen dan telat</h5>
                  </div>
                @else
                    <div class="card p-3">
                      <h5>Anak kamu belum absen</h5>
                    </div>
                @endif
              @endif
            @else
              @if ($checkTodayAbsent)
                <div class="card p-3">
                  <h5>Kamu sudah absen</h5>
                </div>
              @else
                @if ($now->greaterThan($eightAM))
                  <div class="card">
                    <div class="card-body">
                      <div class="empty-state" data-height="400">
                        <div class="empty-state-icon bg-danger">
                          <i class="fas fa-times"></i>
                        </div>
                        <h2>Kamu Telat Absen</h2>
                      </div>
                    </div>
                  </div>
                @else    
                  <div class="card p-3">
                    <ul>
                      <li>Kamu belum absen hari ini!</li>
                      <li>Diharapkan absen tepat waktu sebelum pukul 8 pagi</li>
                      <li>Lakukan foto</li>
                    </ul>
                    <form action="" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input 
                        class="form-control @error('photo') is-invalid @enderror" 
                        type="file" 
                        accept="image/*, video/*" 
                        capture="user" 
                        name="photo"
                      />
                      @error('photo')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                      <br>
                      <button class="btn btn-warning btn-block">Absen</button>
                    </form>
                  </div>
                @endif
              @endif
            @endif
          </div>
        </section>
      </div>
      @include("components.footer")
    </div>
  </div>
@endsection