@extends('admin.master')

@section('content')

<div class="container">
    @if(auth()->user()->status==='active')

        <h3>Open New Batch</h3>

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

        <form action="{{route('newbatch2')}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Course</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="course_id">
                        <option id="disabledSelect">Please Select One</option>
                        @foreach($courses as $course)
                            <option value="{{$course->id}}" >{{$course->title}}</option>
                        @endforeach
                    </select>
                </div>
                <label for="batch-name">Batch Name</label>
                <input name="course_name"  class="form-control" type="text" required placeholder="Enter Batch Name">

                <label for="date">Deadline</label>
                <input name="l_date"   class="form-control" id="date" type="date" required>

                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image" required>

                <button type="submit" class="btn btn-primary mt-2">Save</button>
            </div>
        </form>

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
