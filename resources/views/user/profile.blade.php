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
															<label class="custom-file-label" for="validatedCustomFile">{{ __('messages.ChooseFile') }}</label>
                              @if ($errors->has('avatar'))
                              <div class="invalid-feedback">{{ $errors->first('avatar') }}</div>
                              @endif
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
						<div class="card-header"><i class="far fa-address-card"></i> {{ $user->name }} {{ __('messages.Profile') }}</div>
						<div class="card-body">
							
								<table class="table table-responsive-sm table-striped">
                  <tbody>
                    <tr>
                      <th class="w-25">{{ __('messages.Name') }} :</th>
                      <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                      <th>{{ __('messages.Email') }} :</th>
                      <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                      <th>{{ __('messages.Username') }} :</th>
                      <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                      <th>{{ __('messages.InscriptionDate') }} :</th>
                      <td>{{ $user->created_at }}</td>
                    </tr>
                  </tbody>
                </table>
							
						</div>
				</div>
		</div>
</div>
@endsection
