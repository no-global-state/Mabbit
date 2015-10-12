@extends('layouts.master')

@section('title')
	Add an issue
@stop

@section('content')
  
  <h2 class="page-header">Add new issue</h2>
  
  {!! Form::open(['action' => 'Issues@addAction']) !!}
  	@include('partials.form')
  {!! Form::close() !!}

   @include('partials.errors')
   
@stop