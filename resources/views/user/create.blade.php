@extends('layouts.back')

@section('breadcrumb')
<li class="breadcrumb-item active">{{ __('messages.UserCreate') }}</li>
@endsection

@section('content')
<div class="row">
		<div class="col-lg-9 col-md-8 col-sm-8">
				<div class="card">
						<div class="card-header"><i class="fas fa-users"></i> {{ __('messages.UserCreate') }}</div>
						<div class="card-body">
							
								@if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                
                <form class="form-horizontal" action="{{ route('store_user') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="username">{{ __('messages.Username') }}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="{{ __('messages.Username') }}" id="username" name="username" value="{{ old('username') }}">
                            @if ($errors->has('username'))
                            <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name">{{ __('messages.Name') }}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('messages.Name') }}" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email">{{ __('messages.Email') }}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('messages.Email') }}" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password">{{ __('messages.Password') }}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('messages.Password') }}" id="password" name="password" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                            <button class="btn btn-sm btn-primary" type="submit"><i class="far fa-dot-circle"></i> {{ __('messages.Submit') }}</button>
                        </div>
                    </div>
                    
                </form>
							
						</div>
				</div>
		</div>
</div>
@endsection
