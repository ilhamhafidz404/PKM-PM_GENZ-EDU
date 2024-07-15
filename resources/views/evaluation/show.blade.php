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
            <a href="{{ route("evaluations.index") }}" class="btn btn-secondary">kembali</a>
          </div>

          <div class="card">
          @if (auth()->guard("teacher")->user())
            <div class="card-body p-4">
              @if ($evaluation)
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Religius</h5>
                    <p>merupakan sikap spiritual atau kegiatan keagamaan yang dilakukan oleh setiap individu dalam memuji keesaan Tuhan. Selain itu, religius merupakan sikap menghargai perbedaan agama atau toleransi antar umat beragama.</p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->religius >= 90)
                      text-success
                      @elseif($evaluation->religius >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->religius }}
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Nasionalis</h5>
                    <p> 
                      Nasional merupakan sikap yang menempatkan kepentingan bangsa dan negara diatas kepentingan privasi atau kelompoknya. 
                    </p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->nasionalis >= 90)
                      text-success
                      @elseif($evaluation->nasionalis >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->nasionalis }}
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Mandiri</h5>
                    <p>
                      Mandiri merupakan kemampuan dalam menghadapi berbagai permasalahan hidup.
                    </p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->mandiri >= 90)
                      text-success
                      @elseif($evaluation->mandiri >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->mandiri }}
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Gotong Royong</h5>
                    <p>
                      Gotong royong merupakan sikap yang mencerminkan tindakan menghargai semangat kerja sama dan bahu membahu dalam menyelesaikan persoalan bersama atau untuk mencapai tujuan bersama.
                    </p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->gotong_royong >= 90)
                      text-success
                      @elseif($evaluation->gotong_royong >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->gotong_royong }}
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Integritas</h5>
                    <p>
                      Integritas merupakan sikap yang mencerminkan pribadi yang dapat dipercaya dan bertanggung jawab serta dapat menjaga kehormatan diri.
                    </p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->integritas >= 90)
                      text-success
                      @elseif($evaluation->integritas >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->integritas }}
                    </h3>
                  </div>
                </div>
              @else
                <form action="{{ route("evaluations.store") }}" method="POST">
                  @csrf
                  <input type="text" name="user_id" value="{{ $user_id }}" hidden>
                  <div class="d-flex align-items-center" style="gap: 20px">
                    <div style="width: 70%">
                      <h5>Religius</h5>
                      <p>
                        Merupakan sikap spiritual atau kegiatan keagamaan yang dilakukan oleh setiap individu dalam memuji keesaan Tuhan. Selain itu, religius merupakan sikap menghargai perbedaan agama atau toleransi antar umat beragama.
                      </p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input 
                        type="text" 
                        name="religius" 
                        value="{{old('religius')}}" 
                        class="form-control @error('religius') is-invalid @enderror"
                      >
                      @error('religius')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center" style="gap: 20px">
                    <div style="width: 70%">
                      <h5>Nasionalis</h5>
                      <p> 
                        Nasional merupakan sikap yang menempatkan kepentingan bangsa dan negara diatas kepentingan privasi atau kelompoknya. 
                      </p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input 
                        type="text" 
                        name="nasionalis" 
                        value="{{old('nasionalis')}}" 
                        class="form-control @error('nasionalis') is-invalid @enderror"
                      >
                      @error('nasionalis')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center" style="gap: 20px">
                    <div style="width: 70%">
                      <h5>Gotong Royong</h5>
                      <p>
                        Gotong royong merupakan sikap yang mencerminkan tindakan menghargai semangat kerja sama dan bahu membahu dalam menyelesaikan persoalan bersama atau untuk mencapai tujuan bersama.
                      </p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input 
                        type="text" 
                        name="gotong_royong"
                        value="{{old('gotong_royong')}}" 
                        class="form-control @error('gotong_royong') is-invalid @enderror"
                      >
                      @error('gotong_royong')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center" style="gap: 20px">
                    <div style="width: 70%">
                      <h5>Mandiri</h5>
                      <p>
                        Mandiri merupakan kemampuan dalam menghadapi berbagai permasalahan hidup.
                      </p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input 
                        type="text" 
                        name="mandiri"
                        value="{{old('mandiri')}}" 
                        class="form-control @error('mandiri') is-invalid @enderror"
                      >
                      @error('mandiri')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center" style="gap: 20px">
                    <div style="width: 70%">
                      <h5>Integritas</h5>
                      <p>
                        Integritas merupakan sikap yang mencerminkan pribadi yang dapat dipercaya dan bertanggung jawab serta dapat menjaga kehormatan diri.
                      </p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input 
                        type="text" 
                        name="integritas"
                        value="{{old('integritas')}}" 
                        class="form-control @error('integritas') is-invalid @enderror"
                      >
                      @error('integritas')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <hr>
                  <div>
                    <h5>Catatan Guru</h5>
                    <textarea 
                      name="message" 
                      class="form-control @error('message') is-invalid @enderror" 
                      style="height: 200px !important"
                    ></textarea>
                    @error('message')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                  </div>
                  <div class="text-right mt-3">
                    <button class="btn btn-warning">Submit</button>
                  </div>
                </form>
              @endif
            </div>
          @else
            <div class="card-body p-4">
              @if ($evaluation)
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Religius</h5>
                    <p>merupakan sikap spiritual atau kegiatan keagamaan yang dilakukan oleh setiap individu dalam memuji keesaan Tuhan. Selain itu, religius merupakan sikap menghargai perbedaan agama atau toleransi antar umat beragama.</p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->religius >= 90)
                      text-success
                      @elseif($evaluation->religius >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->religius }}
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Nasionalis</h5>
                    <p> 
                      Nasional merupakan sikap yang menempatkan kepentingan bangsa dan negara diatas kepentingan privasi atau kelompoknya. 
                    </p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->nasionalis >= 90)
                      text-success
                      @elseif($evaluation->nasionalis >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->nasionalis }}
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Mandiri</h5>
                    <p>
                      Mandiri merupakan kemampuan dalam menghadapi berbagai permasalahan hidup.
                    </p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->mandiri >= 90)
                      text-success
                      @elseif($evaluation->mandiri >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->mandiri }}
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Gotong Royong</h5>
                    <p>
                      Gotong royong merupakan sikap yang mencerminkan tindakan menghargai semangat kerja sama dan bahu membahu dalam menyelesaikan persoalan bersama atau untuk mencapai tujuan bersama.
                    </p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->gotong_royong >= 90)
                      text-success
                      @elseif($evaluation->gotong_royong >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->gotong_royong }}
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Integritas</h5>
                    <p>
                      Integritas merupakan sikap yang mencerminkan pribadi yang dapat dipercaya dan bertanggung jawab serta dapat menjaga kehormatan diri.
                    </p>
                  </div>
                  <div style="width: 10%; text-align: center">
                    <small>Skor </small>
                    <h3 class="
                      @if($evaluation->integritas >= 90)
                      text-success
                      @elseif($evaluation->integritas >= 75)
                      text-warning
                      @else
                      text-danger
                      @endif
                    ">
                      {{ $evaluation->integritas }}
                    </h3>
                  </div>
                </div>
              @else
                <h4>Kamu Belum di evaluasi</h4>
              @endif
            </div>
          @endif
          </div>
          @if($evaluation)
            <div class="card p-3">
              <h5>Catatan Guru</h5>
              {{ $evaluation->message }}
            </div>
          @endif
        </section>

      </div>
      @include("components.footer")
    </div>
  </div>
@endsection