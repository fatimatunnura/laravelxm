<div class="form-group">
    {!! Form::label('candidate_name', 'Name:') !!}
    {!! Form::text('candidate_name') !!}
</div>
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::int('id') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
 