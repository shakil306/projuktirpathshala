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
<div class="pending" style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">
    <h1 >Our Sister Concern</h1>

    <div class="search-container" style="float: right; margin-top: -44px;margin-right: 21px;">
        <a class="btn btn-info" href="{{route('addsister')}}">Add Sister Concern</a>
    </div>

</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Logo</th>
        <th scope="col">Alt</th>
        <th scope="col">Link</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($sisterconcens as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>

            <td>{{$single_data->name}}</td>
            <td> <img style="width: 100px;" src="{{url('public/uploads/sister/'.$single_data->logo)}}" alt="DMS"> </td>
            <td>{{$single_data->alt}}</td>
            <td>{{$single_data->link}}</td>
            <td>
                <a href="{{route('sisteredit', ['id'=>$single_data->id])}}" class="btn btn-success">Edit</a>
                <a href="{{route('sisterdelete', ['id'=>$single_data->id])}}" class="btn btn-success">Delete</a>
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
