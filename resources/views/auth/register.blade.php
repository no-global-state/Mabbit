@extends('layouts.master')

@section('title')
Registration
@stop

@section('content')

{!! Form::open(['url' => '/auth/register']) !!}

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