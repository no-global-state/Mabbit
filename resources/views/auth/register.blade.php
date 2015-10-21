@extends('layouts.master')

@section('title')
Registration
@stop

@section('content')

{!! Form::open(['url' => '/auth/register']) !!}
    
    <p class="text-muted"><i class="glyphicon glyphicon-user"></i> Already have an account? <a href="/auth/login">You can login instead</a></p>

    <div class="form-group">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email:') !!}
      {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Password:') !!}
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password_confirmation', 'Confirm Password:') !!}
      {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    @include('partials.errors')

    <div class="form-group">
      {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}

@stop