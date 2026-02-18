@php
use App\Models\Title;
$tit=Title::where('p_mark',"All Course")->first();
@endphp
@extends('master.master')

@section('content')

<!-- Student Profile -->
<div class="student-profile py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent text-center">

                        <h3>{{$student->name}}</h3>
                    </div>
                    <div class="card-body">
                        <p class="mb-0"><strong class="pr-1">Student ID:</strong>{{$student->id}}</p>
                        <p class="mb-0"><strong class="pr-1">Batch:</strong>{{$student->course_name}}</p>
                        <p class="mb-0"><strong class="pr-1">Status:</strong>{{$student->status}}</p>
                    </div>
                </div>
             
                    <table class="table table-bordered">
                        <tr>
                            <th width="30%">Present Address </th>
                            <td width="2%">:</td>
                            <td>{{$student->present_address}}</td>
                        </tr>
                        <tr>
                            <th width="30%">Permanent Address </th>
                            <td width="2%">:</td>
                            <td>{{$student->parmanent_address}}</td>
                        </tr>
                </table>
          
        </div>
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                    <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                </div>
                <div class="card-body pt-0">
                    <table class="table table-bordered">
                        <tr>
                            <th width="30%">Phone </th>
                            <td width="2%">:</td>
                            <td>{{$student->phone}}</td>
                        </tr>
                        <tr>
                            <th width="30%">Email </th>
                            <td width="2%">:</td>
                            <td>{{$student->email}}</td>
                        </tr>
                        <tr>
                            <th width="30%">Gender</th>
                            <td width="2%">:</td>
                            <td>{{$student->gender}}</td>
                        </tr>

                        <tr>
                            <th width="30%">Father Name </th>
                            <td width="2%">:</td>
                            <td>{{$student->father_name}}</td>
                        </tr>

                        <tr>
                            <th width="30%">Mother Name </th>
                            <td width="2%">:</td>
                            <td>{{$student->mother_name}}</td>
                        </tr>

                        <tr>
                            <th width="30%">Present Address </th>
                            <td width="2%">:</td>
                            <td>{{$student->present_address}}</td>
                        </tr>

                        <tr>
                            <th width="30%">Blood Group</th>
                            <td width="2%">:</td>
                            <td>{{$student->blood}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<hr>

<center>
<h2>Course</h2>
</center>
<br>
<div class="container">
<div class="row">
<table style="width:150%">
    <tr>
        <th >Student Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course Name</th>
        <!--<th>Course Id</th>-->
        <th>Fee</th>
        <th>Payment Status</th>
        <th>Invoice</th>
        @if(auth()->user()->role==='student')
        @if($student->payment != 'Complete')
        <th>Action</th>
        @endif
        @endif
    </tr>
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->course_name}}</td>
        <!--<td>{{$student->course_duration}}</td>-->
        <td>{{$student->fee}}</td>
        <td>{{$student->payment}}</td>
        <td>{{$student->invoice}}</td>
        @if($student->payment != 'Complete')
        @if(auth()->user()->role==='student')
        <td>
            <a href="{{route('checkout', ['id'=>$student->id])}}" class="btn btn-primary">Pay Now</a>
        </td>
        @endif
        @endif
    </tr>
</table>
</div>
</div>
<br><br>
@endsection
