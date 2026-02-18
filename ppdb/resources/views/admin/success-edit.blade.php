@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')

    <h3>Edit Information</h3>

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

         <form action="{{route('success-edit2',['id'=>$s_student->id])}}" method="POST" role="form" enctype="multipart/form-data">
            @method('put')
            @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input name="name"  value="{{$s_student->name}}" class="form-control" id="name" type="text" required>

             <label for="description"> Description</label>
             <textarea name="description" class="form-control" id="summernote" required>{{$s_student->description}}</textarea>

             <label for="priority"> Priority</label>
             <input type="number" name="priority" value="{{$s_student->priority}}" class="form-control mb-2" id="priority" required>

        <div class="form-group">
            <input name="image" type="file" class="form-control">
        </div>

        <label for="priority">Alt</label>
        <input type="text" name="alt" value="{{$s_student->alt}}" class="form-control mb-2" >

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
