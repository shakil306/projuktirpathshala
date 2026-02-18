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

<div class="pending" style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">
<h1 >{{$page}}</h1>

<div class="search-container" style="
  float: right; margin-top: -44px;
    margin-right: 21px;

">
    <form action="{{ route('search') }}" method="GET">
      <input type="text" placeholder="Search by Student ID.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th >Student Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course Name</th>
        <th>Course Id</th>
        <th>Fee</th>
        <th>Payment Status</th>
        <th>Invoice</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($students as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$single_data->id}}</td>
            <td>{{$single_data->name}}</td>
            <td>{{$single_data->email}}</td>
            <td>{{$single_data->phone}}</td>
            <td>{{$single_data->course_name}}</td>
            <td>{{$single_data->course_duration}}</td>
            <td>{{$single_data->fee}}</td>
            <td>{{$single_data->payment}}</td>
            <td>{{$single_data->invoice}}</td>
            <td>
            @if($single_data->payment != 'Complete')
   
            <a href="{{route('paynow1', ['id'=>$single_data->id])}}"  type="submit" id="del" onclick="myFunction()" class="btn btn-primary">Pay Now</a>
       
        @endif
                <a href="{{route('student_profile', ['id'=>$single_data->id])}}" target="_blank" class="btn btn-warning">Profile</a>
               
            </td>
        </tr>
    @endforeach
   
    </tbody>

</table>
{{$students->links()}}

@elseif(auth()->user()->status==='pending')
<center>
<h1> Your request is pending</h1>
</center>
@else
<center>
<h1> You are blocked by Super Admin</h1>
</center>
@endif

<script>

function myFunction() {
  
  if (confirm("Are you sure to make that payment status complete ?")) 
  {
   return true;
  } else {
    return false;
  }
  document.getElementById("del");
}
 </script>
</div>

@endsection
