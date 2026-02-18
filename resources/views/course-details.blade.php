@php
Use App\Models\Title;
$title=Title::where('p_mark',"Course Details")->first();
@endphp

@section('title'){{$course->meta_title}}@endsection
@section('description'){{$course->meta_description}}@endsection
@section('keyword'){{$course->meta_keyword}}@endsection

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
<!-- ======== Start Course Details Top =============-->
<section class="course-top" id="course-top">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <!--<h1 class="course_detail_heading">{{ substr($course->title, -3, -4) }}</h2>-->
                <h1 class="course_detail_heading">{{ $course->title }}</h2>
            </div>
        </div>
    </div>
</section>
<!-- ========End Course Details Top  =============-->

<!--=========== Start Course overall Part ==============-->
<section class="course-overall" id="course-overall">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <!--<h3>{{$course->title}}</h3>-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row course-details-page">
                    <div class="col-lg-3 col-md-3 col-sm-3 courseDetailsHeroSection">
                        <h5>Course Duration</h5>

                        <p>{{$course->duration}}</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 courseDetailsHeroSection">
                        <h5>Total Classes</h5>
                        <p>Classes : {{$course->total_classes}}</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 courseDetailsHeroSection">
                        <h5>Regular Fees</h5>

                        <input type="hidden" value="{{$course->course_fee}}" id="getRegularPrice">
                        <p id="regular-price"></p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 courseDetailsHeroSection">
                        <?php
                        // $withoutPercentence = trim(substr($course->discount, 0,2));
                        $withoutPercentence = rtrim($course->discount, "%");
                        $percentenceValue = $withoutPercentence / 100;

                        $discountTaka = $percentenceValue * $course->course_fee;
                        ?>
                        <!--{{$withoutPercentence}}-->
                        <!--{{$percentenceValue}}-->
                        <!--{{$discountTaka}}-->
                        <h5>{{$course->discount}} Discount Fees</h5>

                        <input type="hidden" value="{{ $course->course_fee - $discountTaka }}" id="getdiscountPrice">
                        <p id="discount-price"></p>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 course-relaed">
                <h4>Related Courses</h4>
                <div class="related-item">
                    @foreach($relatcoursess as $re_course)
                    <a href="{{route('course_details',['id'=>$re_course->slug])}}"><i
                            class="fas fa-caret-right"></i>
                        <div>{!! Str::limit($re_course->title, 50) !!}</div>
                    </a>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 course-relaed-2">
                <div class="row">
                    <div class="col imageBorder">
                        <img src="{{asset('uploads/course/'.$course->image)}}" alt="{{$course->alt}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== End Course Overall Part ==============-->


<!--=========== Start Course OverView Part ==============-->
<section class="overview" id="overview-section">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h3>Overview</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="text-align: justify;">{!! $course->description !!}</p>
                @Auth
                @if(auth()->user()->status==='active')
                <div class="modal-part">
                    <div class="container">
                        <center>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form411">
                                Edit Form
                            </button>
                        </center>
                    </div>
                    <div class="modal fade" id="form411" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('course_overview',['id'=>$course->id])}}" method="POST"
                                    role="form" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <textarea class="form-control" name="overview" cols="30" rows="8"
                                                placeholder="Overview" required>{{$course->description}}</textarea>
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
                @endif
                @endif
            </div>
        </div>
    </div>
</section>
<!--=========== End Course OverView Part ==============-->

<!--=========== Start Course Module Part ==============-->
<section class="course-module" id="course-module">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3>Course Module</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-12 upcoming">
                <div class="title text-center">
                    <h4>Upcoming Batch</h4>
                </div>

                @foreach($up_course as $up_course)
                <div class="heading text-center">
                    <h2 style="color:black;">{!! $up_course->title !!}</h2>



                    <input type="hidden" value="{{$up_course->course_fee}}" id="upcommingPrice">
                    <p id="setUpcommingPrice"></p>
                    <br><br>

                </div>
                <div class="body text-center">
                    <a href="{{route('admission')}}">Admission</a>
                </div>
                <br>
                <div class="footer">
                    <h5>Contact</h5>
                    <p>+{{$contact->phone}}</p>
                    <p>{{$contact->email}} </p>
                </div>
                @endforeach
            </div>

            @foreach($course_modules as $module)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="module-item text-center">
                    <p style="text-align: justify"><span>{!! $module->course_idname !!}</span>
                        @Auth
                        @if(auth()->user()->status==='active')
                        <a href="{{route('moduledelete', ['id'=>$module->id])}}"> <i class="fas fa-trash-alt"></i></a>


                        <!--<i style="cursor: pointer;" class="fas fa-pencil-alt" data-toggle="modal" data-target="#editmodule{{$module->id}}"></i>-->

                    <p>
                        <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleOurCoursesTitle{{$module->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Edit
                        </a>
                    </p>
                    <div class="collapse" id="collapseExampleOurCoursesTitle{{$module->id}}">
                        <div class="">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                    </div>
                                    <form action="{{route('course.module.edit',['id'=>$module->id])}}" method="POST"
                                        role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <textarea class="form-control" id="summernote" name="coursemodule" cols="30" rows="8" required>{{$module->course_idname}}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    @Auth
                    @if(auth()->user()->status==='active')
                    <div class="modal-part">
                        <div class="modal fade" id="editmodule{{$module->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('course.module.edit',['id'=>$module->id])}}" method="POST"
                                        role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <textarea class="form-control" name="coursemodule" cols="30" rows="8" required>{{$module->course_idname}}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    @endif
                    @endif
                    </p>

                    @Auth
                    @if(auth()->user()->status==='active')
                    <div class="modal-part">
                        <div class="container">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form421">
                                Add Module
                            </button>
                        </div>
                        <div class="modal fade" id="form421" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('createmodule2')}}" method="post" role="form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <textarea name="name" id="" cols="30" rows="10"></textarea>
                                                {{-- <input class="form-control" name="name" type="text"--}}
                                                {{-- placeholder="Module Name" required>--}}
                                            </div>
                                            <input name="id" value="{{$course->id}}" class="form-control" id="id"
                                                type="hidden" required>

                                        </div>
                                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                </div>
            </div>
            @endforeach
            <!--            <div class="col-lg-8 col-md-4 col-sm-12">-->
            <!--                <div class="module-item text-center">-->
            <!--                    @foreach($course_modules as $module)-->
            <!--                    <p style="text-align: justify"><a href="#">{!! $module->course_idname !!}</a>-->
            <!--                        @Auth-->
            <!--                        @if(auth()->user()->status==='active')-->
            <!--                        <a href="{{route('moduledelete', ['id'=>$module->id])}}"> <i class="fas fa-trash-alt"></i></a>-->


            <!--<i style="cursor: pointer;" class="fas fa-pencil-alt" data-toggle="modal" data-target="#editmodule{{$module->id}}"></i>-->

            <!--                                <p>-->
            <!--                          <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleOurCoursesTitle{{$module->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">-->
            <!--                            Edit-->
            <!--                          </a>-->
            <!--                        </p>-->
            <!--                        <div class="collapse" id="collapseExampleOurCoursesTitle{{$module->id}}">-->
            <!--                            <div class="">-->
            <!--                                <div class="modal-dialog modal-dialog-centered" role="document">-->
            <!--                                    <div class="modal-content">-->
            <!--                                        <div class="modal-header border-bottom-0">-->
            <!--                                        </div>-->
            <!--                                            <form action="{{route('course.module.edit',['id'=>$module->id])}}" method="POST"-->
            <!--                                                      role="form" enctype="multipart/form-data">-->
            <!--                                                @csrf-->
            <!--                                                <div class="modal-body">-->

            <!--                                                    <div class="form-group">-->
            <!--                                                        <textarea class="form-control" id="summernote" name="coursemodule" cols="30" rows="8" required>{{$module->course_idname}}</textarea>-->
            <!--                                                    </div>-->
            <!--                                                </div>-->
            <!--                                                <div class="modal-footer border-top-0 d-flex justify-content-center">-->
            <!--                                                    <button type="submit" class="btn btn-success">Update</button>-->
            <!--                                                </div>-->
            <!--                                            </form>-->
            <!--                                       </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->


            <!--                        @Auth-->
            <!--                            @if(auth()->user()->status==='active')-->
            <!--                                <div class="modal-part">-->
            <!--                                    <div class="modal fade" id="editmodule{{$module->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"-->
            <!--                                         aria-hidden="true">-->
            <!--                                        <div class="modal-dialog modal-dialog-centered" role="document">-->
            <!--                                            <div class="modal-content">-->
            <!--                                                <div class="modal-header border-bottom-0">-->
            <!--                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--                                                        <span aria-hidden="true">&times;</span>-->
            <!--                                                    </button>-->
            <!--                                                </div>-->
            <!--                                                <form action="{{route('course.module.edit',['id'=>$module->id])}}" method="POST"-->
            <!--                                                      role="form" enctype="multipart/form-data">-->
            <!--                                                    @csrf-->
            <!--                                                    <div class="modal-body">-->

            <!--                                                        <div class="form-group">-->
            <!--                                                            <textarea class="form-control" name="coursemodule" cols="30" rows="8" required>{{$module->course_idname}}</textarea>-->
            <!--                                                        </div>-->
            <!--                                                    </div>-->
            <!--                                                    <div class="modal-footer border-top-0 d-flex justify-content-center">-->
            <!--                                                        <button type="submit" class="btn btn-success">Update</button>-->
            <!--                                                    </div>-->
            <!--                                                </form>-->
            <!--                                            </div>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                @endif-->
            <!--                                @endif-->
            <!--                        @endif-->
            <!--                        @endif-->
            <!--                    </p>-->
            <!--                    @endforeach-->
            <!--                    @Auth-->
            <!--                    @if(auth()->user()->status==='active')-->
            <!--                    <div class="modal-part">-->
            <!--                        <div class="container">-->
            <!--                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form421">-->
            <!--                                Add Module-->
            <!--                            </button>-->
            <!--                        </div>-->
            <!--                        <div class="modal fade" id="form421" tabindex="-1" role="dialog"-->
            <!--                            aria-labelledby="exampleModalLabel" aria-hidden="true">-->
            <!--                            <div class="modal-dialog modal-dialog-centered" role="document">-->
            <!--                                <div class="modal-content">-->
            <!--                                    <div class="modal-header border-bottom-0">-->
            <!--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--                                            <span aria-hidden="true">&times;</span>-->
            <!--                                        </button>-->
            <!--                                    </div>-->
            <!--                                    <form action="{{route('createmodule2')}}" method="post" role="form"-->
            <!--                                        enctype="multipart/form-data">-->
            <!--                                        @csrf-->
            <!--                                        <div class="modal-body">-->
            <!--                                            <div class="form-group">-->
            <!--                                                <textarea name="name" id="" cols="30" rows="10"></textarea>-->
            <!--{{--                                                <input class="form-control" name="name" type="text"--}}-->
            <!--{{--                                                    placeholder="Module Name" required>--}}-->
            <!--                                            </div>-->
            <!--                                            <input name="id" value="{{$course->id}}" class="form-control" id="id"-->
            <!--                                                type="hidden" required>-->

            <!--                                        </div>-->
            <!--                                        <div class="modal-footer border-top-0 d-flex justify-content-center">-->
            <!--                                            <button type="submit" class="btn btn-success">Submit</button>-->
            <!--                                        </div>-->
            <!--                                    </form>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    @endif-->
            <!--                    @endif-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
        <div class="row justify-content-center <!--&lt;!&ndash;requirement&ndash;&gt;-->">
            <div class="col-md-6">
                <h3 class="text-center mt-4">Course Requirements/Prerequisites</h3>
                @foreach($requirments as $requirment)
                <p class="text-center">{{$requirment->requirment}}

                    @Auth
                    @if(auth()->user()->status==='active')

                    <a href="{{route('requirmentdelete', ['id'=>$requirment->id])}}"> <i
                            class="fas fa-trash-alt"></i></a>
                    @endif
                    @endif
                </p>
                @endforeach
                @Auth
                @if(auth()->user()->status==='active')
                <div class="modal-part">
                    <div class="container">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form431">
                            Add Requirement
                        </button>
                    </div>
                    <div class="modal fade" id="form431" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('requirements2')}}" method="post" role="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control" name="name" type="text"
                                                placeholder="Requirement" required>
                                        </div>
                                        <input name="id" value="{{$course->id}}" class="form-control" id="id"
                                            type="hidden" required>
                                    </div>
                                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endif
            </div>
        </div>

        <div class="row text-center enroll mt-3">
            <div class="col">
                <a href="{{route('admission.course',$course->slug )}}">enroll now</a>
            </div>
        </div>
    </div>
</section>

<!--=========== End Course Module Part ==============-->



<!--=========== Add comma script ==============-->
<script>
    function addComma(number) {
        if (typeof number !== 'number') {
            throw new Error('Invalid input. Please provide a number.');
        }

        let strNumber = number.toString();
        let length = strNumber.length;

        if (length <= 2) {
            return strNumber;
        }

        let result = '';
        let count = 0;

        for (let i = length - 1; i >= 0; i--) {
            result = strNumber[i] + result;
            count++;

            if (count === 3 && i !== 0) {
                result = ',' + result;
                count = 0;
            }
        }

        return result;
    }

    //get regular parice
    const RPrice = document.getElementById('getRegularPrice').value;
    const rPriceInt = parseInt(RPrice);
    const valueWithComma = addComma(rPriceInt);
    // set regular price
    document.getElementById('regular-price').innerHTML = `BDT-${valueWithComma}/=`;

    //get Discount parice
    const discountPrice = document.getElementById('getdiscountPrice').value;
    const discountPriceInt = parseInt(discountPrice);
    const discountPriceWithComma = addComma(discountPriceInt);
    // set regular price
    document.getElementById('discount-price').innerHTML = `BDT-${discountPriceWithComma}/=`;


    //get upcomming parice
    const upcommingPrice = document.getElementById('upcommingPrice').value;
    const upcommingPriceInt = parseInt(upcommingPrice);
    const upcommingPriceWithComma = addComma(upcommingPriceInt);
    // set regular price
    document.getElementById('setUpcommingPrice').innerHTML = `Fee : ${upcommingPriceWithComma}/=`;
</script>
<!--=========== end comma script ==============-->


@endsection