@php
use App\Models\Title;
$title=Title::where('p_mark',"All Course")->first();
@endphp

@section('title'){{$title->text}}@endsection
@section('description'){{$title->description}}@endsection
@section('keyword'){{$title->keyword}}@endsection

@extends('master.master')
@section('content')
<section class="graphic-bottom" id="graphic-bottom">
    <div class="container">
        <div class="row grap-all">
            @foreach($courses as $course1)
            <div class="col-lg-4 col-md-4 col-sm-12 course-item">
                <div class="card">
                    <img src="{{url('public/uploads/course/'.$course1->image)}}" class="card-img-top" alt="Graphic-1">
                    <div class="card-body">
                        <div class="card-title">{!! Str::limit($course1->title,18) !!}</div>
                        <div class="card-text">{!! $course1->description !!}</div>
                    </div>
                    <div class="card-bottom text-center">
                        <a href="{{route('course_details',['id'=>$course1->slug])}}" class="text-capitalize">View Course Detailsss</a>
                    </div>
                </div>
                @Auth

                @if(auth()->user()->status==='active')
                <p class="text-center">
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleAllCourse{{$course1->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit
                  </a>
                </p>
                <div class="collapse" id="collapseExampleAllCourse{{$course1->id}}">
                  <div class="">
                      <div class="" id="formcourse{{$course1->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                </div>
                                <form action="{{route('courseedit2',['id'=>$course1->id])}}" method="POST" role="form"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="image" accept="image/*">
                                        </div>

                                        <div class="form-group">
                                            <textarea name="title" class="form-control" id="editor" required>{{$course1->title}}</textarea>
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
                                            <textarea class="form-control" name="description" id="editor" required>{{$course1->description}}</textarea>
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
            @endforeach
        </div>
    </div>
</section>
<!-- ======== End Graphic Design Bottom ==========-->
@endsection
