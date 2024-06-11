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
            <h1>Absensi</h1>
          </div>
          <div class="section-body">
            @if (auth()->guard("teacher")->user())
              <table class="table table-striped">
                <tr>
                  <th>Foto Absen</th>
                  <th>Nama Siswa</th>
                  <th>Status</th>
                </tr>
                @forelse ($absents as $absent)
                  <tr>
                    <td>
                      <div class="my-2">
                        <img alt="photo tidak ada" src={{ asset("storage/".$absent->photo) }} width="100">
                      </div>
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
                    <td colspan="5">Data Siswa Kosong</td>
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
                  <div class="card p-3">
                    <h5>Kamu telat</h5>
                  </div>
                @else    
                  <div class="card p-3">
                    <ul>
                      <li>Kamu belum absen hari ini!</li>
                      <li>Diharapkan absen tepat waktu sebelum pukul 8 pagi</li>
                      <li>Cara absen</li>
                    </ul>
                    <form action="" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input class="form-control" type="file" accept="image/*, video/*" capture="user" name="photo"/>
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