@extends('admin.master')

@section('content')

    <div class="container">
        @if(auth()->user()->status==='active')

            <h3>Edit image in Galley</h3>

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
                <form action="{{route('updateGalleryImage',['id'=>$edit->id])}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Image:</label>
                        <input name="image" type="file" class="form-control">
                    </div>

                    <label for="category">Select Category:</label>
                    <select name="category" id="category" class="form-control" required>
                        <option disabled selected>Select Category</option>
                        <option value="Student">Student</option>
                        <option value="Mentor">Mentor</option>
                        <option value="Event">Event</option>
                    </select>

                    <label for="category">Alt:</label>
                    <input type="text" name="alt" value="{{$edit->alt}}" class="form-control">

                    <button type="submit" class="btn btn-primary mt-2">Save</button>

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
