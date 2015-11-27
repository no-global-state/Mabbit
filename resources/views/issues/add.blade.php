@extends('layouts.master')

@section('title')
    Add an issue
@stop

@section('content')
  
  <h2 class="page-header">Add new issue</h2>
  
  {!! Form::open(['action' => 'Issues@store']) !!}
    @include('partials.form')
  {!! Form::close() !!}

@stop