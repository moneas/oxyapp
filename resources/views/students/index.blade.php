@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Oxy Students List</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Insert New Student</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Data Created</th>
            <th width="280px">Action</th>
        </tr>
    @if (count($students) > 0)
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ show_date($student->created_at) }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['students.destroy', $student->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    @else
        <tr>
            <td colspan="4"><center>Data empty</center></td>
        </tr>
    @endif
    </table>

    {!! $students->links() !!}
@endsection