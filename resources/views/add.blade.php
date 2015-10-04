@extends('layouts.master')
@section('content')
  
  <h2 class="page-header">Add new issue</h2>
  
  {!! Form::open(['action' => 'Issue@addAction']) !!}
  	@include('partials.form')
  {!! Form::close() !!}

   @include('partials.errors')
   
@stop