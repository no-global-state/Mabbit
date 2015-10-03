@extends('layouts.master')
@section('content')

@if (!empty($records))

<table class="table">
	<thead>
		<th>#</th>
		<th>Issue</th>
		<th>Description</th>
		<th>Actions</th>
	</thead>
	<tbody>
		<tr>
			@foreach ($records as $record)
			<td>{{ $record->id }}</td>
			<td>{{ $record->name }}</td>
			<td>{{ $record->description }}</td>
			<td>
				<a href="#"><i class="glyphicon glyphicon-eye-open"></i> </a>
				<a href="{{ action('Issue@editViewAction', ['id' => $record->id]) }}"><i class="glyphicon glyphicon-file"></i> </a>
				<a href="#"><i class="glyphicon glyphicon-remove"></i> </a>
			</td>
			@endforeach
		</tr>
	</tbody>

</table>

@endif

@stop
