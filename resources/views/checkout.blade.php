@php
Use App\Models\Title;

$tit=Title::where('p_mark',"About")->first();
@endphp

@section('title', 'Checkout | Projuktir Pathshala Institute')

@extends('master.master')
@section('content')

<div class="container">
    <div class="row text-center">
        <div class="col pt-5 pb-5" >
            <h1>Course Name: {{$admission->course_name}}</h1>
            <h3>Course Code: {{$admission->course_duration}}</h3>
            <h3>Course Fee: {{$admission->fee}}</h3>
            <br>
            @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif

            <form action="{{route('coupon')}}" method="get">
                <input type="text" name="coupon" placeholder="Any Coupon?">
                <input type="hidden" name="id" value="{{$admission->id}}">
                <button type="submit">Submit</button>
            </form>
            <br>



            <a href="{{route('paynow', ['id'=>$admission->id])}}" class="btn btn-primary"> Pay With Nagad</a>
        </div>


    </div>
</div>

@endsection
