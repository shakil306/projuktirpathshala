@php
Use App\Models\Title;
Use App\Models\Course;

$title=Title::where('p_mark',"Course")->first();

@endphp

@php
use App\Models\Heading;
$heading=Heading::where('id',14)->first();
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

<!-- ===== Course Header Section =======-->
<section class="course" id="course-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div>{!!$heading->name!!}</div>

                @Auth

                @if(auth()->user()->status==='active')

                <p>
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExample">
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
                                                <textarea name="heading" class="form-control" id="summernote">{{$heading->name}}</textarea>
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

@php
$c_i=0;
@endphp

<!-- ===== End Course Header Section =======-->

@foreach($departments as $department1)

@php

$courses=Course::where('department', $department1->name)->where('status','active')->paginate(10);
@endphp

@if($c_i%2==0)

<!-- ======== Graphic Design Top ==========-->
<section class="graphic-top" id="graphic-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>{{$department1->name}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <img src="{{url('public/uploads/department/'.$department1->image)}}" alt="{{$department1->alt}}">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div>{!!$department1->description!!}</div>
                @Auth
                @if(auth()->user()->status==='active')
                <p>
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleCourseForm{{$department1->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleCourseForm{{$department1->id}}">
                  <div class="">
                      <div class="" id="form5{{$department1->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('depertmentedit',['id'=>$department1->id])}}" method="POST"
                                    role="form" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="img" accept="image/*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="alt" value="{{$department1->alt}}" placeholder="Enter alt tag">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="description" id="summernote" required>{{$department1->description}}</textarea>
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
<!-- ======== End Graphic Design Top ==========-->

<!-- ======== Start Graphic Design Bottom ==========-->
<section class="graphic-bottom" id="graphic-bottom">
    <div class="container">
        <div class="row grap-all">
            @foreach($courses as $course1)
            @if($course1->department==$department1->name)
            <div class="col-lg-4 col-md-4 col-sm-12 course-item">
                <div class="card">
                    <img src="{{url('public/uploads/course/'.$course1->image)}}" class="card-img-top" alt="{{$course1->alt}}">
                    <div class="card-body">
                        <div class="card-title">{!!Str::limit($course1->title, 21)!!}</div>
                        <!--<h5 class="card-title">{{ Str::limit($course1->title, 22) }}</h5>-->
                        <div class="card-text">{!! $course1->description !!}</div>
                        <!--<p class="card-text">{{$course1->description}}</p>-->
                    </div>
                    <div class="card-bottom text-center">
                        <a href="{{route('course_details',['id'=>$course1->slug])}}">View course details</a>
                    </div>
                </div>
                @Auth

                @if(auth()->user()->status==='active')
                <p class="text-center">
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleCourseSecondSection{{$course1->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleCourseSecondSection{{$course1->id}}">
                  <div class="">
                      <div class="" id="formcourse{{$course1->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('courseedit2',['id'=>$course1->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="image" accept="image/*">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="alt" value="{{$course1->alt}}"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <textarea name="title" class="form-control" id="summernote" required>{{$course1->title}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="number" name="total_class" value="{{$course1->total_classes}}"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="string" name="discount" value="{{$course1->discount}}"
                                                class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="description"
                                                id="summernote" cols="30" rows="10" required>{{$course1->description}}</textarea>
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
            @endif
            @endforeach
        </div>
    </div>
</section>

<!-- ======== End Graphic Design Bottom ==========-->
@else


<!-- ======== Digital Top ==========-->
<section class="digital-top" id="digital-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>{{$department1->name}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 digital-item-order-2">
                <div>{!! $department1->description !!}</div>

                @Auth
                @if(auth()->user()->status==='active')
                <p>
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleCourseDigitalTop{{$department1->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleCourseDigitalTop{{$department1->id}}">
                  <div class="">
                      <div class="" id="form6{{$department1->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('depertmentedit',['id'=>$department1->id])}}" method="POST"
                                    role="form" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="img" accept="image/*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="alt" value="{{$department1->alt}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="description" id="summernote" required>{{$department1->description}}</textarea>
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
            <div class="col-lg-5 col-md-5 col-sm-12 digital-item-order-1">
                <img src="{{url('public/uploads/department/'.$department1->image)}}" alt="{{$department1->alt}}">
            </div>
        </div>
    </div>
</section>
<!-- ======== End Digital Top ==========-->


<!-- ======== Start Digital marketing Bottom ==========-->
<section class="digital" id="digital-secttion">
    <div class="container">
        <div class="row grap-all">
            @foreach($courses as $course2)
            @if($course2->department==$department1->name)
            <div class="col-lg-4 col-md-4 col-sm-12 course-item">
                <div class="card">
                    <img src="{{url('public/uploads/course/'.$course2->image)}}" class="card-img-top" alt="{{$course2->alt}}">
                    <div class="card-body">
                        <div class="card-title">{!! Str::limit($course2->title, 18) !!}</div>
                        <!--<h5 class="card-title">{{ Str::limit($course2->title, 22) }}</h5>-->
                        <div class="card-text">{!! $course2->description !!}</div>
                        <!--<p class="card-text">{{$course2->description}}</p>-->
                    </div>
                    <div class="card-bottom text-center">
                        <a href="{{route('course_details',['id'=>$course2->slug])}}">View course details</a>
                    </div>
                </div>
                @Auth

                @if(auth()->user()->status==='active')
                <p class="text-center">
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleCoursePageDigitalContent{{$course2->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleCoursePageDigitalContent{{$course2->id}}">
                  <div class="">
                      <div class="" id="formcourse{{$course2->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('courseedit2',['id'=>$course2->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @method('post')
                                    @csrf

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="image" accept="image/*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="alt" value="{{$course2->alt}}"
                                                   class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <textarea name="title" class="form-control" id="summernote" required>{{$course2->title}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="number" name="total_class" value="{{$course2->total_classes}}"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="string" name="discount" value="{{$course2->discount}}"
                                                class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="description"
                                                id="summernote" required>{{$course2->description}}</textarea>
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
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- ======== End Digital marketing Bottom ==========-->
@endif
@php
$c_i++;
@endphp
@endforeach
@endsection
