@extends('layouts.master')

@section('title')
Issues
@stop

@section('content')

<a class="btn btn-primary" href="{{ action('Issue@addViewAction') }}"><i class="glyphicon glyphicon-floppy-open"></i> New issue</a>

<br />
<br />

@if (!empty($records))

<table class="table">
	<thead>
		<th class="text-muted">#</th>
		<th>Issue</th>
		<th>Description</th>
		<th>Solved</th>
		<th>Actions</th>
	</thead>
	<tbody>
		@foreach ($records as $record)
		<tr>
			<td class="text-muted">{{ $record->id }}</td>
			<td>{{ $record->name }}</td>
			<td>{{ $record->description }}</td>
			<td>{{ $record->solved ? 'Yes' : 'No' }}</td>
			<td>
				<a href="#"><i class="glyphicon glyphicon-eye-open"></i> </a>
				<a href="{{ action('Issue@editViewAction', ['id' => $record->id]) }}"><i class="glyphicon glyphicon-file"></i> </a>
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
