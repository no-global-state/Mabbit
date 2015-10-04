
<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the title of the issue']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Description:') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Describe the issue constructively']) !!}
</div>

<div class="form-group">
  {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>
