<div class="table-responsive">
    <table class="table" id="weeks-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Week Num</th>
        <th>Season Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($weeks as $week)
            <tr>
                <td>{{ $week->title }}</td>
            <td>{{ $week->week_num }}</td>
            <td>{{ $week->season_id }}</td>
                <td>
                    {!! Form::open(['route' => ['weeks.destroy', $week->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('weeks.show', [$week->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('weeks.edit', [$week->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
