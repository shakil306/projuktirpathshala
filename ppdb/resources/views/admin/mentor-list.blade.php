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

<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Mentor's List</h1>
<table style="padding-left:10px;" class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Depertment</th>
        <th scope="col">Role</th>
        <!--<th scope="col">Description</th>-->
        <th scope="col">Status</th>
        <th scope="col">Photo</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($all_mentors as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>

            <td>{{$single_data->name}}</td>
            <td>{{$single_data->department}}</td>
            <td>{{$single_data->role}}</td>
            <!--<td>{!! $single_data->description !!}</td>-->
            <td>{{$single_data->status}}</td>
            <td>
                <img style="width: 100px;" src="{{url('public/uploads/mentor/'.$single_data->profile_image)}}" alt="DMS">
            </td>
            <td>
                <a href="{{route('mentoredit', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>


                @csrf
                                                @method('DELETE')

                                                <a href="{{url('/mentor/delete/',$single_data->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#exampleModaldelete{{$single_data->id}}">Delete</a>


            </td>
        </tr>



        <div class="modal fade" id="exampleModaldelete{{$single_data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete your data?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                             </button>
                                                 </div>
                                                <div class="modal-body">

                    <form action="{{url('/mentor/delete',$single_data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-btn text-center">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
