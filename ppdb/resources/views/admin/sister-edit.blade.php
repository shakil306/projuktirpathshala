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

         <form action="{{route('sisteredit2',['id'=>$sister->id])}}" method="POST" role="form" enctype="multipart/form-data">
            @method('put')
            @csrf
        <div class="form-group">
            <label for="name">Organization Name:</label>
            <input name="name"  value="{{$sister->name}}" class="form-control" id="name" type="text" required>
            <label for="link">Link</label>
            <input type="url" name="link" value="{{$sister->link}}" class="form-control mb-2" id="facebook" required>

        <div class="form-group">
            <input name="logo" type="file" class="form-control" >
        </div>

        <label for="link">Alt</label>
        <input type="text" name="alt" value="{{$sister->alt}}" class="form-control mb-2">


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
