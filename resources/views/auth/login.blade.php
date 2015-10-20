@extends('layouts.master')

@section('title')
Login
@stop

@section('content')
{!! Form::open(['url' => '/auth/login']) !!}

	<div class="form-group">
	  {!! Form::label('email', 'Email:') !!}
	  {!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	  {!! Form::label('password', 'Password:') !!}
	  {!! Form::password('password', ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	  {!! Form::label('remember', 'Remember me') !!}
	  {!! Form::checkbox('remember') !!}
	</div>

    @include('partials.errors')

	<div class="form-group">
	  {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}
@stop