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
              <div class="row">
                <div class="col-11">
                  <form action="" method="GET" class="mb-5">
                    <div class="d-flex col-4" style="gap: 20px; align-items: center">
                      @if (isset($_GET["filterDate"]))
                        <p class="mb-0" style="white-space: nowrap">{{ Carbon\Carbon::parse($_GET["filterDate"])->format('d F Y') }}</p>
                      @endif
                      {{-- <select name="filterClass" id="" class="form-control">
                        <option value="" selected hidden>Pilih Kelas</option>
                        @forelse ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                        @empty
                            <option value="">Tidak ada data kelas</option>
                        @endforelse
                      </select> --}}
                      <input type="date" class="form-control" name="filterDate">
                      <div class="d-flex" style="gap: 5px">
                        <a href="{{ route('absent.index') }}" class="btn btn-danger">Reset</a>
                        <button class="btn btn-warning">Filter</button> 
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-1">
                  <a href="{{ route('absent.export') }}" class="btn btn-success">Export</a>
                </div>
              </div>
              <table class="table table-striped">
                <tr>
                  <th>Foto Absen</th>
                  <th>Tanggal</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Status</th>
                </tr>
                @forelse ($absents as $absent)
                  <tr>
                    <td>
                      <div class="my-2">
                        <a href="{{ asset("storage/".$absent->photo) }}" target="_blank">
                          <img 
                            alt="photo tidak ada" 
                            src={{ asset("storage/".$absent->photo) }} 
                            style="width: 100px; height: 100px; border-radius: 10px; object-fit:cover" 
                          />
                        </a>
                      </div>
                    </td>
                    <td>
                      {{ $absent->created_at->translatedFormat('d F Y') }}
                    </td>
                    <td>{{ $absent->user->name }}</td>
                    <td>{{ $absent->user->classroom->name }}</td>
                    <td>
                      @if ($absent->status == "hadir")
                        <span class="badge badge-success">Hadir</span>
                      @elseif ($absent->status == "sakit")
                        <span class="badge badge-danger">Sakit</span>
                      @else
                        <span class="badge badge-secondary">Izin</span>
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
                  <h5>Yeay, kamu sudah presensi di hari ini</h5>
                </div>
              @else
                @if ($now->greaterThan($eightAM))
                  <div class="card">
                    <div class="card-body">
                      <div class="empty-state" data-height="400">
                        <div class="empty-state-icon bg-danger">
                          <i class="fas fa-times"></i>
                        </div>
                        <h2>Yaaah, absen kamu telat, selanjutnya jangan lupa untuk absen ya</h2>
                      </div>
                    </div>
                  </div>
                @else    
                  <div class="card p-3">
                    <ul class="ml-0 pl-4">
                      <li>Silahkan mengisi kehadiran hari ini!</li>
                      <li>Kehadiran diisi sebelum pukul 8 pagi</li>
                      <li>Silahkan upload foto mu di lingkungan sekolah di bawah ini (jika absensi hadir)!</li>
                      <li>Silahkan upload foto keterangan dokter! (jika absensi sakit)</li>
                      <li>Silahkan upload foto kegitan! (jika absensi izin)</li>
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
                      <button name="submit" value="hadir" class="btn btn-warning btn-block">Hadir</button>
                      <button name="submit" value="izin" class="btn btn-secondary btn-block">Izin</button>
                      <button name="submit" value="sakit" class="btn btn-danger btn-block">Sakit</button>
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