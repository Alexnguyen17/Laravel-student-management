@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3> Edit Student</h3>
            </div>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <strong> Whoops! </strong> there where some problems with your input.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{route('student.update', $student->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" value="{{$student->name}}">
                </div>
                <div class="col-md-12">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" value="{{$student->email}}">
                </div>
                <div class="col-md-12">
                    <strong>dateOfBirth:</strong>
                    <input type="text" name="dateOfBirth" class="form-control" value="{{$student->dateOfBirth}}">
                </div>
                <div class="col-md-12">
                    <strong>Phone:</strong>
                    <input type="text" name="phone" class="form-control" value="{{$student->phone}}">
                </div>
                {{--<div class="col-md-12">--}}
                    {{--<strong>ID card or Passport:</strong>--}}
                    {{--<input type="text" name="passport" class="form-control" value="{{$student->passport}}">--}}
                {{--</div>--}}
                {{--<div class="col-md-12">--}}
                    {{--<strong>Class:</strong>--}}
                    {{--<input type="text" name="class" class="form-control" value="{{$student->class}}">--}}
                {{--</div>--}}
                {{--<div class="col-md-12">--}}
                    {{--<strong>Address:</strong>--}}
                    {{--<input type="text" name="address" class="form-control" value="{{$student->address}}">--}}
                {{--</div>--}}

                <div class="col-md-12" style="margin-top: 20px">
                    <a href="{{route('student.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
