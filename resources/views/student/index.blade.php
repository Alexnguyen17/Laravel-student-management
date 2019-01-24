@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3> List Student </h3>
            </div>
            <div class="col-md-2">
                <a class="btn btn-sm btn-danger" href="{{ route('class.index') }}">Back to class list </a>
            </div>
            <div class="col-md-2">
                <a class="btn btn-sm btn-success" href="{{ route('student.create') }}">Create New Student</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif

        <table class="table table-hover table-sm">
            <tr>
                <th width="50px"><b>No.</b></th>
                <th width="300px"><b>Name</b></th>
                <th>Email</th>
                <th width="180px">Action</th>
            </tr>

            @foreach($students as $student)
                <tr>
                    <td><b>{{++$i}}.</b></td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>
                        <form action="{{route('student.destroy', $student->id) }}" method="post">
                            <a class="btn btn-sm btn-success" href="{{route('student.show', $student->id)}}">Show</a>
                            <a class="btn btn-sm btn-warning" href="{{route('student.edit', $student->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $students->links() !!}
    </div>



@endsection
