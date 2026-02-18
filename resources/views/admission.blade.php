@php
    Use App\Models\Title;

    $title=Title::where('p_mark',"Admission")->first();

@endphp
@php
    use App\Models\Heading;
    $heading=Heading::where('id',15)->first();
@endphp

@section('title'){{$title->text}}@endsection
@section('description'){{$title->description}}@endsection
@section('keyword'){{$title->keyword}}@endsection

@extends('master.master')

@section('content')

    @if ($errors->any())
        <section>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif

    <div style="clear: both;"></div>
    <!-- =========== Start Form Part ==================-->
    <section class="form-part" id="form-section-top">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3>{!! $heading->name !!}</h3>
                    @Auth
                        @if(auth()->user()->status==='active')
                            <p class="text-center">
                                <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleAdmissionPage" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Edit Form
                                </a>
                            </p>
                            <div class="collapse" id="collapseExampleAdmissionPage">
                                <div class="">
                                    <div class="" id="heading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom-0">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{route('headingedit',['id'=>$heading->id])}}" method="POST" role="form"
                                                      enctype="multipart/form-data">
                                                    @method('put')
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <textarea name="heading" class="form-control" id="summernote" required>{{$heading->name}}</textarea>
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
    <?php
        if(empty($course)){
    ?>
    <form action="{{route('admission2')}}" method="post" role="form" enctype="multipart/form-data" class="admission-form">
    @csrf
    <div class="container">
        <div class="form-row pb-2">
            <div class="form-group col-md-12">
                <div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="validatedInputGroupSelect9" style="font-weight: 600;">Select Course*</label>
                        </div>
                        <select class="custom-select response_courseeeee" id="course_idd" name="course_id" data-response="course_id" required>
                            <option disabled selected>Choose...</option>
                            @foreach($courses as $course)
                            <option value="{{$course->id}}">{!! $course->title !!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="append_item"></div>
    <section class="form-part" id="form-body">
        <div class="container">
                
                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Full Name*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="father_name" class="form-control" placeholder="Father's Name*" required>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="text" name="mother_name" class="form-control" placeholder="Mother's Name*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="validatedInputGroupSelect4">Date of Birth*</label>
                            </div>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="number" name="nid" class="form-control" placeholder="Birth/NID Number*"
                               required>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="validatedInputGroupSelect4">Gender*</label>
                            </div>
                            <select class="custom-select" name="gender" id="validatedInputGroupSelect4" required>
                                <option value="">Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Email*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" name="phone" class="form-control" placeholder="Phone*" required>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="string" name="present_address" class="form-control" placeholder="Present Address*"
                               required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="string" name="degree1" class="form-control input_control" placeholder="Educational Status*"
                               required>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-12">
                        <div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="validatedInputGroupSelect9" style="font-weight: 600;">Payment*</label>
                                </div>
                                <select class="custom-select" name="payment" id="validatedInputGroupSelect9" required>
                                    <option disabled selected>Choose...</option>
                                    <option value="offline">Cash</option>
                                    <option value="nagad">Bkash</option>
                                    <option value="nagad">Nagad</option>
                                    <option value="nagad">Rocket</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <input type="hidden" name="degree2" class="form-control" value="{{date("Y-m-d")}}" required>
                    </div>

                </div>
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn submit_button mb-5">Submit</button>
                        {{--                    <button class="your-button-class" id="sslczPayBtn"--}}
                        {{--                            token="if you have any token validation"--}}
                        {{--                            postdata="your javascript arrays or objects which requires in backend"--}}
                        {{--                            order="If you already have the transaction generated for current order"--}}
                        {{--                            endpoint="/pay-via-ajax"> Pay Now--}}
                        {{--                    </button>--}}
                    </div>
                </div>

            <!--</form>-->
        </div>
    </section>
    </form>
    <?php
        }else{
    ?>
            <!--<h1>Course Page</h1>-->
                <!-- =========== Start Form Part ==================-->
    <section class="form-part courseWiseAdmissionTop" id="form-section-top">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3> {!! $course->title !!}</h3>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    <section class="admission-signle-page">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <?php
                            $withoutPercentence = rtrim($course->discount, "%");
                            $percentenceValue = $withoutPercentence / 100; 
                            $discountTaka = $percentenceValue * $course->course_fee;
                        ?>
                <!--start custom table-->
                    <div class="d-flex custom-header-table">
                        <div class="course-duration">
                            <h2>Course Duration</h2>
                            <h3>{{$course->duration}}</h3>
                        </div>
                        <div class="course-classes">
                            <h2>Total Classes</h2>
                            <h3>{{$course->total_classes}}</h3>
                        </div>
                        <div class="course-fees">
                            
                            <h2>Regular Fees</h2>
                            <h3>{{$course->course_fee}}</h3>
                        </div>
                        <div class="course-discount">
                            <h2>{{$course->discount}} Discount Fees</h2>
                            <h3>{{$course->course_fee - $discountTaka}}</h3>
                        </div>
                    </div>
                    <!--start custom table-->
                <!--<table class="table table-bordered">-->
                <!--    <tbody>-->
                        
                        
                <!--    <tr>-->
                <!--        <th>Course Duration</th>-->
                <!--        <th>Total Classes</th>-->
                <!--        <th>Regular Fees</th>-->
                <!--        <th>{{$course->discount}} Discount Fees</th>-->
                <!--    </tr>-->
                <!--        <td>{{$course->duration}}</td>-->
                <!--        <td>{{$course->total_classes}}</td>-->
                <!--        <td>{{$course->course_fee}}</td>-->
                <!--        <td>{{$course->course_fee - $discountTaka}}</td>-->
                <!--    </tr>-->
                <!--</table>-->
            </div>
            </div>
        </div>
    </section>
    <section class="form-part admission-signle-page" id="form-body">
        <div class="container">
            <form action="{{route('course.wise.admission.store')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Full Name*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="father_name" class="form-control" placeholder="Father's Name*" required>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="text" name="mother_name" class="form-control" placeholder="Mother's Name*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="validatedInputGroupSelect4">Date of Birth*</label>
                            </div>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="number" name="nid" class="form-control" placeholder="Birth/NID Number*"
                               required>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="validatedInputGroupSelect4">Gender*</label>
                            </div>
                            <select class="custom-select" name="gender" id="validatedInputGroupSelect4" required>
                                <option value="">Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Email*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" name="phone" class="form-control" placeholder="Phone*" required>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-6">
                        <input type="string" name="present_address" class="form-control" placeholder="Present Address*"
                               required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="string" name="degree1" class="form-control input_control" placeholder="Educational Status*"
                               required>
                    </div>
                </div>
                <div class="form-row pb-2">
                    <div class="form-group col-md-12">
                        <div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="validatedInputGroupSelect9" style="font-weight: 600;">Payment*</label>
                                </div>
                                <select class="custom-select" name="payment" id="validatedInputGroupSelect9" required>
                                    <option disabled selected>Choose...</option>
                                    <option value="offline">Cash</option>
                                    <option value="nagad">Bkash</option>
                                    <option value="nagad">Nagad</option>
                                    <option value="nagad">Rocket</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <input type="hidden" name="degree2" class="form-control" value="{{date("Y-m-d")}}" required>
                    </div>

                </div>
                <input type="hidden" name="course_name" value="{{$course->title}}">
                <input type="hidden" name="course_duration" value="{{$course->id}}">
                <input type="hidden" name="netPrice" value="{{$course->course_fee - $discountTaka}}">

                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
    <!-- =========== End Form Part ==================-->
    <?php
        }
    ?>
    <!-- =========== End Form Part ==================-->

    <script>
        document.getElementById("course_idd").onchange = function(){
            let value = document.getElementById("course_idd").value;
            let html = '';
            $.ajax({
                url : '/single_course/' + value,
                method : 'GET',
                success : function(data){
                    if(data.length === 0){
                        alert('No Data Found');
                    }else{

                            let courseFee = data.course_fee;
                            let str = data.discount;
                            str = str.substring(0, str.length - 1);
                            let discountAmount = str /100;
                            let currentDiscountAmount = courseFee * discountAmount;
                            // html +=
                            //     '<section>'+
                            //         '<div class="container">'+
                            //             '<div class="row text-center pb-2">'+
                            //                 '<div class="col-md-12">'+
                            //                     '<table class="table table-bordered">'+
                            //                         '<tbody>'+
                            //                         '<tr>'+
                            //                             '<th>Course Duration</th>'+
                            //                             '<th>Total Classes</th>'+
                            //                             '<th>Regular Fees</th>'+
                            //                             '<th>'+ data.discount +'Discount Fees</th>'+
                            //                         '</tr>'+
                            //                         '<tr>'+
                            //                             '<td>' + data.duration + '</td>'+
                            //                             '<td>' + data.total_classes + '</td>'+
                            //                             '<td>' + data.course_fee + '</td>'+
                            //                             '<td>' + ( data.course_fee - currentDiscountAmount ) + '</td>'+
                            //                             '<input type="hidden" name="course_name" class="form-control" value="'+ data.title +'">'+
                            //                             '<input type="hidden" name="course_duration" class="form-control" value="'+ data.id +'">'+
                            //                             '<input type="hidden" name="netPrice" class="form-control" value="'+ ( data.course_fee - currentDiscountAmount ) +'">'+
                            //                         '</tr>'+
                            //                         '<tbody>'+
                            //                     '</table>'+
                            //                 '</div>'+
                            //             '</div>'+
                            //         '</div>'
                            //     '</section>';
                            
                                customHtml = `
                                <div class="container">
                                    <div class="d-flex custom-header-table">
                                        <div class="course-duration">
                                            <h2>Course Duration</h2>
                                            <h3>${data.duration}</h3>
                                        </div>
                                        <div class="course-classes">
                                            <h2>Total Classes</h2>
                                            <h3>${data.total_classes}</h3>
                                        </div>
                                        <div class="course-fees">
    
                                            <h2>Regular Fees</h2>
                                            <h3>${data.course_fee}</h3>
                                        </div>
                                        <div class="course-discount">
                                            <h2>25% Discount Fees</h2>
                                            <h3>${( data.course_fee - currentDiscountAmount )}</h3>
                                        </div>
                                        <input type="hidden" name="course_name" class="form-control" value="${data.title}">
                                        <input type="hidden" name="course_duration" class="form-control" value="${data.id}">
                                        <input type="hidden" name="netPrice" class="form-control" value="${( data.course_fee - currentDiscountAmount )}">
                                    </div>
                                </div>
                                `;

                        $('#append_item').empty().append(customHtml);

                    }
                }
            });
        };
    </script>

@endsection
