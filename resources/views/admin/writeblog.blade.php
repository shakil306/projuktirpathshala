@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')

<div class="container">
    <h3>Write Blog</h3>

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
        <form action="{{route('writeblog2')}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Title:</label>
                <input name="title"  class="form-control" id="name" type="text" required>

                <input type="hidden" name="author" class="form-control" value="{{Auth::user()->id}}" required>

                <label for="description">Article:</label>
                <textarea type="string" name="description" required class="form-control" id="description" required></textarea>

                <label>Image</label>
                <input name="image" required class="form-control" id="image" type="file" required>

                <button type="submit" class="btn btn-primary mt-2">Save</button>
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

</div>
@endsection
