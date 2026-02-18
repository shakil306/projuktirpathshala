@extends('admin.master')

@section('content')

<div class="container">
    @if(auth()->user()->status==='active')

    <h3>Add new image In Gallery Slider</h3>

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

    <form action="{{route('newslider2')}}" method="post" role="form" enctype="multipart/form-data">
    @csrf

        <div class="form-group">
             <label for="name"> New Slider Image:</label>
            <input name="slider_image" type="file" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

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
