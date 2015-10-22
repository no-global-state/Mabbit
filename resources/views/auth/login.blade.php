@extends('layouts.master')

@section('title')
Login
@stop

@section('content')
<div class="col-lg-6">
{!! Form::open(['url' => '/auth/login']) !!}
    
    <p class="text-muted"><i class="glyphicon glyphicon-user"></i> Don't have an account? <a href="/auth/register">Click here to create a new one</a></p>

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
</div>
@stop