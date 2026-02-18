@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')

<h3>Student Feedback</h3>

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
                <form action="{{route('student-feedback21')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input name="name"  class="form-control" id="title" type="text" required>


                        <label for="category">Department:</label>
                        <input type="text" name="department" class="form-control" required >

                        <label for="desc">Short Description</label>
                        <input type="string" name="description" class="form-control" id="desc" required>

                        <label for="desc">Set Priority</label>
                        <input type="number" name="priority" class="form-control" id="desc" required>
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
@endif
</div>

@endsection
