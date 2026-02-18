@php
Use App\Models\Title;

$title=Title::where('p_mark',"Social Activity")->first();
@endphp
@php
use App\Models\Heading;
$heading=Heading::where('id',19)->first();
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

@php
$i=0;
@endphp

<!-- ======== Start Social Top Section =============-->
<section class="course-top" id="course-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1>{!! $heading->name !!}</h1>

                @Auth

                @if(auth()->user()->status==='active')
                <p class="text-center">
                    <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleSocialActivityFirstHeading" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit Form
                    </a>
                </p>
                <div class="collapse" id="collapseExampleSocialActivityFirstHeading">
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
<!-- ========End Social Top Section =============-->


<!-- ======== Start Social Top image Section =============-->
<section class="social-image" id="social-image">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <img class="img-fluid" src="{{asset('uploads/social/'.$social_cover->image)}}" alt="social activity">

                @Auth
                @if(auth()->user()->status==='active')
                <div class="modal-part">
                    <div class="container">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form30">
                            Edit Image
                        </button>
                    </div>

                    <div class="modal fade" id="form30" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('socialcover',['id'=>$social_cover->id])}}" method="POST"
                                    role="form" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="img" accept="image/*" required>
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
                @endif
                @endif
            </div>
        </div>
    </div>
</section>
<!-- ======== End Social Top image Section =============-->

@foreach($social_activities as $social_activity)


<!-- ======== Start Social Gallery Section =============-->
@if($i%2==0)
<section class="social-gallery" id="social-gallery">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="social-gallery-heading">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="gallery-img">
                    <img class="img-fluid" src="{{asset('uploads/social/'.$social_activity->image)}}" alt="Gallery-1">
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="gallery-text">
                    <div class="gallert-text-top">
                        <div>{!! $social_activity->title !!}</div>
                        <div class="gallery-left float-left">
                            <small>{{$social_activity->created_at}}</small>
                        </div>
                    </div>
                    <p>{{$social_activity->description}}</p>
                    <a href="{{route('social_activity_details',$social_activity->slug)}}" target="_blank" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>



@endif
<!-- ======== End Social Gallery Section =============-->

@if($i%2==1)
<!-- ======== Start Social Gallery Section =============-->
<section class="social-gallery" id="social-gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 order-num-2">
                <div class="gallery-text">
                    <div class="gallert-text-top">
                        <h3>{{$social_activity->title}}</h3>
                        <div class="gallery-left float-left">
                            <small>{{$social_activity->created_at}}</small>
                        </div>
                    </div>
                    <p>{{$social_activity->description}}</p>
                    <a href="{{route('social_activity_details',$social_activity->slug)}}" target="_blank" class="btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 order-num-1">
                <div class="gallery-img">
                    <img class="img-fluid" src="{{asset('uploads/social/'.$social_activity->image)}}" alt="Gallery-1">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======== End Social Gallery Section =============-->

@endif

@php
$i++;
@endphp

@endforeach





@endsection