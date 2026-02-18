@extends('admin.master')

@section('content')

@if(auth()->user()->status==='active')
<div class="container">

    <h3>Admin Create</h3>

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
        <form action="{{route('admin.update', $edit->id)}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" value="{{$edit->name}}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" value="{{$edit->email}}" required>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col">
                        <img style="width: 80px; height: 80px;" src="{{asset('uploads/admin/'.$edit->profile_image)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Role</label>
                <select class="form-control" id="role" name="role" required>
                    <option> Please select </option>
                    <option value="super admin">Super Admin</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option> Please select </option>
                    <option value="active">Active</option>
                    <option value="pending">Pending</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Save</button>
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