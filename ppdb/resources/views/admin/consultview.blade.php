@extends('admin.master')

@section('content')

<div class="container">
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
<center>
<h1>Name: {{$consult->name}}</h1>
<h2>Phone Number: {{$consult->phone}}</h2>
<h3>Email: {{$consult->email}}</h3>
<h3>Course: {{$consult->course}}</h3>
<br> <br> <br>
<p>{{$consult->message}}
</center>

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
