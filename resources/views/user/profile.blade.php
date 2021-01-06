@extends('layouts.back')

@section('breadcrumb')
<li class="breadcrumb-item active">{{ __('messages.Profile') }}</li>
@endsection

@section('content')
<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-4">
				<div class="card">
						<div class="card-header"><i class="far fa-id-badge"></i> {{ $user->name }}</div>
						<div class="card-body">
						
								@if ($message = Session::get('success'))
										<div class="alert alert-success alert-block">
												<button type="button" class="close" data-dismiss="alert">×</button>
												<strong>{{ $message }}</strong>
										</div>
								@endif
							
								<div class="row">
										<div class="text-center">
												<img src="/storage/avatars/{{ $user->avatar }}" style="width:150px; height:150px; border-radius:50%; margin-right:25px;">
												<form enctype="multipart/form-data" action="{{ route('profile.update_avatar') }}" method="POST">
														<label>{{ __('messages.UpdateProfileImage') }}</label>
														<div class="custom-file mb-3">
															<input type="file" name="avatar" class="custom-file-input" id="validatedCustomFile" required>
															<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
															<div class="invalid-feedback">Example invalid custom file feedback</div>
														</div>
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<input type="submit" class="btn btn-sm btn-primary btn-block">
												</form>
										</div>
								</div>
								
							
						</div>
				</div>
		</div>
		<div class="col-lg-9 col-md-8 col-sm-8">
				<div class="card">
						<div class="card-header"><i class="far fa-address-card"></i> {{ __('messages.Profile') }}</div>
						<div class="card-body">
							
								
							
						</div>
				</div>
		</div>
</div>
@endsection
