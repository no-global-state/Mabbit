@extends('layouts.master')

@section('title')
    Edit an issue
@stop

@section('content')
  
  <h2 class="page-header">Edit issue # {{ $model->id }}</h2>
  
  {!! Form::model($model, ['action' => ['Issues@update', $model->id]]) !!}
  {!! Form::hidden('id') !!}

    @include('issues.form')
  {!! Form::close() !!}
   
@stop