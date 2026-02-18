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
        <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Pending Comments</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Comment</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($comments as $key=>$single_data)
                <tr>
                    <th scope="row">{{$key+1}}</th>

                    <td>{{$single_data->name}}</td>
                    <td>{{$single_data->email}}</td>
                    <td>{{$single_data->comment}}</td>
                    <td>{{$single_data->status}}</td>


                    <td>
                        @if($single_data->status=='pending')
                        <a href="{{route('acomment', ['id'=>$single_data->id])}}" class="btn btn-warning">Approve</a>
                        @else
                            <a href="{{route('comments-pending', ['id'=>$single_data->id])}}" class="btn btn-warning">Pending</a>
                        @endif
                            <a href="{{route('comments-delete', ['id'=>$single_data->id])}}" class="btn btn-warning">Delete</a>
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
