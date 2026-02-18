@php
use App\Models\Count;
$counts=Count::first();
@endphp

@section('title', 'Home | Projuktir Pathshala Institute')
@extends('admin.master')

@section('content')
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

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-main">
        <div class="app-main__outer">
            <div class="app-main__inner pl-5">
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div style="background-color: #0ea462;  width:200px; height:100px" ;
                            class="card mb-3 widget-content bg-midnight-bloom">
                            <div class="widget-content-wrapper text-white text-center pt-4">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total Batch's</div>
                                    <div></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$counts->batches}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div style="background-color: #0e1ea4; width:200px; height:100px" ;
                            class="card mb-3 widget-content bg-arielle-smile">
                            <div class="widget-content-wrapper text-white text-center pt-4">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Running Students</div>
                                    <div></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$counts->students}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div style="background-color: #a44e0e; width:200px; height:100px" ;
                            class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white text-center pt-4">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Succeed Students</div>
                                    <div></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$counts->s_students}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div style="background-color: #a4890e; width:200px; height:100px" ;
                            class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white text-center pt-4">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Experienced Mentor</div>
                                    <div></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$counts->mentors}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div style="background-color: #a4a40e; width:200px; height:100px" ;
                            class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white text-center pt-4">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total Payment's</div>
                                    <div></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$counts->payment}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div style="background-color: #181801; width:200px; height:100px" ;
                            class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white text-center pt-4">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Dues</div>
                                    <div></div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$counts->due}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
        <a href="{{url('/counts/update2',$counts->id)}}" class="action-btn btn btn-primary" data-toggle="modal"
            data-target="#exampleModal">Edit</a>
    </center>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/counts/update2', $counts->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Running Batch</label>
                                <input class="form-control" name="batch" value="{{$counts->batches}}" type="number"
                                    placeholder="Running Batch" required>
                            </div>
                            <div class="form-group">
                                <label>Running Student</label>
                                <input class="form-control" name="student" value="{{$counts->s_students}}" type="number"
                                    placeholder="Running Student" required>
                            </div>
                            <div class="form-group">
                                <label>Succeed Students</label>
                                <input class="form-control" name="s_student" value="{{$counts->s_students}}"
                                    type="number" placeholder="Succeed Students" required>
                            </div>
                            <div class="form-group">
                                <label>Experienced Mentor</label>
                                <input class="form-control" name="mentor" value="{{$counts->mentors}}" type="number"
                                    placeholder="Experienced Mentor" required>
                            </div>

                            <div class="form-group">
                                <label>Total Payment's</label>
                                <input class="form-control" name="payment" value="{{$counts->payment}}" type="number"
                                    placeholder="Total Payment's" required>
                            </div>

                            <div class="form-group">
                                <label>Total Due's</label>
                                <input class="form-control" name="due" value="{{$counts->due}}" type="number"
                                    placeholder="Total Due's" required>
                            </div>

                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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



    @endsection

