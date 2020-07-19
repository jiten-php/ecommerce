@extends('layouts.auth')
@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                    {{ Form::open(['route' => 'admin.auth', 'class' =>'user']) }}
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                      @if($errors->has('email'))
                      <div class="invalid-feedback">{{$errors->first('email') }}</div>
                      @endif
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                      @if($errors->has('password'))
                      <div class="invalid-feedback">{{$errors->first('password') }}</div>
                      @endif
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" name="remember_me" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                        @if (session('success'))
                          <div class="col-sm-12">
                            <div class="alert alert-success alert-solid alert-dismissible fade show" role="alert">{{ session('success') }}
                                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                            </div>
                          </div>
                        @endif
                        @if (session('error'))
                            <div class="col-sm-12">
                                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            </div>
                        @endif
                    <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                      Remeber Cookie Test:
                      Remember me passes a cookie to the user so that if they return to the site they are automatically validated

                      If the user Logs out then they will have to login again as the remember token at the server end is discarded (for safety)

                      The way to test is to login, then close the browser. Reopen the browser and visit some of the restricted content. You will be automatically logged in.

                      So to re-iterate. If you logout then you must login. The remember function DOES NOT populate the password field. This is something you browser does if you have it enabled.
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                     {{ Form::close() }}
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
@endsection