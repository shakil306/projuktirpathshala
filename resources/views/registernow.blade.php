@php
Use App\Models\Title;
$title=Title::where('p_mark',"Admission")->first();
@endphp

@section('title'){{$batch->course_name}} | {{$title->text}}@endsection
@section('description'){{$title->description}}@endsection
@section('keyword'){{$title->keyword}}@endsection

@extends('master.master')

@section('content')
<h1>Alhamdulillah</h1>
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

    @endphp

<!-- =========== Start Form Part ==================-->
<section class="form-part" id="form-section-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h3>{{$batch->course_name}}</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">

                <table class="table table-bordered">
                    <tbody>
                        <?php
                            // dd($course)
                            // $withoutPercentence = trim(substr($course->discount, 0,2));
                            $withoutPercentence = rtrim($course->discount, "%");
                            
                        $percentenceValue = $withoutPercentence / 100; 
                        
                        $discountTaka = $percentenceValue * $course->course_fee;
                        ?>
                        <!--{{$withoutPercentence}}-->
                        <!--{{$percentenceValue}}-->
                        <!--{{$discountTaka}}-->
                        
                    <tr>
                        <th>Course Duration</th>
                        <th>Total Classes</th>
                        <th>Regular Fees</th>
                        <th>{{$course->discount}} Discount Fees</th>
                        <th>Last Date</th>
                    </tr>
                        <td>{{$batch->duration}}</td>
                        <td>{{$course->total_classes}}</td>
                        <td>{{$batch->fee}}</td>
                        <td>{{$course->course_fee - $discountTaka}}</td>
                        <td>{{$batch->last_date}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</section>
<section class="form-part" id="form-body">
    <div class="container">
        <form action="{{route('admission2')}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col">
                    <input type="text" name="name" class="form-control" placeholder="Full Name*" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="number" name="phone" class="form-control" placeholder="Phone*" required>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" name="email" class="form-control" placeholder="Email*" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <input type="string" name="present_address" class="form-control" placeholder="Present Address*"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Payment*</label>
                            </div>
                            <select class="custom-select" name="payment" required>
                                <option value="">Choose...</option>

                                <option value="offline">Cash</option>
                                <option value="nagad">Bkash</option>
                                <option value="nagad">Nagad</option>
                                <option value="nagad">Rocket</option>

                            </select>
                        </div>
                </div>
                <div class="form-group col-md-6">
                    <input type="hidden" name="dob" class="form-control" value="{{date("Y-m-d")}}" required>
                </div>
                
            </div>

            <input type="hidden" name="course_name" value="{{$batch->course_name}}">
            <input type="hidden" name="course_duration" value="{{$batch->id}}">

            <div class="row text-center">
                <div class="col">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </div>
    </div>
    </form>
    </div>
</section>
<!-- =========== End Form Part ==================-->

@endsection
