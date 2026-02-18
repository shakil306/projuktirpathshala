@php
Use App\Models\Title;
$title=Title::where('p_mark',"Social Activity Details")->first();
@endphp
@php
use App\Models\Heading;
$heading=Heading::where('id',21)->first();
@endphp

@section('title') {!! substr($social_activity->title, 4, -5) !!} | {{$title->text}}@endsection
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

<section class="course-top" id="course-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div>{!! $heading->name !!}</div>
                @Auth
                @if(auth()->user()->status==='active')
                <p>
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleSocialActivityDetailsHeading" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit
                  </a>
                </p>
                <div class="collapse" id="collapseExampleSocialActivityDetailsHeading">
                  <div class="">
                      <div class="" id="heading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="{{route('headingedit',['id'=>$heading->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <textarea name="heading" id="summernote" class="form-control" required>{{$heading->name}}</textarea>
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



<!-- ======== Start Social Gallery Section =============-->
<section class="social-gallery" id="social-gallery-details">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="gallery-img">
                    <img class="img-fluid" src="{{url('public/uploads/social/'.$social_activity->image)}}" alt="{{$social_activity->alt}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="gallery-text">
                    <div class="gallert-text-top">
                        <h3 class="text-center">{!! $social_activity->title !!}</h3>
                        <div class="gallery-left float-left">
                            <small>{{$social_activity->created_at}}</small>
                        </div>
                    </div>
                    <p>{{$social_activity->description}}</p>
                    @Auth
                    @if(auth()->user()->status==='active')
                    <p class="text-center">
                      <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleSocialActivityDetailsContent" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit
                      </a>
                    </p>
                    <div class="collapse" id="collapseExampleSocialActivityDetailsContent">
                      <div class="">
                          <div class="" id="form72" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                    </div>
                                    <form action="{{route('socialedit',['id'=>$social_activity->id])}}" method="POST"
                                        role="form" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="img">Select image:</label>
                                                <input type="file" id="img" name="img" accept="image/*">
                                            </div>
                                            <div class="form-group">
                                                <label for="img">Alt:</label>
                                                <input type="text" name="alt" value="{{$social_activity->alt}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="title" id="summernote" required>{{$social_activity->title}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="description" id="" required>{{$social_activity->description}}</textarea>
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
    </div>
</section>
@endsection
