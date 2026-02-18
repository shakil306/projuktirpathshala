@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')

    <h3>Future Leader</h3>

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

                    <form action="{{route('newleader2')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input name="name"  class="form-control" id="name" type="text" required>

                         <label for="description"> Description</label>
                        <textarea type="string" name="description" class="form-control" id="description" required></textarea>
                        
                         <label for="role">Role</label>
                        <input type="text" name="role" class="form-control" id="role" required>

                        <label for="priority">Priority Rate</label>
                        <input type="number" name="priority" class="form-control" id="priority" required>


                        <label for="institute">Institute</label>
                        <input type="text" name="institute" class="form-control" id="institute" required>

        <div class="form-group">
            <input name="profile_image" type="file" class="form-control" required>
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
