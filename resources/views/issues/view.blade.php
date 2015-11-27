@extends('layouts.master')

@section('title')
Details for issue # {{ $issue->id }}
@stop

@section('content')

<h2>{{ $issue->name }}</h2>

<div class="container white">
    <article>{{ $issue->description }}</article>
</div>

@stop