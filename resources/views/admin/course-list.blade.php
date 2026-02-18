@extends('admin.master')

@section('content')
<div class="container">
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

@if(auth()->user()->status==='active')
<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Courses</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Course Title</th>
        <th scope="col">Department</th>
        <th scope="col">Total Classes</th>
        <th scope="col">Discount</th>
        <th scope="col">Duration</th>
        <th scope="col">Course Fee</th>
        <th scope="col">Status</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($all_course as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>

            <td>{!! $single_data->title !!}</td>
            <td>{{$single_data->department}}</td>
            <td>{{$single_data->total_classes}}</td>
            <td>{{$single_data->discount}}</td>
            <td>{{$single_data->duration}}</td>

            <td>{{$single_data->course_fee}}</td>
            <td>{{$single_data->status}}</td>

           <td> <img style="width: 100px;" src="{{url('public/uploads/course/'.$single_data->image)}}" alt="DMS"> </td>


            <td>
                <a href="{{route('newbatch', ['id'=>$single_data->id])}}" class="btn btn-success">New Batch</a>
                <a href="{{route('requirements', ['id'=>$single_data->id])}}" class="btn btn-success">Requirements</a>
                <a href="{{route('createmodule', ['id'=>$single_data->id])}}" class="btn btn-success">Module</a>
                @if($single_data->status=="active")
                <a href="{{route('blockc', ['id'=>$single_data->id])}}" class="btn btn-success">block</a>
            @else
            <a href="{{route('activec', ['id'=>$single_data->id])}}" class="btn btn-success">Active</a>
            @endif
            <a href="{{route('course_details', ['id'=>$single_data->id])}}" class="btn btn-success">View</a>
            <a href="{{route('assign-course-edit', ['id'=>$single_data->id])}}" class="btn btn-success">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>


</table>

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
