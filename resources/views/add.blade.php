@extends('layouts.master')
@section('content')
  
  <h2 class="page-header">Add new issue</h2>
  
  {!! Form::open(['action' => 'Issue@addAction']) !!}

	<div class="form-group">
	  {!! Form::label('name', 'Name:') !!}
	  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the title of the issue']) !!}
	</div>

	<div class="form-group">
	  {!! Form::label('description', 'Description:') !!}
	  {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Describe the issue constructively']) !!}
	</div>

	<div class="form-group">
	  {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
	</div>

  {!! Form::close() !!}

   @if ($errors->any())

   	<ul class="alert alert-danger">

   		@foreach ($errors->all() as $error)
   		<li>{{ $error }}</li>
   		@endforeach

   	</ul>
   @endif
@stop