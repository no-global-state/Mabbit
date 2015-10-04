@extends('layouts.master')
@section('content')
  
  <h2 class="page-header">Edit issue # {{ $model->id }}</h2>
  
  {!! Form::model($model, ['action' => 'Issue@editAction', $model->id]) !!}
  {!! Form::hidden('id') !!}

    @include('partials.form')
  {!! Form::close() !!}

   @include('partials.errors')
   
@stop