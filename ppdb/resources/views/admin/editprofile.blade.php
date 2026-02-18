<style>
img.rounded-circle.mt-5 {
    width: 230px;
}
</style>
@php
Use App\Models\Title;
$titleh=Title::where('p_mark',"Home")->first();
$titlea=Title::where('p_mark',"About")->first();
$titlec=Title::where('p_mark',"Course")->first();
$titlead=Title::where('p_mark',"Admission")->first();
$titlem=Title::where('p_mark',"Mentor")->first();
$titleb=Title::where('p_mark',"Blog")->first();
$titlecn=Title::where('p_mark',"Contact")->first();
$titleg=Title::where('p_mark',"Gallery")->first();
$titles=Title::where('p_mark',"Seminar")->first();
$titlesf=Title::where('p_mark',"Student Feedback")->first();
$titlesa=Title::where('p_mark',"Social Activity")->first();
@endphp

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
<center>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class="rounded-circle mt-5" src="{{url('public/uploads/admin/'.Auth()->user()->profile_image)}}">
            <span class="font-weight-bold">{{Auth()->user()->name}}</span>
            <span class="text-black-50">{{Auth()->user()->email}}</span>
            <span> </span>
        </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>


            <form action="{{route('editprofile2',['id'=>Auth()->user()->id])}}" method="POST" role="form" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="name" value="{{Auth()->user()->name}}" required></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email ID</label>
                    <input type="email" name="email" class="form-control" placeholder="enter email id" value="{{Auth()->user()->email}}" required></div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12"><label class="labels">Profile Image</label>
                    <input type="file" name="image" class="form-control" ></div>
                </div>
                <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>

            </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</center>

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
