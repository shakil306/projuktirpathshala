@php
use App\Models\Title;
$title=Title::where('p_mark',"All BLog")->first();
@endphp

@section('title'){{$title->text}}@endsection
@section('description'){{$title->description}}@endsection
@section('keyword'){{$title->keyword}}@endsection

@extends('master.master')
@section('content')
<section class="popular-news" id="popular-news-1">
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="row">
                    @foreach($populars as $popular)
                    <div class="col-lg-4 col-md-6 left-item border-0">
                        <div class="border p-2 radius mb-3">
                            <div class="blog-img">
                                <img src="{{asset('uploads/blog/'.$popular->image)}}" alt="News">
                            </div>
                            <div class="blog-title">
                                <a href="{{route('blog-details',$popular->slug)}}">
                                    <div>{!! $popular->title !!}</div>
                                </a>
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