<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>


<div class="form-group">
    {!! Form::label('description', 'Description:') !!}<br>
    {!! Form::textarea('description') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>