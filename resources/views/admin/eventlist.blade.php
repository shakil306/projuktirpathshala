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

<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Event List</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Date</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($events as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>

            <td>{{$single_data->title}}</td>
            <td>{{$single_data->date}}</td>
            <td>{{$single_data->s_time}}</td>
            <td>{{$single_data->s_time}}</td>
           <td> <img style="width: 100px;" src="{{url('public/uploads/event/'.$single_data->image)}}" alt="DMS"> </td>
           <td>{{$single_data->status}}</td>

            <td>
            @if($single_data->status=="Active")
                <a href="{{route('completeevent', ['id'=>$single_data->id])}}" class="btn btn-success">Done</a>
            @endif
                <a href="{{route('participants', ['id'=>$single_data->id])}}" class="btn btn-success">Participants</a>
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
