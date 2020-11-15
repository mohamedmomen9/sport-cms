<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $match->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $match->description }}</p>
</div>

<!-- Title Ar Field -->
<div class="form-group">
    {!! Form::label('title_ar', 'Title Ar:') !!}
    <p>{{ $match->title_ar }}</p>
</div>

<!-- Description Ar Field -->
<div class="form-group">
    {!! Form::label('description_ar', 'Description Ar:') !!}
    <p>{{ $match->description_ar }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <br>
    <img width="320" height="240" src="{{ URL::to('/storage/uploads/'. $match->image ) }}" alt="NoImg">
    <p>{{ $match->image }}</p>
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    <br>
    <video style="outline: none" width="320" height="240" controls>
        <source src="{{ URL::to('/storage/uploads/'. $match->video ) }}">
    <p>{{ $match->video }}</p>
</div>

<!-- Week Id Field -->
<div class="form-group">
    {!! Form::label('week_id', 'Week Id:') !!}
    <p>{{ $match->week_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $match->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $match->updated_at }}</p>
</div>

