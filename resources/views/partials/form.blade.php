
<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the title of the issue']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Description:') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Describe the issue constructively']) !!}
</div>

<div class="form-group">
  {!! Form::label('tag_list', 'Tags:') !!}
  {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Solved:') !!}
  {!! Form::hidden('solved', '0') !!}
  {!! Form::checkbox('solved') !!}
</div>

<div class="form-group">
  {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
  <a href="{{ action('Issues@displayGridAction') }}" class="btn btn-primary">Cancel</a>
</div>
