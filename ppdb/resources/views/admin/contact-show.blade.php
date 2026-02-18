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
            <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Message Show</h1>
            <table class="table mt-2">
                <thead>
                    <tr class="text-center">
                        <td>Name : </td>
                        <td>{{$show->name}}</td>
                    </tr>
                    <tr class="text-center">
                        <td>Email : </td>
                        <td>{{$show->email}}</td>
                    </tr>
                    <tr class="text-center">
                        <td>Subject : </td>
                        <td>{{$show->subject}}</td>
                    </tr>
                    <tr class="text-center">
                        <td>Phone : </td>
                        <td>{{$show->phone}}</td>
                    </tr>
                    <tr class="text-center">
                        <td>Message : </td>
                        <td>{{$show->message}}</td>
                    </tr>
                </thead>
            </table>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <a href="{{ url()->previous() }}" class="btn btn-info ml-4">Ok</a>
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
