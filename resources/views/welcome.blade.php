@php
Use App\Models\Title;
$title=Title::where('p_mark',"Home")->first();
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
use App\Models\Welcome_slide;
$welcome_slides=Welcome_slide::get();
$s_i=0;
@endphp

<!-- ========= Start Slider Section =========-->
<section class="index-area home-slider" id="index-section">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators home-indecator">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            @foreach($welcome_slides as $welcome_slide)
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            @endforeach

        </ol>

        <div class="carousel-inner home-slider">
            @foreach($welcome_slides as $welcome_slide)
            @if($s_i==0)
            <div class="carousel-item active">
                <img style="width: 100%;height: 100%;" src="{{asset('uploads/welcome/'.$welcome_slide->image)}}" class="d-block w-100 home-slider" alt="{{$welcome_slide->alt}}">
            </div>
            @else
            <div class="carousel-item">
                <img style="width: 100%;height: 100%;" src="{{asset('uploads/welcome/'.$welcome_slide->image)}}" class="d-block w-100 home-slider" alt="{{$welcome_slide->alt}}">
            </div>
            @endif
            @php
            $s_i=1;
            @endphp
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- ========= End Slider Section =========-->

@php
use App\Models\Welcome;
$welcome=Welcome::first();
@endphp
<!-- ========= Start Wellcome Section =========-->
<section class="wellcome" id="wellcome-area">
    <div class="container">
        <div class="row text-center wellcome-part">
            <div class="col">
                <h1><span class="top_title"> {{$welcome->title}}</span></h1>
            </div>
        </div>
        <div class="row wellcome-part">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <img class="img-fluid" src="{{asset('uploads/welcome/'.$welcome->image)}}" alt="{{$welcome->alt}}">
            </div>



            <div class="col-lg-7 col-md-7 col-sm-12">
                <div>{!! $welcome->description !!}</div>

                <div class="col-md-12 text-center welcome_button">
                    <button class="btn btn-info" onclick="window.location='{{route('about')}}'">More Details</button>
                </div>

            </div>


            @Auth

            @if(auth()->user()->status==='active')
            <div class="container">
                <div class="col-12">
                    <p class="text-center">
                        <a class="btn btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Edit Form
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="">
                            <div class="" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">
                                        </div>
                                        <form action="{{route('welcomeedit',['id'=>$welcome->id])}}" method="POST" role="form"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="img">Select image:</label>
                                                    <input type="file" id="img" name="img" accept="image/*">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="alt" class="form-control"
                                                        value="{{$welcome->alt}}" placeholder="Enter alt tag">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="heading" class="form-control"
                                                        value="{{$welcome->title}}" required>
                                                </div>

                                                <div class="form-group">
                                                    <textarea id="summernote" class="form-control" name="description"
                                                        rows="8" required>{{$welcome->description}}</textarea>
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
                </div>
            </div>

            @endif
            @endif

        </div>
        <hr class="hr_welcome">
        @php
        use App\Models\Heading;
        $heading1=Heading::first();
        @endphp
        <div class="row text-center course-part">
            <div class="col">
                <div class="custom_h2">{!!$heading1->name!!}</div>

                @Auth

                @if(auth()->user()->status==='active')

                <p>
                    <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleOurCoursesTitle" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit Form
                    </a>
                </p>
                <div class="collapse" id="collapseExampleOurCoursesTitle">
                    <div class="">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('headingedit',['id'=>$heading1->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <textarea name="heading" class="form-control" id="summernote" required>{{$heading1->name}}</textarea>
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

        @php
        use App\Models\Course;
        $courses=Course::where('status', "active")->paginate(3);

        @endphp
        <div class="row tab-content card-part">

            <div class="card-item text-center">
                @foreach($courses as $course)

                <div class="col-lg-4 col-md-4 col-sm-12 item">
                    <div class="card">
                        <img class="img-fluid" src="{{asset('uploads/course/'.$course->image)}}" alt="{{$course->alt}}">
                        <div class="card-body text-center">
                            <div class="card-title">{!! Str::limit($course->title,30) !!}</div>
                            <div class="card-text">{!!$course->description!!}</div>
                        </div>

                        <div class="card-item-footer text-center">
                            <a href="{{route('course_details',['id'=>$course->slug])}}" target="_blank">View Course
                                Details</a>
                        </div>
                    </div>

                    @Auth

                    @if(auth()->user()->status==='active')

                    <p>
                        <a class="btn btn-danger" data-toggle="collapse" href="#collapseExample{{$course->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Edit Form
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample{{$course->id}}">
                        <div class="">
                            <div class="modal-part">
                                <div class="">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-bottom-0">
                                            </div>
                                            <form action="{{route('courseedit2',['id'=>$course->id])}}" method="post"
                                                role="form" enctype="multipart/form-data">
                                                @method('post')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="img">Select image:</label>
                                                        <input type="file" id="img" name="image" accept="image/*">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="alt"
                                                            value="{{$course->alt}}" class="form-control" placeholder="Enter alt tag">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea id="summernote" name="title"
                                                            class="form-control" required>{{$course->title}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" name="total_class"
                                                            value="{{$course->total_classes}}" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="string" name="discount" value="{{$course->discount}}"
                                                            class="form-control" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <textarea class="form-control" name="description"
                                                            placeholder="Description" id="summernote" cols="30" rows="10"
                                                            required>{{$course->description}}</textarea>
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
                    </div>

                    @endif
                    @endif
                </div>
                @endforeach

            </div>
        </div>
        <div class="row text-center button">
            <div class="col"><a href="{{route('course')}}" type="button" class="btn btn-primarry"> See All Course</a>
            </div>


        </div>
    </div>
</section>
<div class="container">
    <hr class="hr_welcome_area">
</div>
<!-- ========= End Wellcome Section =========-->


@php
use App\Models\Facility;
$facility=Facility::first();
$facility1=Facility::where('id','!=', $facility->id )->first();
$facility2=Facility::where('id','!=', $facility->id )->where('id','!=', $facility1->id )->first();
$facility3=Facility::where('id','!=', $facility->id )->where('id','!=', $facility1->id )->where('id','!=',
$facility2->id )->first();
$facility4=Facility::where('id','!=', $facility->id )->where('id','!=', $facility1->id )->where('id','!=',
$facility2->id )->where('id','!=', $facility3->id )->first();
$facility5=Facility::where('id','!=', $facility->id )->where('id','!=', $facility1->id )->where('id','!=',
$facility2->id )->where('id','!=', $facility3->id )->where('id','!=', $facility4->id )->first();
$facility6=Facility::where('id','!=', $facility->id )->where('id','!=', $facility1->id )->where('id','!=',
$facility2->id )->where('id','!=', $facility3->id )->where('id','!=', $facility4->id )->where('id','!=', $facility5->id
)->first();
@endphp

@php
$heading2=Heading::where('id','!=', $heading1->id)->first();
@endphp
<!-- ========= Facility Section =========-->
<section class="facility-area" id="facility-section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div>{!! $heading2->name !!}</div>
                @Auth

                @if(auth()->user()->status==='active')
                <p class="text-center">
                    <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleFacilityHeading" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit Form
                    </a>
                </p>
                <div class="collapse" id="collapseExampleFacilityHeading">
                    <div class="">
                        <div class="" id="heading2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                    </div>
                                    <form action="{{route('headingedit',['id'=>$heading2->id])}}" method="POST" role="form"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <textarea name="heading" class="form-control" id="summernote" required>{{$heading2->name}}</textarea>

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
        <div class="row facility-items">
            <div class="col-lg-4 col-md-4 col-sm-12 facility-item facility_view">
                <div class="row text-center">
                    <div class="col mtf">
                        <i class="fas fa-globe"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col mtf">
                        <div>{!!$facility->name!!}</div>
                        <div>{!!Str::limit($facility->description,230)!!}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 facility-item facility_view">
                <div class="row text-center">
                    <div class="col mtf">
                        <i class="fab fa-odnoklassniki-square"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col mtf">
                        <div>{!!$facility1->name!!}</div>
                        <div>{!!Str::limit($facility1->description,245)!!}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 facility-item facility_view">
                <div class="row text-center">
                    <div class="col mtf">
                        <i class="fas fa-file-video"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col mtf">
                        <div>{!!$facility2->name!!}</div>
                        <div>{!!Str::limit($facility2->description,245)!!}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row facility-2 facility-items">
            <div class="col-lg-4 col-md-4 col-sm-12 facility-item facility_view">
                <div class="row text-center">
                    <div class="col mtf">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col mtf">
                        <div>{!!$facility3->name!!}</div>
                        <div>{!!Str::limit($facility3->description,245)!!}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 facility-item facility_view">
                <div class="row text-center">
                    <div class="col mtf">
                        <i class="fas fa-desktop"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col mtf">
                        <div>{!!$facility4->name!!}</div>
                        <div>{!!Str::limit($facility4->description,245)!!}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 facility-item facility_view">
                <div class="row text-center">
                    <div class="col mtf">
                        <i class="fas fa-user-edit"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col mtf">
                        <div>{!!$facility5->name!!}</div>
                        <div>{!!Str::limit($facility5->description,245)!!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @Auth
    @if(auth()->user()->status==='active')
    <center>
        <a class="btn btn-primary" href="{{route('facilities')}}">Click for Edit</a>
    </center>
    @endif
    @endif
</section>
<div class="container">
    <hr class="hr_facility">
</div>
<!-- ========= End Facility Section =========-->

@php
use App\Models\Future_leader;
$leaders=Future_leader::orderBy('priority','ASC')->get();
$leaders_i=0;
@endphp

@php
$heading3=Heading::where('id','!=', $heading1->id)->where('id','!=', $heading2->id)->first();
@endphp
<!-- ========= Leader Section =========-->
<section class="leader" id="leader-section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="future_leader_title">{!!$heading3->name!!}</div>

                @Auth

                @if(auth()->user()->status==='active')
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExampleLeadingTitle" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit Form
                    </a>
                </p>
                <div class="collapse" id="collapseExampleLeadingTitle">
                    <div class="">
                        <div class="" id="heading3" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                    </div>
                                    <form action="{{route('headingedit',['id'=>$heading3->id])}}" method="POST" role="form"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <textarea name="heading" id="summernote" class="form-control" required>{{$heading3->name}}</textarea>
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
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach($leaders as $leader)

                        @if($leaders_i==0)

                        <div class="carousel-item active">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-sm-4">
                                        <img src="{{asset('uploads/leader/'.$leader->image)}}" class="card-img"
                                            alt="{{$leader->alt}}">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                            <p class="card-text">{!!$leader->description!!}</p>
                                            <h5><span>{!!$leader->name!!}</span> {{$leader->role}} ,
                                                {!!$leader->institute!!}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @else
                        <div class="carousel-item">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-sm-4">
                                        <img src="{{asset('uploads/leader/'.$leader->image)}}" class="card-img"
                                            alt="{{$leader->alt}}">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                            <p class="card-text">{!!$leader->description!!}</p>
                                            <h5><span>{!!$leader->name!!}</span> {!!$leader->role!!} ,
                                                {!!$leader->institute!!}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @php
                        $leaders_i++;
                        @endphp
                        @endforeach
                    </div>

                </div>
                @Auth
                @if(auth()->user()->status==='active')
                <center>
                    <a class="btn btn-primary" href="{{route('leaderlist')}}">Click for Edit</a>
                </center>
                @endif
                @endif
            </div>
        </div>
    </div>
</section>

{{-- <div class="container"><hr class="hr_leader"></div>--}}

@php
$heading4=Heading::where('id','!=', $heading1->id)->where('id','!=', $heading3->id)->where('id','!=',
$heading2->id)->first();
@endphp
<!-- ========= End Leader Section =========-->

@php
use App\Models\Batch;
$batches=Batch::where('status',"active")->get();
$batch_i=0;
@endphp

<!-- ========= Batch Section =========-->
<section class="batch-area" id="batch-section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="upcomming_batch_title">{!!$heading4->name!!}</div>

                @Auth
                @if(auth()->user()->status==='active')
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit Form
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="">
                        <div class="" id="heading4" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                    </div>
                                    <form action="{{route('headingedit',['id'=>$heading4->id])}}" method="POST" role="form"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <textarea name="heading" class="form-control" id="summernote" required>{{$heading4->name}}</textarea>
                                                <!--<input type="text" name="heading" class="form-control"-->
                                                <!--       value="{{$heading4->name}}" required>-->
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
        <div class="row batch-items">
            @foreach($batches as $batch)

            @if($batch_i%4==0)
            <div class="col-lg-6 col-md-6 col-sm-12 batch-item " id="batch-1">
                <div class="row inside-item">
                    <div class="col-lg-5 col-md-5 col-sm-5 batch-image">
                        <img src="{{asset('uploads/batch/'.$batch->image)}}" alt="{{$batch->alt}}">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 batch-details">
                        <div class="row batch-top">
                            <div class="col">
                                <p>{{$batch->course_name}}</p>
                                <small>Date : {{$batch->last_date}}</small>
                            </div>
                        </div>
                        <div class="row batch-bottom">
                            <div class="col">
                                <p>Admission Is Going On</p>
                                <a href="{{route('admission')}}">Register Now</a>
                            </div>
                        </div>
                        @Auth

                        @if(auth()->user()->status==='active')

                        <div class="modal-part">
                            <div class="container">
                                <a href="{{route('batchedit',['id'=>$batch->id])}}" type="button" class="btn btn-danger">
                                    Edit Form
                                </a>
                            </div>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>
            </div>

            @elseif($batch_i%4==1)
            <div class="col-lg-6 col-md-6 col-sm-12 batch_item-2 batch-item " id="batch-2">
                <div class="row inside-item">
                    <div class="col-lg-5 col-md-5 col-sm-5 batch-image">
                        <img src="{{asset('uploads/batch/'.$batch->image)}}" alt="{{$batch->alt}}">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 batch-details">
                        <div class="row batch-top">
                            <div class="col">
                                <p>{{$batch->course_name}}</p>
                                <small>Date : {{$batch->last_date}}</small>
                            </div>
                        </div>
                        <div class="row batch-bottom batch_item_2">
                            <div class="col">
                                <p>Admission Is Going On</p>
                                <a class="batch_item_button_2" href="{{route('admission')}}">Register Now</a>
                            </div>
                        </div>
                        @Auth

                        @if(auth()->user()->status==='active')

                        <div class="modal-part">
                            <div class="container">
                                <a href="{{route('batchedit',['id'=>$batch->id])}}" type="button" class="btn btn-danger">
                                    Edit Form
                                </a>
                            </div>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>
            </div>

            @elseif($batch_i%4==2)
            <div class="col-lg-6 col-md-6 col-sm-12 batch-item" id="batch-3">
                <div class="row inside-item">
                    <div class="col-lg-5 col-md-5 col-sm-5 batch-image">
                        <img src="{{asset('uploads/batch/'.$batch->image)}}" alt="{{$batch->alt}}">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 batch-details">
                        <div class="row batch-top">
                            <div class="col">
                                <p>{{$batch->course_name}}</p>
                                <small>Date : {{$batch->last_date}}</small>
                            </div>
                        </div>
                        <div class="row batch-bottom batch_item_3">
                            <div class="col">
                                <p>Admission Is Going On</p>
                                <a class="batch_item_button_3" href="{{route('admission')}}">Register Now</a>
                            </div>
                        </div>

                        @Auth

                        @if(auth()->user()->status==='active')

                        <div class="modal-part">
                            <div class="container">
                                <a href="{{route('batchedit',['id'=>$batch->id])}}" type="button" class="btn btn-danger">
                                    Edit Form
                                </a>
                            </div>
                        </div>
                        @endif
                        @endif

                    </div>
                </div>
            </div>

            @elseif($batch_i%4==3)
            <div class="col-lg-6 col-md-6 col-sm-12 batch-item" id="batch-4">
                <div class="row inside-item">
                    <div class="col-lg-5 col-md-5 col-sm-5 batch-image">
                        <img src="{{asset('uploads/batch/'.$batch->image)}}" alt="{{$batch->alt}}">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 batch-details">
                        <div class="row batch-top">
                            <div class="col">
                                <p>{{$batch->course_name}}
                                </p>
                                <small>Date : {{$batch->last_date}}</small>
                            </div>
                        </div>
                        <div class="row batch-bottom batch_item_4">
                            <div class="col">
                                <p>Admission Is Going On</p>
                                <a class="batch_item_button_4" href="{{route('admission')}}">Register Now</a>
                            </div>
                        </div>
                        @Auth

                        @if(auth()->user()->status==='active')

                        <div class="modal-part">
                            <div class="container">
                                <a href="{{route('batchedit',['id'=>$batch->id])}}" type="button" class="btn btn-danger">
                                    Edit Form
                                </a>
                            </div>
                        </div>
                        @endif
                        @endif


                    </div>

                </div>
            </div>
            @endif

            @php
            $batch_i++;
            @endphp
            @endforeach
        </div>
    </div>
</section>
<!-- ========= End Batch Section =========-->
@php
use App\Models\Video;
$video=Video::first();
@endphp
<!-- ========= Video Section ===========-->
<section class="video" id="video-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="video-part">
                    <iframe src="{{$video->url}}?controls=0" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="video-text">
                    <div>{!!$video->heading!!}</div>
                    <p>{!!$video->description!!}</p>
                </div>

                @Auth
                @if(auth()->user()->status==='active')
                <p>
                    <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleWelcomeVideoCareer" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit Form
                    </a>
                </p>
                <div class="collapse" id="collapseExampleWelcomeVideoCareer">
                    <div class="">
                        <div class="" id="formvideo1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                    </div>
                                    <form action="{{route('videoedit',['id'=>$video->id])}}" method="POST" role="form"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="heading">Heading:</label>
                                                <textarea name='heading' id="summernote" class="form-control" required>{{$video->heading}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="videourl">Video Url:</label>
                                                <input type="url" name='url' value="{{$video->url}}" id="videourl" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="description" class="form-control" id="summernote" required>{{$video->description}}</textarea>
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
<!-- ========= End Video Section ===========-->

@php
use App\Models\Count;
$counts=Count::first();
@endphp

<!-- ========= Start Counter Section ===========-->
<section class="counter-part" id="counter">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="start-items">
                    <i class="fas fa-running"></i>
                    <h2><span class="counter text-center">{{$counts->batches}}</span><span>+</span></h2>
                    <p>Running Batch</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="start-items">
                    <i class="fas fa-restroom"></i>
                    <h2><span class="counter text-center">{{$counts->students}}</span><span>+</span></h2>
                    <p>Running Students</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="start-items">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h2><span class="counter text-center">{{$counts->mentors}}</span><span>+</span></h2>
                    <p>Experienced Mentor</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="start-items">
                    <i class="fas fa-user-graduate"></i>
                    <h2><span class="counter text-center">{{$counts->s_students}}</span><span>+</span></h2>
                    <p>Succeed Students</p>
                </div>
            </div>
        </div>
    </div>
</section>
@Auth
@if(auth()->user()->status==='active')
<section>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="modal-part">
                    <div class="container">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form441">
                            Edit Counter
                        </button>
                    </div>
                    <div class="modal fade" id="form441" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('counteredit',['id'=>$counts->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control" name="batch" value="{{$counts->batches}}"
                                                type="number" placeholder="Running Batch" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="student" value="{{$counts->s_students}}"
                                                type="number" placeholder="Running Student" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="mentor" value="{{$counts->mentors}}"
                                                type="number" placeholder="Experienced Mentor" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="s_student" value="{{$counts->s_students}}"
                                                type="number" placeholder="Succeed Students" required>
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
        </div>
    </div>
</section>
@endif
@endif

<!-- ========= End Counter Section ===========-->

@php
use App\Models\Success_student;
$students=Success_student::orderBy('priority','ASC')->get();
$success_i=0;

@endphp


@php
$heading5=Heading::where('id','!=', $heading1->id)->where('id','!=', $heading3->id)->where('id','!=',
$heading2->id)->where('id','!=', $heading4->id)->first();
@endphp
<!-- ========= Student Section =========-->
<section class="student" id="student-section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>{!!$heading5->name!!}</h2>

                @Auth

                @if(auth()->user()->status==='active')
                <p>
                    <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleWelcomeStudentHeading" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit Form
                    </a>
                </p>
                <div class="collapse" id="collapseExampleWelcomeStudentHeading">
                    <div class="">
                        <div class="" id="heading5" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                    </div>
                                    <form action="{{route('headingedit',['id'=>$heading5->id])}}" method="POST" role="form"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <textarea name="heading" class="form-control" id="summernote" required>{{$heading5->name}}</textarea>
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
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 text-center">
                <div class="row">
                    <div class="col">
                        <div id="carouselExampleIndicators-1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators-1" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators-1" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                @foreach($students as $stud)

                                @if($success_i==0)
                                <div class="carousel-item active">
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="{{asset('uploads/success/'.$stud->image)}}" class="card-img"
                                                    alt="{{$stud->alt}}">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <p class="card-text">{!!Str::limit($stud->description, 196)!!}</p>
                                                    <h5><span>{{$stud->name}}</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="carousel-item">
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="{{asset('uploads/success/'.$stud->image)}}" class="card-img"
                                                    alt="{{$stud->alt}}">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <p class="card-text">{!!Str::limit($stud->description, 196)!!}</p>
                                                    <h5><span>{{$stud->name}} </span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @php

                                $success_i++;

                                @endphp
                                @endforeach

                            </div>

                        </div>
                        @Auth
                        @if(auth()->user()->status==='active')
                        <center>
                            <a class="btn btn-primary" href="{{route('s_students')}}">Click for Edit</a>
                        </center>
                        @endif
                        @endif
                    </div>

                </div>
            </div>
            @php
            use App\Models\Othotha;
            $ojotha=Othotha::first();
            @endphp
            <div class="col-lg-4 col-md-4 col-sm-4 stu-footer">
                <div>
                    <div class="stu_top">{!!$ojotha->prothom!!}</div>
                    <div class="stu_middle">{!!$ojotha->ditio!!}</div>
                    <div class="stu_bottom">{!!$ojotha->tritio!!}</div>
                </div>

                @Auth
                @if(auth()->user()->status==='active')
                <p class="text-center">
                    <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleWelcomeSuccessStudentRight" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Edit
                    </a>
                </p>
                <div class="collapse" id="collapseExampleWelcomeSuccessStudentRight">
                    <div class="">
                        <div class="row text-center">
                            <div class="col">
                                <div class="modal-part">
                                    <div class="" id="form44155" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom-0">
                                                </div>
                                                <form action="{{route('othotha',$ojotha->id)}}" method="post"
                                                    role="form" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="prothom" id="summernote" required>{{$ojotha->prothom}}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="ditio" id="summernote" required>{{$ojotha->ditio}}</textarea>
                                                            <!--<input class="form-control" name="ditio" value="{{$ojotha->ditio}}" type="text" required>-->
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="tritio" id="summernote" required>{{$ojotha->tritio}}</textarea>
                                                            <!--<input class="form-control" type="text" name="tritio" value="{{$ojotha->tritio}}" required>-->
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="modal-footer border-top-0 d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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

<!-- ========= End Student Section =========-->

@php
use App\Models\CareerCounseling;
$counselings=CareerCounseling::first();
@endphp

<section class="feedback" id="feedback-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">

                <img class="career_counselling" src="{{asset('uploads/welcome/'.$counselings->image)}}" alt="{{$counselings->alt}}">

                @Auth
                @if(auth()->user()->status==='active')
                <center>
                    <a class="btn btn-primary" href="{{route('career-counseling')}}">Click for Edit</a>
                </center>
                @endif
                @endif
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12">
                <!-- FORM -->

                @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif

                <form action="{{route('consultant')}}" method="post" role="form" enctype="multipart/form-data" class="career_councelling_footer">
                    @csrf
                    <div class="text text-center">
                        <h2>Career Counseling</h2>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="name" type="text" placeholder="Your Name"
                            required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="phone" type="number"
                            placeholder="Your Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" type="email"
                            placeholder="Your Email Address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="course" type="text" placeholder="Course Name"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control form-control-lg" name="message" placeholder="Message Here..."
                            rows="3" required></textarea>
                    </div>
                    <button class="btn btn-lg mt-2 btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
</section>
@php
$review = \App\Models\Review::where('id',1)->first();
@endphp

@endsection