@extends('layouts.back')

@section('breadcrumb')
<li class="breadcrumb-item active">{{ __('messages.UserList') }}</li>
@endsection

@section('content')
<div class="row">
		<div class="col">
				<div class="card">
						<div class="card-header"><i class="fas fa-users"></i> {{ __('messages.UserList') }}</div>
						<div class="card-body">
							
								@if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
							
								<a href="{{ route('create_user') }}" class="btn btn-primary mb-2">{{ __('messages.UserCreate') }}</a> 
                <br>
                <table class="table table-sm table-responsive-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>{{ __('messages.Name') }}</th>
                            <th>{{ __('messages.Email') }}</th>
                            <th>{{ __('messages.Username') }}</th>
                            <th>{{ __('messages.InscriptionDate') }}</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ date('Y-m-d', strtotime($user->created_at)) }}</td>
                            <td>
                            <a href="users/{{$user->id}}" class="btn btn-sm btn-primary">{{ __('messages.Show') }}</a>
                            <a href="users/{{$user->id}}/edit" class="btn btn-sm btn-primary">{{ __('messages.Edit') }}</a>
                            <form action="users/{{$user->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">{{ __('messages.Delete') }}</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
							
						</div>
				</div>
		</div>
</div>
@endsection
