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
                    <h5>Nasionalis</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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
                    <h5>Gotong Royong</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Mandiri</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Integritas</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Religius</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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
              @else
                <form action="{{ route("evaluations.store") }}" method="POST">
                  @csrf
                  <input type="text" name="user_id" value="{{ $user_id }}" hidden>
                  <div class="d-flex align-items-center">
                    <div style="width: 70%">
                      <h5>Nasionalis</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input type="text" name="nasionalis">
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center">
                    <div style="width: 70%">
                      <h5>Gotong Royong</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input type="text" name="gotong_royong">
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center">
                    <div style="width: 70%">
                      <h5>Religius</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input type="text" name="religius">
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div style="width: 70%">
                      <h5>Mandiri</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input type="text" name="mandiri">
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div style="width: 70%">
                      <h5>Integritas</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
                    </div>
                    <div style="width: 30%; text-align: center">
                      <small>Skor </small>
                      <br>
                      <input type="text" name="integritas">
                    </div>
                  </div>
                  <hr>
                  <div>
                    <h5>Catatan Guru</h5>
                    <textarea name="message" class="form-control" style="height: 200px !important"></textarea>
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
                    <h5>Nasionalis</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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
                    <h5>Gotong Royong</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Mandiri</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Integritas</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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
                <hr>
                <div class="d-flex align-items-center">
                  <div style="width: 90%">
                    <h5>Religius</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nostrum saepe sit commodi architecto officiis beatae dolorem! Fugiat voluptatem officiis corrupti. Expedita aperiam nihil alias provident, a dolor dicta cumque.</p>
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