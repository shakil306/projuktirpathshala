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
                <form action="{{route('fedit2',['id'=>$feedback->id])}}" method="POST" role="form" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input name="name" value="{{$feedback->name}}"  class="form-control" id="title" type="text" required>

                        <label for="category">Department:</label>
                        <input type="text" name="department" value="{{$feedback->departmeent}}" class="form-control" required >

                        
                        <label for="desc">Short Description</label>
                        <input type="string" value="{{$feedback->description}}" name="description" class="form-control" id="desc" required>

                        <label for="desc">Set Priority</label>
                        <input type="number" value="{{$feedback->priority}}" name="priority" class="form-control" id="desc" required>

                        <input type= "file" name= "image" class="form-control">
                        <button type="submit" class="btn btn-primary">Save</button>
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
