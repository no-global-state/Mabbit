@extends('layouts.master')

@section('title')
Issues
@stop

@section('content')

<a class="btn btn-primary" href="{{ action('Issues@addViewAction') }}"><i class="glyphicon glyphicon-floppy-open"></i> New issue</a>

<br />
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
                    <a data-issue-id="{{ $record->id }}" title="Remove this issue" href="#" data-toggle="modal" data-target="#remove-confirmation"><i class="glyphicon glyphicon-remove"></i> </a>
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

<div class="modal fade" id="remove-confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure?</h4>
      </div>
      <div class="modal-body">
        <p>Dude, are you sure you want to remove this issue permanently?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-issue-button="remove"><i class="glyphicon glyphicon-ok"></i> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> No</button>
      </div>
    </div>
  </div>
</div>

@stop
