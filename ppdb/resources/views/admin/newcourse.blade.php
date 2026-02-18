@extends('admin.master')

@section('content')

@if(auth()->user()->status==='active')
<div class="container">

    <h3>Open New Course</h3>

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
        <form action="{{route('assign-course2')}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Course Title:</label>
                <input type="text" name="title"  class="form-control" id="name" required>

                <label for="department_name">Select Department:</label>
                <select name="department_name" id="department_name" class="form-control" required>

                    @foreach($departments as $department)
                        <option value="{{$department->name}}">{{$department->name}}</option>
                    @endforeach
                </select>


                <label for="t_class"> Total Classes</label>
                <input type="number" name="t_class" class="form-control" id="t_class" required>


                <label for="description"> Description</label>
                <textarea type="string" name="description" class="form-control" id="description" required></textarea>

                <label for="discount">Discount</label>
                <input type="string" name="discount" class="form-control" id="discount" required>

                <label for="duration">Duration</label>
                <input type="string" name="duration" class="form-control" id="duration" required>

                <label for="fee">Course Fee</label>
                <input type="decimal" name="fee" class="form-control" id="fee" required>

                <label for="fee">Meta Title</label>
                <input type="text" name="meta_title" class="form-control" id="fee" required>

                <label for="fee">Meta Description</label>
                <input type="text" name="meta_description" class="form-control" id="fee" required>

                <label for="fee">Meta Keyword</label>
                <input type="text" name="meta_keyword" class="form-control" id="fee" required>


                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image" required>

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

@endsection
