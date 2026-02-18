@extends('admin.master')

@section('content')

@if(auth()->user()->status==='active')
<div class="container">

    <h3>Events form</h3>

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
        <form action="{{route('addseminar2')}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title"  class="form-control" id="title" type="text">


                <label for="category">Select Category:</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="Seminar">Seminar</option>
                    <option value="Workshop">Workshop</option>
                </select>

                <label for="date"> Date</label>
                <input type="date" name="date" class="form-control" id="date" required>

                <label for="time">Start Time</label>
                <input type="time" name="time" class="form-control" id="time" required>

                <label for="etime">End Time</label>
                <input type="time" name="end_time" class="form-control" id="etime" required>

                <input type= "file" name= "image" class="form-control" required>


                <button type="submit" class="btn btn-primary mt-2">Save</button>
            </div>
        </form>
    </div>


    @elseif(auth()->user()->status==='pending')

        <center>
            <h1> Your request is pending</h1>
        </center>

    @else
        <center>
            <h1> You are blocked by Super Admin</h1>
        </center>
</div>
@endif

@endsection
