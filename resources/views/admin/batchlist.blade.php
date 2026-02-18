@extends('admin.master')

@section('content')
<div class="container">
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
    @if(auth()->user()->status==='active')

        <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Batch List</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Batch Title</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($all_batch as $key=>$single_data)
                <tr>
                    <th scope="row">{{$key+1}}</th>

                    <td>{{$single_data->course_name}}</td>


                    <td> <img style="width: 100px;" src="{{url('public/uploads/batch/'.$single_data->image)}}" alt="DMS"> </td>


                    <td>
                        @if($single_data->status=="active")
                            <a href="{{route('complete', ['id'=>$single_data->id])}}" class="btn btn-success">Complete</a>
                        @endif
                        <a href="{{route('studentlist', ['id'=>$single_data->id])}}" class="btn btn-danger">Student List</a>
                        <a href="{{route('batchedit', ['id'=>$single_data->id])}}" class="btn btn-danger">Edit</a>
                        <a href="{{route('batch-delete', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>


        </table>

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
