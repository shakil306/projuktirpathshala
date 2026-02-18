@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')


<h3>Add Module</h3>

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
                <form action="{{route('createmodule2')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">      
                        <input name="id" value="{{$course->id}}"   class="form-control" id="id" type="hidden" required>


                        <label for="image">Name</label>
                        <input type="text" name="name" class="form-control" id="image" required>



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
