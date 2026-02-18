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

                     <form action="{{route('leaderedit2',['id'=>$leader->id])}}" method="POST" role="form" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <textarea name="name" class="form-control" id="" required>{{$leader->name}}</textarea>
                        <!--<input name="name"  value="{{$leader->name}}" class="form-control" id="name" type="text" required>-->

                         <label for="description"> Description</label>
                        <textarea name="description" class="form-control" id="summernote" required>{{$leader->description}}</textarea>
                         <!--<input type="string" name="description" value="{{$leader->description}}" class="form-control" id="description" required>-->

                         <label for="role">Role</label>
                        <input type="text" name="role" value="{{$leader->role}}" class="form-control" id="role" required>

                        <label for="institute">Institute</label>
                        <textarea name="institute" class="form-control" id="" required>{{$leader->institute}}</textarea>
                        <!--<input type="text" name="institute" value="{{$leader->institute}}" class="form-control" id="institute" required>-->

                        <div class="form-group">
                            <input name="image" type="file" class="form-control">
                        </div>
                        <label for="role">Alt</label>
                        <input type="text" name="alt" value="{{$leader->alt}}" class="form-control mb-2">

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
