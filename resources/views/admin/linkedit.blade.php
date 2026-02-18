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

                    <form action="{{route('linkedit2',['id'=>$link->id])}}" method="POST" role="form" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                    <div class="form-group">
                        <label for="name"> Class:</label>
                        <input name="class" value="{{$link->class}}" required class="form-control" id="name" type="text" required>


                        <label for="description">Link:</label>
                        <input class="form-control" value="{{$link->link}}" name="link" id="description" required>
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
