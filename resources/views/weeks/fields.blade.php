<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Week Num Field -->
<div class="form-group col-sm-6">
    {!! Form::label('week_num', 'Week Num:') !!}
    {!! Form::number('week_num', null, ['class' => 'form-control']) !!}
</div>

<!-- Season Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('season_id', 'Season Id:') !!}
    {!! Form::select('season_id', $seasonItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('weeks.index') }}" class="btn btn-default">Cancel</a>
</div>
