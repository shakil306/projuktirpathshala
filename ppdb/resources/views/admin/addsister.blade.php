@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')

    <h3>Sister Concern</h3>

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

                    <form action="{{route('addsister2')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input name="name"  placeholder="Enter Organization Name" class="form-control" id="name" type="text" required>

                    

                        <label for="facebook">Link</label>
                        <input type="url" name="link" class="form-control" id="facebook" required>

                       
        <div class="form-group">
        <label for="name">Logo:</label>
            <input name="logo" type="file" class="form-control" required>
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
