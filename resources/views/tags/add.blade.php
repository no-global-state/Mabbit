@extends('layouts.master')

@section('title')
Add new tag
@stop

@section('content')

<h2 class="page-header">Add new tag</h2>

{!! Form::open(['action' => 'Tag@store', 'method' => 'POST']) !!}
 @include('tags.form') 
 
 <br />
 <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-open"></i> Submit</button>
 
{!! Form::close() !!}

@stop