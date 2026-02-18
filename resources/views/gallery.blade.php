@php
Use App\Models\Title;
$titleh=Title::where('p_mark',"Home")->first();
$titlea=Title::where('p_mark',"About")->first();
$titlec=Title::where('p_mark',"Course")->first();
$titlead=Title::where('p_mark',"Admission")->first();
$titlem=Title::where('p_mark',"Mentor")->first();
$titleb=Title::where('p_mark',"Blog")->first();
$titlecn=Title::where('p_mark',"Contact")->first();
$titleg=Title::where('p_mark',"Gallery")->first();
$titles=Title::where('p_mark',"Seminar")->first();
$titlesf=Title::where('p_mark',"Student Feedback")->first();
$titlesa=Title::where('p_mark',"Social Activity")->first();
use App\Models\Contact;
$contact=Contact::first();

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titleg->text}}</title>
    <meta name="description" content="{{$titleg->description}}">
    <meta name="keywords" content="{{$titleg->keyword}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/images/favicon.png')}}">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body>
    @include('parts.topbar')

    <!-- ===== Start Gallery Slider Section =======-->
    <section class="gallery-slider" id="gallery-slider">
        <div class="container carousel">
            <div class="owl-carousel owl-theme">
                @foreach($sliders as $slider)
                <div class="row">
                    <div class="col">
                        <img src="{{url('public/uploads/slider/'.$slider->image)}}" alt="image">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===== End Gallery Slider Section =======-->

    <!-- ===== Start Gallery image Section =======-->
    <section class="gallery-image-butotn" id="gallery-image-button">
        <div class="container">
            <div class="row text-center">
                <div class="col button">
                    <button type="button" data-filter="all">All</button>
                    <button type="button" data-filter=".student">Student</button>
                    <button type="button" data-filter=".mentor">Mentor</button>
                    <button type="button" data-filter=".event">Event</button>
                </div>
            </div>
        </div>
        <div class="container image-mixer">
            <div class="row">
                @foreach($mentors as $mentor)
                <div class="col-md-3 mix mentor text-center">
                    <a class="test-popup-link" href="{{url('public/uploads/gallery/'.$mentor->image)}}">
                        <img style="width: 100%; height:280px; border: 1px solid #4F5255;" class="radius" src="{{url('public/uploads/gallery/'.$mentor->image)}}" alt="{{$mentor->alt}}">
                    </a>
                </div>
                @endforeach
                @foreach($students as $student)
                <div class="col-md-3 mix student text-center">
                    <a class="test-popup-link" href="{{url('public/uploads/gallery/'.$student->image)}}">
                        <img style="width: 100%; height:280px; border: 1px solid #4F5255;" class="radius" src="{{url('public/uploads/gallery/'.$student->image)}}" alt="{{$student->alt}}">
                    </a>

                </div>
                @endforeach
                @foreach($events as $event)
                <div class="col-md-3 mix event text-center">
                    <a class="test-popup-link" href="{{url('public/uploads/gallery/'.$event->image)}}">
                        <img style="width: 100%; height:280px; border: 1px solid #4F5255;" class="radius" src="{{url('public/uploads/gallery/'.$event->image)}}" alt="{{$event->alt}}">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===== End Gallery image Section =======-->

    @include('parts.footer')

    <!--====== Top to Bootom Scroll button=====-->
    <i class="fas fa-arrow-circle-up" id="bottom-to-top"></i>
    <!--====== End Top to Bootom Scroll button=====-->

    <script src="./js/jquery.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>


    <script src="./js/jquery.waypoints.min.js"></script>
    <script src="./js/jquery.counterup.min.js"></script>
    <script src="./js/mixitup.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/jquery.magnific-popup.min.js"></script>

    <script src="./js/main.js"></script>


</body>

</html>
