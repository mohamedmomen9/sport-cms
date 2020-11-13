<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $season->name }}</p>
</div>

<!-- Year Field -->
<div class="form-group">
    {!! Form::label('year', 'Year:') !!}
    <p>{{ $season->year }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $season->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $season->updated_at }}</p>
</div>

