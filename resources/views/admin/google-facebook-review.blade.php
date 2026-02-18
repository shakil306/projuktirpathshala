@extends('admin.master')

@section('content')

    @if(auth()->user()->status==='active')
        <div class="container">
            <h3>Google Facebook Reviews Update</h3>
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
                <form action="{{route('reviews.store', $edit->id)}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Google Index Page (Slider)</label>
                        <input type="text" name="google_h" class="form-control" value="{{$edit->google_h}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Google Review Page (Grid)</label>
                        <input type="text" name="google_r" class="form-control" value="{{$edit->google_r}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Facebook Index Page (Slider)</label>
                        <input type="text" name="facebook_h" class="form-control" value="{{$edit->facebook_h}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Facebook Review Page (Grid)</label>
                        <input type="text" name="facebook_r" class="form-control" value="{{$edit->facebook_r}}" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Update Reviews</button>

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
