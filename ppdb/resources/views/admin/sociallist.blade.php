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
{{-- <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Social Links</h1> --}}
<div class="pending" style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">
    <h1 >Social Links</h1>

    <div class="search-container" style="float: right; margin-top: -44px;margin-right: 21px;">
        <a class="btn btn-info" href="{{route('newlink')}}">Add Social Links</a>
    </div>

</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Class</th>
        <th scope="col">link</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($links as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>

            <td>{{$single_data->class}}</td>
            <td>{{$single_data->link}}</td>
         
           
            <td>
                <a href="{{route('linkedit', ['id'=>$single_data->id])}}" class="btn btn-success">Edit</a>
                <a href="{{route('linkdelete', ['id'=>$single_data->id])}}" class="btn btn-success">Delete</a>
              
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
