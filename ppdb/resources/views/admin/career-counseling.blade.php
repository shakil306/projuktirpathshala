@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')

    <h3 class="ml-4">Update image In Career Counseling</h3>

    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="modal-body">

        <form action="{{route('career-counseling.update', $counselings->id)}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name"> Update Image:</label>
                <input name="image" type="file" class="form-control">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="name"> Alt:</label>--}}
{{--                <input type="text" name="alt" class="form-control" value="{{$counselings->alt}}">--}}
{{--            </div>--}}

            <button type="submit" class="btn btn-primary">Update</button>

        </form>

        <br>
        <br>
        <div class="container">
            <div class="row text-center">
                <h2 class="text-center">Career Counseling Image</h2>
                <div class="col-md-12">
{{--                        @foreach($counselings as $counseling )--}}
                    <img src="{{url('public/uploads/welcome/'.$counselings->image)}}" alt="">
{{--                        @endforeach--}}
                    <h2 class="text-center">{{$counselings->alt}}</h2>
                </div>
            </div>
        </div>
        @elseif(auth()->user()->status==='pending')
            <center>
                <h1> Your request is pending</h1>
            </center>
        @else
            <center>
                <h1> You are blocked by Super Admin</h1>
            </center>

@endif
</div>

@endsection
