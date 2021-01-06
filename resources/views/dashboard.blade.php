@extends('layouts.back')

@section('breadcrumb')
<li class="breadcrumb-item active">{{ __('messages.Dashboard') }}</li>
@endsection

@section('content')
<div class="card">
  <div class="card-header"><i class="nav-icon la la-lg la-dashboard"></i> {{ __('messages.Dashboard') }}</div>
  <div class="card-body">
    You're logged in!
  </div>
</div>
@endsection
