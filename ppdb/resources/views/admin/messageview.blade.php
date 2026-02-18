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
<h1>Subject: {{$contact_us->subject}}</h1>
<h2>Name: {{$contact_us->name}}</h2>
<h3>Phone: {{$contact_us->phone}}</h3>
<h3>Email: {{$contact_us->email}}</h3>
<br> <br> <br>
<p>{{$contact_us->message}}
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
