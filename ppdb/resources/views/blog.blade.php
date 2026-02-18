@php
Use App\Models\Title;

$title=Title::where('p_mark',"Blog")->first();

@endphp

@php
use App\Models\Heading;
$heading=Heading::where('id',17)->first();
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



<!-- ===== Blog Header Section =======-->
<section class="course" id="course-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div>{!!$heading->name!!}</div>

                @Auth
                @if(auth()->user()->status==='active')
                <p class="text-center">
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleBlogPage" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Edit Form
                  </a>
                </p>
                <div class="collapse" id="collapseExampleBlogPage">
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


<!-- ===== End Blog Header Section =======-->

<!-- ===== Blog Search Section =======-->
<section class="blog-search" id="blog-search">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-5">
                <h3>Recent</h3>
            </div>

        </div>
    </div>
</section>
<!-- ===== End Blog Search Section =======-->

<!-- ===== Blog News Section =======-->
<section class="blog-news" id="blog-news">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 left-item m-0 border-0">
                        <div class="border p-2 radius mb-3">
                            <div class="blog-img">
                                <img src="{{url('public/uploads/blog/'.$blog->image)}}" alt="News">
                            </div>
                            <div class="blog-title">
                                <a href="{{route('blog-details',$blog->slug)}}"><h6>{!! Str::limit($blog->title, 34) !!}</h6></a>
                            </div>
                            <div class="blog-body px-2">
                                {!! Str::limit($blog->description,155) !!}
                            </div>
                            <div class="blog-link">
                                <a href="{{route('blog-details',$blog->slug)}}" target="_blank">Read More</a>
                            </div>
                        </div>    
                    </div>
                    @endforeach
                </div>
            </div>
            @php
            use App\Models\Social_link;
            $links=Social_link::paginate(6);
            @endphp
        </div>
    <center>
        <a href="{{route('allblog')}}" class="btn btn-primary mt-2">See All Blogs</a>
    </center>
    </div>


</section>

<!-- ===== End Blog News Section =======-->


<!-- ===== Start Popular News Section =======-->
<section class="popular" id="popular-news">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Popular news</h3>
            </div>
        </div>
    </div>
</section>
<section class="popular-news" id="popular-news-1">
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="row">
                    @foreach($populars as $popular)
                    <div class="col-lg-4 col-md-4 col-sm-12 left-item m-0 border-0">
                        <div class="border p-2 radius mb-3">
                            <div class="blog-img">
                                <img src="{{url('public/uploads/blog/'.$popular->image)}}" alt="News">
                            </div>
                            <div class="blog-title">
                                <a href="{{route('blog-details',$popular->slug)}}">{!!$popular->title!!}</a>
                            </div>
     
                            <div class="blog-body px-2">
                                {!! Str::limit($popular->description,155) !!}
                            </div>
                            <div class="blog-link">
                                <a href="{{route('blog-details',$popular->slug)}}" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== End Popular News Section =======-->
@endsection
