@extends('layouts.master')

@section('title')
Tags
@stop

@section('content')

<div class="button-box">
    <a href="{{ action('Tag@create') }}" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-open"></i> Add new tag</a>
</div>

<div class="table-responsive white">
    <table class="table table-hover table-bordered table-striped table-condensed">
        <thead>
            <tr>
                <th class="text-center text-muted">#</th>
                <th>Name</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
                <td class="text-center text-muted">{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td class="text-center">
                    <a data-toggle="tooltip" data-placement="bottom" title="Edit this tag" href="{{ action('Tag@edit', $tag->id) }}"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a data-button="destroy" data-toggle="modal" data-target="#remove-confirmation" title="Remove this tag" href="{{ action('Tag@destroy', $tag->id) }}"><i class="glyphicon glyphicon-remove"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop