@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3> List Class</h3>
            </div>
            <div class="col-md-2" style="margin-bottom: 20px">
                <a class="btn btn-success" href="{{ route('class.create') }}">Create New Class</a>
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
                <th width="300px">ClassName</th>
                <th>StartDay</th>
                <th>EndDay</th>
                <th width="180px">Action</th>
            </tr>
            @foreach($classes as $class)
                <tr>
                    <td><b>{{++$i}}.</b></td>
                    <td>{{$class->className}}</td>
                    <td>{{$class->startDay}}</td>
                    <td>{{$class->endDay}}</td>
                    <td>
                        <form action="{{ route('class.destroy', $class->id) }}" method="post">
                            <a class="btn btn-sm btn-success" href="{{route('class.show', $class->id)}}">Show</a>
                            <a class="btn btn-sm btn-warning" href="{{route('class.edit', $class->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>

            @endforeach


        </table>
        {!! $classes->links() !!}
    </div>
@endsection
