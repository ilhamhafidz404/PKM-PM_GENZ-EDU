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
                    <div class="d-md-flex col-md-6" style="gap: 20px; align-items: center">
                      <select name="filterClass" class="form-control mb-md-0 mb-2">
                        <option value="" selected hidden>Pilih Kelas</option>
                        @foreach ($classrooms as $classroom)
                          <option value="{{ $classroom->id }}" 
                            {{ isset($_GET['filterClass']) && $classroom->id == $_GET['filterClass'] ? 'selected' : '' }}>
                            {{ $classroom->name }}
                          </option>
                        @endforeach
                        @if ($classrooms->isEmpty())
                          <option value="">Tidak ada data kelas</option>
                        @endif
                      </select>
                      <input type="date" class="form-control mb-md-0 mb-2" name="filterDate" value="{{ $_GET['filterDate'] ?? '' }}">
                      <div class="d-flex" style="gap: 5px">
                        <div>
                          <a href="{{ route('absent.index') }}" class="btn btn-danger">Reset</a>
                        </div>
                        <div>
                          <button class="btn btn-warning">Filter</button> 
                        </div>
                      </div>
                    </div>
                  </form>                  
                </div>
                <div class="col-md-1">
                  <a href="{{ route('absent.export') }}" class="btn d-md-inline-block d-block mb-md-0 mb-3 btn-success">Export</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th>Foto Absen</th>
                    <th>Tanggal</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Aksi</th>
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
                      <td>
                        <form action="{{ route("absent.destroy", $absent->id) }}" method="POST">
                          @csrf
                          @method("DELETE")
                          <button 
                            class="btn btn-danger" 
                            onclick="return confirm('Tolah Absen dilakukan bila foto tidak sesuai, apakah anda yakin?')"
                          >Tolak Absen</button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="5">Data Absen Kosong</td>
                    </tr>
                  @endforelse
                </table>
              </div>
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
                      <li>
                        Silahkan upload foto mu di lingkungan sekolah di bawah ini (jika absensi hadir)! 
                        <a href="{{ asset("imgExample/hadir.jpg") }}" target="_blank" class="text-warning">lihat contoh foto</a>
                      </li>
                      <li>
                        Silahkan upload foto keterangan dokter! (jika absensi sakit)
                        <a href="{{ asset("imgExample/sakit.webp") }}" target="_blank"  class="text-warning">lihat contoh foto</a>
                      </li>
                      <li>
                        Silahkan upload foto kegitan! (jika absensi izin)
                      </li>
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
                      <button 
                        name="submit" 
                        value="hadir" 
                        class="btn btn-warning btn-block" 
                        onclick="return confirm('Apakah kmu yakin submit Hadir?')"
                      >
                        Hadir
                      </button>
                      <hr>
                      <button 
                        name="submit" 
                        value="izin" 
                        class="btn btn-secondary btn-block"
                        onclick="return confirm('Apakah kmu yakin submit Izin?')"
                      >
                        Izin
                      </button>
                      <hr>
                      <button 
                        name="submit" 
                        value="sakit" 
                        class="btn btn-danger btn-block"
                        onclick="return confirm('Apakah kmu yakin submit Sakit?')"
                      >
                        Sakit
                      </button>
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