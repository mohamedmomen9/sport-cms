<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Ar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ar', 'Title Ar:') !!}
    {!! Form::text('title_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Ar Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_ar', 'Description Ar:') !!}
    {!! Form::textarea('description_ar', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Video Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::file('video') !!}
</div>
<div class="clearfix"></div>

<!-- Week Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('week_id', 'Week Id:') !!}
    {!! Form::select('week_id', $weekItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('matches.index') }}" class="btn btn-default">Cancel</a>
</div>
