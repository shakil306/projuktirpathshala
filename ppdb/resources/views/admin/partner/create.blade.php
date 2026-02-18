@extends('admin.master')

@section('content')

<div class="container">
    @if(auth()->user()->status==='active')
        <div class="container">

            <h3>Add Partner</h3>

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
                <form action="{{route('partner.store')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input name="name"  class="form-control" id="name" type="text" required>

                        <label for="title">Image</label>
                        <input type= "file" name= "image" class="form-control" required>

                        <button type="submit" class="btn btn-primary mt-2">Save</button>
                    </div>
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
</div>

@endsection
