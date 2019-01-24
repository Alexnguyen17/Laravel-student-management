@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3> Detail Student</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name :</strong> {{$student->name}}

            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Email :</strong> {{$student->email}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>dateOfBirth :</strong> {{$student->dateOfBirth}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Phone :</strong> {{$student->phone}}
            </div>
        </div>
        {{--<div class="col-md-12">--}}
            {{--<div class="form-group">--}}
                {{--<strong>ID card or Passport :</strong> {{$student->passport}}--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-12">--}}
            {{--<div class="form-group">--}}
                {{--<strong>Class :</strong> {{$student->class}}--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-12">--}}
            {{--<div class="form-group">--}}
                {{--<strong>Address :</strong> {{$student->address}}--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="col-md-12">
            <a href="{{route('student.index')}}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
</div>
@endsection
