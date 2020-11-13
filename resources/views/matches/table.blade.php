<div class="table-responsive">
    <table class="table" id="matches-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Description</th>
        <th>Title Ar</th>
        <th>Description Ar</th>
        <th>Image</th>
        <th>Video</th>
        <th>Week Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
            <tr>
                <td>{{ $match->title }}</td>
            <td>{{ $match->description }}</td>
            <td>{{ $match->title_ar }}</td>
            <td>{{ $match->description_ar }}</td>
            <td>{{ $match->image }}</td>
            <td>{{ $match->video }}</td>
            <td>{{ $match->week_id }}</td>
                <td>
                    {!! Form::open(['route' => ['matches.destroy', $match->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('matches.show', [$match->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('matches.edit', [$match->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
