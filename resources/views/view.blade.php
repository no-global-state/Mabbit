@extends('layouts.master')

@section('title')
Details for issue # {{ $issue->id }}
@stop

@section('content')

<h2>{{ $issue->name }}</h2>

<article>{{ $issue->description }}</article>

@stop