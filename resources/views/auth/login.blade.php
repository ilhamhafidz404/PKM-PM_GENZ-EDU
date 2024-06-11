@extends('layouts.app')

@section('content')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src={{asset("./logo.png")}} alt="logo" width="100">
            </div>

            <div class="card card-warning">
              <div class="card-header">
                <h4>Login</h4>
              </div>

              <div class="card-body">
                <form method="POST" action="{{ route('login-validation') }}" class="needs-validation">
                  @csrf
                  <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input id="nisn" type="nisn" class="form-control" name="nisn" required autofocus>
                    <div class="invalid-feedback">
                      Tolong isi NISN anda
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      {{-- <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small text-warning">
                          Forgot Password?
                        </a>
                      </div> --}}
                    </div>
                    <input id="password" type="password" class="form-control" name="password" required>
                    <div class="invalid-feedback">
                      Tolong isi Password anda
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-lg btn-block">
                      Login
                    </button>
                    <hr>
                    <a href="{{route('loginTeacher')}}" class="btn btn-secondary btn-lg btn-block">
                      Login Guru
                    </a>
                    <a href="{{route('loginParent')}}" class="btn btn-secondary btn-lg btn-block">
                      Login Orang Tua
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>  
@endsection