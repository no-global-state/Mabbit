@extends('layouts.master')

@section('title')
Issues
@stop

@section('content')

<div class="pull-left">
    <a class="btn btn-primary" href="{{ action('Issues@addViewAction') }}"><i class="glyphicon glyphicon-floppy-open"></i> New issue</a>
</div>

<div class="col-lg-4 pull-right">
   {!! Form::label('filter', 'Filter:') !!}
   {!! Form::select('filter', $filters, $filter, ['class' => 'form-control']) !!}
</div>

<div class="clearfix"></div>

<br />

@if (!empty($records))

<div class="table-responsive white">
    <table class="table table-hover table-bordered table-striped table-condensed">
        <thead>
            <th class="text-center text-muted">#</th>
            <th>Name</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th class="text-center">Solved</th>
            <th class="text-center">Actions</th>
        </thead>
        <tbody>
            @foreach ($records as $record)
            <tr>
                <td class="text-center text-muted">{{ $record->id }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->created_at }}</td>
                <td>{{ $record->updated_at }}</td>
                <td class="text-center">{{ $record->solved ? 'Yes' : 'No' }}</td>
                <td class="text-center">
                    <a title="View description of this issue" href="{{ action('Issues@viewAction', ['id' => $record->id]) }}"><i class="glyphicon glyphicon-eye-open"></i> </a>
                    <a title="Edit this issue" href="{{ action('Issues@editViewAction', ['id' => $record->id]) }}"><i class="glyphicon glyphicon-file"></i> </a>
                    <a data-button="destroy" title="Remove this issue" href="{{ action ('Issues@destroy', $record->id) }}" data-toggle="modal" data-target="#remove-confirmation"><i class="glyphicon glyphicon-remove"></i> </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="text-center">
    {!! $records->render() !!}
</div>

@endif

@stop
