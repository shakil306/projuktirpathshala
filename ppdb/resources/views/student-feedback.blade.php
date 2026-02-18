@php
Use App\Models\Title;

$tit=Title::where('p_mark',"Student Feedback 11")->first();

@endphp
@php
use App\Models\Heading;
$heading=Heading::where('id',20)->first();
@endphp

@section('title', 'Student Feedback | Projuktir Pathshala Institute')
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

<style>
    .photo-grid {
    display: grid;
    gap: 1rem;
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    grid-auto-rows: 240px;
    grid-auto-flow: dense;
}
.card {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    text-align: center;
}
.card-wide img{
    width:100%;
    height:100%;
}

@media screen and (min-width: 600px) {
    .card-tall {
        /*grid-row: span 2 / auto;*/
    }
    .card-wide {
        grid-column: span 2 / auto;
    }

}

</style>

<!--======== Start Feedback bottom Section =========-->
<section class="student-feedback-bottom" id="student-feedbaack-bottom">
    <div class="container">
        <center><h1>Student's Feedback</h1></center>

        <div class="student_feedback_content">
            <div class="row justify-content-center">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Feedback</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Students Earning</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Class Review</a>
                  </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      
                      <!--Student Feedback-->
                      <div class="container student_feedback_tab_content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="photo-grid">
                                        <div class="card card-wide">
                                            <img src="{{url('public/uploads/student-feedback/feedback/image-1.png')}}" alt="student feedback">
                                        </div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-2.png')}});" alt="student feedback"></div>

                                        <div class="card card-wide"  style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-3.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-4.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-5.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-6.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-7.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-8.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-9.png')}});" alt="student feedback" ></div>
                                        
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-10.png')}});" alt="student feedback" ></div>
                                        
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-11.png')}});" alt="student feedback" ></div>
                                        
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-12.png')}});" alt="student feedback" ></div>
                                        
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-13.png')}});" alt="student feedback" ></div>
                                        
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-14.png')}});" alt="student feedback" ></div>
                                        
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-15.png')}});" alt="student feedback" ></div>
                                        
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/feedback/image-16.png')}});" alt="student feedback" ></div>
                                        
                                    </div>
                                </div>
                          </div>
                      </div>
                      <!--Student Feedback end-->
                      
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <div class="container student_feedback_tab_content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="photo-grid">
                                        <div class="card card-wide">
                                            <img src="{{url('public/uploads/student-feedback/image-2.png')}}" alt="student feedback">
                                        </div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-3.png')}});" alt="student feedback"></div>

                                        <div class="card card-tall"  style="
                                        background-image: url({{url('public/uploads/student-feedback/image-1.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-4.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-5.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-6.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-7.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-8.png')}});" alt="student feedback" ></div>

                                        <div class="card" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-9.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-10.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-11.png')}});" alt="student feedback" ></div>
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-12.png')}}" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-13.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall"  style="
                                        background-image: url({{url('public/uploads/student-feedback/image-14.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-15.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-16.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-17.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-18.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-19.png')}});" alt="student feedback" ></div>

                                        <div class="card" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-20.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-21.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-22.png')}});" alt="student feedback" ></div>
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-23.png')}}" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-24.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall"  style="
                                        background-image: url({{url('public/uploads/student-feedback/image-25.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-26.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-27.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-28.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-29.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-30.png')}});" alt="student feedback" ></div>

                                        <div class="card" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-31.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-33.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-34.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-35.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide">
                                            <img src="{{url('public/uploads/student-feedback/image-36.png')}}" alt="student feedback">
                                        </div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-37.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall"  style="
                                        background-image: url({{url('public/uploads/student-feedback/image-38.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-39.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-40.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-41.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-42.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-43.png')}});" alt="student feedback" ></div>

                                        <div class="card" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-44.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-45.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-46.png')}});" alt="student feedback" ></div>
                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-47.png')}}" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-48.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall"  style="
                                        background-image: url({{url('public/uploads/student-feedback/image-49.png')}});" alt="student feedback" ></div>

                                        <div class="card card-tall" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-50.png')}});" alt="student feedback" ></div>

                                        <div class="card card-wide" style="
                                        background-image: url({{url('public/uploads/student-feedback/image-51.png')}});" alt="student feedback" ></div>


                                        <div class="card card-tall">
                                            <img src="{{url('public/uploads/student-feedback/image-38.png')}}" alt="student feedback">
                                        </div>
                                    </div>
                                </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                      <h1>Class Review</h1>
                  </div>
                </div>
            </div>
        </div>
        </div>

        @Auth
        @if(auth()->user()->status==='active')
        <center>
            <a class="btn btn-primary" href="{{route('feedbacklist')}}">Click for Edit</a>
        </center>
        @endif
        @endif

    </div>

    </div>
</section>
<!--======== End Feedback bottom Section =========-->

@endsection
