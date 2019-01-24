@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center><h3> Add New Class</h3></center>
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


        <form action="{{route('class.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <strong>ClassName:</strong>
                    <input type="text" name="className" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-12">
                    <strong>StartDay:</strong>
                    <input type="date" name="startDay" class="form-control" placeholder="startDay">
                </div>
                <div class="col-md-12">
                    <strong>EndDay :</strong>
                    <input type="date" name="endDay" class="form-control" placeholder="EndDay">
                </div>


                <div class="col-md-12" style="margin-top: 20px">
                    <a href="{{route('class.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
