@php
Use App\Models\Title;

$title=Title::where('p_mark',"Contact")->first();

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

<!-- ================ Contact map ==================-->
<section class="contact-map" id="contact-map">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 contact-item">
                <div class="row text-center">
                    <div class="image" id="image-small">
                        <img src="images/contact/phone-icon.png" alt="phone">
                    </div>
                </div>
                <div class="row">
                    <div class="col text">
                        <h2>Phone</h2>
                        <h6>You can contact via phone</h6>
                        <div class="phone">
                            <p>{{$contact->phone}}</p>
                        </div>
                        @Auth

                        @if(auth()->user()->status==='active')


                        <div class="modal-part">
                            <div class="container">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form10">
                                    Edit Number
                                </button>
                            </div>

                            <div class="modal fade" id="form10" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('phone',['id'=>$contact->id])}}" method="POST" role="form"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="num">Phn Number</label>
                                                    <input type="number" value="{{$contact->phone}}" name="number" id="num"
                                                        placeholder="Enter Your Num" requered>
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
            <div class="col-lg-4 col-md-4 col-sm-12 contact-item">
                <div class="row text-center">
                    <div class="image" id="image-middle">
                        <img src="images/contact/email-icon.png" alt="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col text">
                        <h2>E-Mail</h2>
                        <h6>You can mail us for discussion</h6>
                        <div class="phone">
                            <p>{{$contact->email}}</p>
                        </div>

                        @Auth
                        @if(auth()->user()->status==='active')
                        <div class="modal-part">
                            <div class="container">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form11">
                                    Edit Email
                                </button>
                            </div>
                            <div class="modal fade" id="form11" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('email',['id'=>$contact->id])}}" method="POST" role="form"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="Email">Your Email</label>
                                                    <input type="email" name="email" id="Email"
                                                        placeholder="Enter Your Email" required>
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
            <div class="col-lg-4 col-md-4 col-sm-12 contact-item">
                <div class="row text-center">
                    <div class="image" id="image-big">
                        <img src="images/contact/address-icon.png" alt="address">
                    </div>
                </div>
                <div class="row">
                    <div class="col text">
                        <h2>Address</h2>
                        <h6>You can come our office</h6>
                        <div class="phone">
                            <p>{{$contact->address}}</p>
                        </div>

                        @Auth
                        @if(auth()->user()->status==='active')
                        <div class="modal-part">
                            <div class="container">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form12">
                                    Edit Address
                                </button>
                            </div>
                            <div class="modal fade" id="form12" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('address',['id'=>$contact->id])}}" method="POST"
                                            role="form" enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="Address">Your Address</label>
                                                    <input type="string" name="address" value="{{$contact->address}}"
                                                        id="Address" placeholder="Enter Your Address" required>
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
        </div>
        <div class="contact-form-area">
            <div class="sec-title center">
                <h2>Contact Us</h2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!--<div class="">-->
                        <div class="google-map">
        {{--                    <iframe src="{{$location->url}}" frameborder="0" allowfullscreen="" aria-hidden="false"--}}
        {{--                        tabindex="0"></iframe>--}}
                            <iframe style="width:100%; height:100%; min-height:250px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.455640161736!2d90.39954141498366!3d23.87345648452876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5e3a6eedc4d%3A0xd92ec05c62efbeed!2sProjuktir%20Pathshala%20Institute!5e0!3m2!1sen!2sbd!4v1649188932990!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    <!--</div>-->
                </div>

                <div class="col-md-6">
                    @if(Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif


                    <div class="form-inner" style="border: 1px solid #A6A6A6; padding: 10px; border-radius: 5px;">
                        <form action="{{route('contact-us')}}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-user"></i>
                                        <input type="text" name="name" placeholder="Name" required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Email" required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-file"></i>
                                        <input type="text" name="subject" placeholder="Subject" required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" name="phone" placeholder="Phone" required aria-required="true">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Write here message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn-two" name="submit-form">
                                            Submit Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
