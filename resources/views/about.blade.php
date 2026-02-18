@php
Use App\Models\Title;

$title=Title::where('p_mark',"About")->first();

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
use App\Models\Heading;
$heading=Heading::where('id',11)->first();
$heading1=Heading::where('id',12)->first();
$heading2=Heading::where('id',13)->first();
@endphp
<!-- ===== About Header Section =======-->
<section class="header" id="header-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div>{!! $heading->name !!}</div>
                @Auth
                @if(auth()->user()->status=='active')
                <p>
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleAboutUsTopHeading" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleAboutUsTopHeading">
                  <div class="">
                      <div class="" id="heading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
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

<section class="header-bottom" id="header-bottom">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div>{!! $all_data->title !!}</div>
            </div>
        </div>

        <div class="row about_first_content">
            <div class="col-lg-6 col-md-6 col-sm-12 order-sm-2">
                <div class="text pl-md-4">
                    <div>{!! $all_data->description !!}</div>
                </div>
                @Auth
                @if(auth()->user()->status=='active')
                <p>
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleAboutUsTwoSection" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleAboutUsTwoSection">
                  <div class="">
                      <div class="" id="form2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('aboutedit',['id'=>$all_data->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <textarea class="form-control" id="summernote" name="title" >{{$all_data->title}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="description" class="form-control" id="summernote" required>{{$all_data->description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="img" accept="image/*">
                                        </div>
                                        <div class="form-group">
                                            <label for="alt">Alt:</label>
                                            <input type="text" name="alt" class="form-control" value="{{$all_data->alt}}" placeholder="Enter alt tag">
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
            <div class="col-lg-6 col-md-6 col-sm-12 order-sm-1">
                <div class="image">
                    <img src="{{url('public/uploads/about/'.$all_data->image)}}" alt="{{$all_data->alt}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== End About Header Section =======-->

<!-- ===== Mission Section =======-->
<section class="mission" id="mission-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mission-item">
                <div>{!! $all_data->m_head !!}</div>
                <div class="row text-center">
                    <div class="col">
                        <img src="{{url('public/uploads/about/'.$all_data->mission_image)}}" alt="our mission">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>{!! $all_data->mission !!}</div>
                    </div>
                </div>
                @Auth
                @if(auth()->user()->status==='active')
                <p class="text-center">
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleOurMission" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleOurMission">
                  <div class="">
                      <div class="" id="form3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('missionedit',['id'=>$all_data->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <textarea class="form-control" id="summernote" name="m_head" required>{{$all_data->m_head}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="mission" class="form-control" id="summernote" required>{{$all_data->mission}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="img" accept="image/*">
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
            <div class="col-lg-6 col-md-6 col-sm-12 mission-item mission-2">
                <div>{!! $all_data->v_head !!}</div>
                <div class="row text-center">
                    <div class="col">
                        <img src="{{url('public/uploads/about/'.$all_data->vission_image)}}" alt="our vision">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>{!! $all_data->vission !!}</div>
                    </div>
                </div>
                @Auth
                @if(auth()->user()->status=='active')
                <p class="text-center">
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleOurVission" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleOurVission">
                  <div class="">
                      <div class="" id="form4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('visionedit',['id'=>$all_data->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <textarea class="form-control" id="summernote" name="v_head" required>{{$all_data->v_head}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="img" accept="image/*">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="vission" class="form-control" id="summernote" required>{{$all_data->vission}}</textarea>
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
<!-- ===== End Mission Section =======-->


<!-- ===== Choose Section =======-->
<section class="choose" id="choose-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div>{!! $heading1->name !!}</div>
                @Auth
                @if(auth()->user()->status=='active')
                <p>
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleWhyChoseUsTitle" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleWhyChoseUsTitle">
                  <div class="">
                      <div class="" id="heading1" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('heading12',$heading1->id)}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <textarea name="heading" id="summernote" class="form-control" required>{{$heading1->name}}</textarea>
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

                @php
                use App\Models\Othotha;
                $hululu=Othotha::where('id', 2)->first();
                @endphp

                <div>
                    {!! $hululu->prothom !!}
                </div>

                @Auth

                @if(auth()->user()->status=='active')
                <p class="text-center">
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleWhyChoseUsContent" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleWhyChoseUsContent">
                  <div class="">
                      <div class="" id="heading1hulu" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('whyChooseUsHeadingContent',['id'=>$hululu->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    <!--@method('put')-->
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <textarea name="prothom" class="form-control" id="summernote" required>{{$hululu->prothom}}</textarea>
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
</section>
@php
$why_i=0;
@endphp
<section class="choose-section" id="choose">
    <div class="container">
        <div class="row choose-items">

            @foreach($why_uss as $why_us)
            @if($why_i%3==0)
            <div class="col-lg-4 col-md-4 col-sm-12 choose-item">
                <div class="row text-center">
                    <div class="fab-icon"><i class="fas fa-award"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>{!! $why_us->title !!}</div>
                        <p>{!! $why_us->description !!}</p>
                    </div>
                </div>
            </div>
            @endif
            @if($why_i%3==1)
            <div class="col-lg-4 col-md-4 col-sm-12 choose-item">
                <div class="row text-center">
                    <div class="fab-icon"><i class="fas fa-user-graduate"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>{!! $why_us->title !!}</div>
                        <p>{!! $why_us->description !!}
                        </p>
                    </div>
                </div>
            </div>
            @endif
            @if($why_i%3==2)
            <div class="col-lg-4 col-md-4 col-sm-12 choose-item">
                <div class="row text-center">
                    <div class="fab-icon">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>{!! $why_us->title !!}</h5>
                        <p>{!! $why_us->description !!}
                        </p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @Auth
        @if(auth()->user()->status=='active')
        <center>
            <a class="btn btn-primary" href="{{route('why_us')}}">Click for Edit</a>
        </center>
        @endif
        @endif
    </div>
    </div>
</section>
<!-- ===== End Choose Section =======-->

<!--======== Start Mentors Section Top =========-->
<section class="mentor-section-top" id="mentor-section-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div>{!! $heading2->name !!}</div>
                @Auth
                @if(auth()->user()->status=='active')
                <p class="text-center">
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit
                  </a>
                </p>
                <div class="collapse" id="collapseExample">
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
    </div>
</section>
<!--======== End Mentors Section Top =========-->

<!--======== Start Mentors Section =========-->
<section class="mentor" id="mentor-section">
    <div class="container carousel">
        <div class="owl-carousel owl-theme">
            @foreach($mentors as $mentor)
            <div class="client row">
                <div class="col text-center client-item">
                    <div class="client imgag text-center">
                        <img src="{{url('public/uploads/mentor/'.$mentor->profile_image)}}" alt="{{$mentor->department}}">
                    </div>
                    <div class="client-title">
                        <h3>{{$mentor->name}}</h3>
                        <h6>{{$mentor->department}}</h6>
                    </div>
                    <!--<div class="client-body">-->
                    <!--    {!! $mentor->description !!}-->
                    <!--</div>-->
                    <!--<div class="client-footer">-->
                    <!--    <ul>-->
                    <!--        <li>-->
                    <!--            <a href="{{$mentor->facebook}}"><i class="fab fa-facebook-f"></i></a>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <a href="{{$mentor->linkedin}}"><i class="fab fa-linkedin-in"></i></a>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <a href="{{$mentor->twitter}}"><i class="fab fa-twitter"></i></a>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                </div>
            </div>
            @endforeach
        </div>

    </div>
    </div>
    <br>
    @Auth
    @if(auth()->user()->status==='active')
    <center>
        <a class="btn btn-primary" href="{{route('mentorlist')}}">Click for Edit</a>
    </center>
    @endif
    @endif
</section>
<!--======== End Mentors Section =========-->

@endsection
