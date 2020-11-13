<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $week->title }}</p>
</div>

<!-- Week Num Field -->
<div class="form-group">
    {!! Form::label('week_num', 'Week Num:') !!}
    <p>{{ $week->week_num }}</p>
</div>

<!-- Season Id Field -->
<div class="form-group">
    {!! Form::label('season_id', 'Season Id:') !!}
    <p>{{ $week->season_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $week->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $week->updated_at }}</p>
</div>

