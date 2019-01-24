@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center><h3> Add New Student</h3></center>
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


        <form action="{{route('student.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <strong>Full Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-12">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-12">
                    <strong>dateOfBirth</strong>
                    <input type="date" name="dateOfBirth" class="form-control" placeholder="date">
                </div>
                <div class="col-md-12">
                    <strong>Phone</strong>
                    <input type="text" name="phone" class="form-control" placeholder="+84">
                </div>
                <div class="col-md-12">
                    <strong>Class</strong>
                    <input type="text" name="class_id" class="form-control">
                </div>
                {{--<div class="col-md-12">--}}
                    {{--<strong>ID card or Passport</strong>--}}
                    {{--<input type="text" name="Passport" class="form-control" placeholder="#">--}}
                {{--</div>--}}
                {{--<div class="col-md-12">--}}
                    {{--<strong>Class</strong>--}}
                    {{--<input type="text" name="Class" class="form-control" placeholder="Class">--}}
                {{--</div>--}}
                {{--<div class="form-group container-fluid">--}}
                    {{--<label for="inputAddress">Address</label>--}}
                    {{--<input type="text" class="form-control" id="inputAddress" placeholder="Nhập địa chỉ  ">--}}
                {{--</div>--}}

                <div class="col-md-12" style="margin-top: 20px">
                    <a href="{{route('student.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
