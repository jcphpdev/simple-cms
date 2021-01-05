<!DOCTYPE html>
<!--
* Backstrap - Free Bootstrap Admin Template
* @version v0.2.0
* @link https://backstrap.net
* Copyright (c) 2018 Cristian Tabacitu
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Backoffice - {{ config('app.name', 'Laravel') }}</title>
    <!-- Icons-->
    <link href="{{ asset('assets/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/css/backStrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>{{ __('messages.ResetPassword') }}</h1>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('password.update') }}">
                  @csrf
                  <input type="hidden" name="token" value="{{ $request->route('token') }}">
                  
                  <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="icon-user"></i></span></div>
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="{{ __('messages.Email') }}" id="email" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="icon-lock"></i></span></div>
                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="{{ __('messages.Password') }}" id="password" name="password">
                    @if ($errors->has('password'))
                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    @endif
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="icon-lock"></i></span></div>
                    <input class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" placeholder="{{ __('messages.PasswordConfirmation') }}" id="password_confirmation" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                    <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <button class="btn btn-primary btn-block px-4" type="submit">{{ __('messages.ResetPassword') }}</button>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/coreui.min.js') }}"></script>
  </body>
</html>