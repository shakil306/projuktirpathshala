@php
Use App\Models\Title;

$title=Title::where('p_mark',"Registration")->first();

@endphp

@section('title'){{$event->title}} | {{$title->text}}@endsection
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

@if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<section>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <form action="{{route('registration')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">

                        <input type="hidden" name="title" value="{{$event->title}}">
                        <input type="hidden" name="category" value="{{$event->id}}">
                       <center> <h3 style="padding-bottom: 5px;">Registration Form</h3>
                        <div class="form-group" style="width: 50%;">
                            <input class="form-control" name="name" type="text" placeholder="Your name" required>
                        </div>

                        <div class="form-group" style="width: 50%;">
                            <input class="form-control" name="email" type="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group" style="width: 50%;">
                            <input class="form-control" name="phone" type="number" placeholder="Your Phone Number"
                                required>
                        </div>
                        </center>
                    </div>
                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
