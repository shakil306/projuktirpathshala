@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')

<h3>Add Social Link</h3>

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
                <form action="{{route('newlink2')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                        <label for="image">Class</label>
                        <input type="string" name="class" class="form-control" id="image" required>

                        <label for="link">Link</label>
                        <input type="string" name="link" class="form-control" id="link" required>

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
@endif
</div>

@endsection
