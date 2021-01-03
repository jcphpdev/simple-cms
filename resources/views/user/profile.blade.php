@extends('layouts.back')

@section('breadcrumb')
<li class="breadcrumb-item active">{{ __('messages.Profile') }}</li>
@endsection

@section('content')
<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-4">
				<div class="card">
						<div class="card-header"><i class="icon-drop"></i> {{ $user->name }}</div>
						<div class="card-body">
							
								<div class="row">
										<div class="text-center">
												<img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
												<form enctype="multipart/form-data" action="/profile" method="POST">
														<label>Update Profile Image</label>
														<div class="custom-file mb-3">
															<input type="file" name="avatar" class="custom-file-input" id="validatedCustomFile" required>
															<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
															<div class="invalid-feedback">Example invalid custom file feedback</div>
														</div>
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<input type="submit" class="pull-right btn btn-sm btn-primary">
												</form>
										</div>
								</div>
							
						</div>
				</div>
		</div>
		<div class="col-lg-9 col-md-8 col-sm-8">
				<div class="card">
						<div class="card-header"><i class="icon-drop"></i> {{ __('messages.Profile') }}</div>
						<div class="card-body">
							
								
							
						</div>
				</div>
		</div>
</div>
@endsection
