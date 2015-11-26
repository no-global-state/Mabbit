@extends('layouts.master')

@section('title')
Edit the tag
@stop

@section('content')

<h2 class="page-header">Edit the tag</h2>

{!! Form::model($model, ['action' => ['Tag@update', $model->id], 'method' => 'POST']) !!}
 @include('tags.form') 
 
 <br />
 <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-open"></i> Update</button>
 
{!! Form::close() !!}

@stop