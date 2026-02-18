@php
use App\Models\Comment;
@endphp
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
        <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Blogs List</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tile</th>
                <th scope="col">Author</th>
                <th scope="col">Viewed</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($blogs as $key=>$single_data)
                @php

                    $commentsp=Comment::where('status',"pending")->where('blog_id', $single_data->slug)->get();

                @endphp
                <tr>
                    <th scope="row">{{$key+1}}</th>

                    <td>{{$single_data->title}}</td>
                    <td>{{$single_data->name}}</td>
                    <td>{{$single_data->viewed}}</td>

                    <td>
                        <a href="{{route('pcomment', ['id'=>$single_data->slug])}}" class="btn btn-warning">Pending Comments({{count($commentsp)}})</a>
                        <a onclick="return confirm('Are you sure?')" href="{{route('delete-blog', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete Blog</a>
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
