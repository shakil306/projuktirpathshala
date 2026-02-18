@php
Use App\Models\Title;
$title=Title::where('p_mark',"Mentor")->first();
@endphp


@php
use App\Models\Heading;
$heading=Heading::where('id',16)->first();
@endphp

@section('title'){{$title->text}}@endsection
@section('description'){{$title->description}}@endsection
@section('keyword'){{$title->keyword}}@endsection

@extends('master.master')

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



<!-- ======== Mentor Heading Top =============-->

<section class="mentor" id="mentor-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div>{!! $heading->name !!}</div>

                @Auth

                @if(auth()->user()->status==='active')
                <p class="text-center">
                    <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleMentorPage" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit Form
                    </a>
                </p>
                <div class="collapse" id="collapseExampleMentorPage">
                    <div class="">
                        <div class="" id="heading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                    </div>
                                    <form action="{{route('headingedit',['id'=>$heading->id])}}" method="POST" role="form"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <textarea name="heading" class="form-control" id="summernote" required>{{$heading->name}}</textarea>
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
                </div>
                @endif
                @endif
            </div>
        </div>
    </div>
</section>
<!-- ========End Mentor Heading Top  =============-->

<!--======== Start Mentors Section graphic =========-->
<section class="mentor" id="mentor-section-1">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($firstTwoData as $mentor)
            <div class="col-md-3">
                <div class="client row">
                    <div class="col text-center client-item">
                        <div class="client imgag text-center">
                            <img src="{{asset('uploads/mentor/'.$mentor->profile_image)}}" alt="{{$mentor->department}}">
                        </div>
                        <div class="client-title">
                            <h3>{{$mentor->name}}</h3>
                            <h6>{{$mentor->Department}}</h6>
                            <p>{{$mentor->department}}</p>
                        </div>

                        @Auth
                        @if(auth()->user()->status==='active')
                        <a href="{{route('mentoredit3', ['id'=>$mentor->id])}}" class="btn btn-primary"
                            type="button">Edit</a>
                        @endif
                        @endif

                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @foreach($mentors as $mentor)
            <div class="col-md-3">
                <div class="client row">
                    <div class="col text-center client-item">
                        <div class="client imgag text-center">
                            <img src="{{asset('uploads/mentor/'.$mentor->profile_image)}}" alt="{{$mentor->department}}">
                        </div>
                        <div class="client-title">
                            <h3>{{$mentor->name}}</h3>
                            <h6>{{$mentor->Department}}</h6>
                            <p>{{$mentor->department}}</p>
                        </div>
                        @Auth
                        @if(auth()->user()->status==='active')
                        <a href="{{route('mentoredit3', ['id'=>$mentor->id])}}" class="btn btn-primary"
                            type="button">Edit</a>
                        @endif
                        @endif

                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection