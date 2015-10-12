@extends('layouts.master')

@section('title')
Issues
@stop

@section('content')

<a class="btn btn-primary" href="{{ action('Issues@addViewAction') }}"><i class="glyphicon glyphicon-floppy-open"></i> New issue</a>

<br />
<br />

@if (!empty($records))

<table class="table table-hover table-bordered table-striped table-condensed">
	<thead>
		<th class="text-center text-muted">#</th>
		<th>Issue</th>
		<th>Description</th>
		<th class="text-center">Solved</th>
		<th class="text-center">Actions</th>
	</thead>
	<tbody>
		@foreach ($records as $record)
		<tr>
			<td class="text-center text-muted">{{ $record->id }}</td>
			<td>{{ $record->name }}</td>
			<td>{{ $record->description }}</td>
			<td class="text-center">{{ $record->solved ? 'Yes' : 'No' }}</td>
			<td class="text-center">
				<a href="{{ action('Issues@viewAction', ['id' => $record->id]) }}"><i class="glyphicon glyphicon-eye-open"></i> </a>
				<a href="{{ action('Issues@editViewAction', ['id' => $record->id]) }}"><i class="glyphicon glyphicon-file"></i> </a>
				<a href="#"><i class="glyphicon glyphicon-remove"></i> </a>
			</td>
		</tr>
		@endforeach
	</tbody>

</table>

<div class="text-center">
	{!! $records->render() !!}
</div>

@endif

@stop
