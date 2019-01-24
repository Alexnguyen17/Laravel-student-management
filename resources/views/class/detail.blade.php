@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-4">
                        <h3> Detail Class</h3>

                    </div>
                    <div class="col-8">
                        <a class="btn btn-sm btn-success" href="{{ route('student.create') }}">Add new Student </a>

                    </div>
                </div>

                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong> ClassName : </strong> {{$class->className}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong> StartDay : </strong> {{$class->startDay}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong> EndDay : </strong> {{$class->endDay}}
                </div>
            </div>
        </div>

        <hr>

        <div class="col-md-12">
            <a href="{{route('class.index')}}" class="btn btn-sm btn btn-success">Back</a>
        </div>
    </div>








@endsection
