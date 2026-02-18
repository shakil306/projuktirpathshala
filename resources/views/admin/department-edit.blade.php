@extends('admin.master')

@section('content')

<div class="container">
    @if(auth()->user()->status==='active')

    <h3>Edit Department</h3>

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

                    <form action="{{route('departmentedit2',['id'=>$department->id])}}" method="POST" role="form" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                    <div class="form-group">
                        <label for="name">Depertment Name:</label>
                        <input name="name" value="{{$department->name}}" required class="form-control" id="name" type="text" required>


                        <label for="description">Description:</label>
                        <input class="form-control" value="{{$department->description}}" name="description" id="description" required>

                      <label for="image">Image:</label>
                      <input name="image" class="form-control" id="image" type="file" >



                     </div>




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
