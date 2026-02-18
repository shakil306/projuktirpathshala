<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left: 110px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
@php
Use App\Models\Title;
$title=Title::where('p_mark',"Seminar")->first();
@endphp
@php
use App\Models\Heading;
$heading=Heading::where('id',18)->first();
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


<!-- ======== Start Seminar middle Section =============-->
<section class="seminar-middle" id="seminar-middle">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h4>Up Coming Seminars</h4>
            </div>
        </div>

        @foreach($seminars as $seminar)
        <div class="row seminar-item">
            <div class="col-lg-6 col-md-9 col-sm-9">
                <div class="seminar-img">
                    <div class="seminar-img-left float-left">
                        <img class="img-fluid" src="{{url('public/uploads/event/'.$seminar->image)}}" alt="{{$seminar->alt}}">
                    </div>
                    <div class="seminar-img-right float-left">
                        <h5>{{$seminar->title}}</h5>
                        <p>Date:{{$seminar->date}}</p>
                        <p>Time: {{$seminar->s_time}} To {{$seminar->e_time}}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-3 col-sm-3 text-center">
                <div class="seminar-button">
                    <a href="{{route('registerseminar', ['id'=>$seminar->slug])}}" type="button" class="btn">Join</a>
                </div>
            </div>

            @Auth

            @if(auth()->user()->status==='active')
            <div class="modal-part">
                <div class="container">
                    <div class="row text-center">
                        <div class="col">
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#form{{$seminar->id}}">
                                Edit Form
                            </button>
                        </div>
                    </div>

                </div>

                <div class="modal fade" id="form{{$seminar->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('eventedit',['id'=>$seminar->id])}}" method="POST" role="form"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="img">Select image:</label>
                                        <input type="file" id="img" name="img" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Alt:</label>
                                        <input type="text" name="alt" value="{{$seminar->alt}}" class="form-control" placeholder="Enter alt tag">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="title" value="{{$seminar->title}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="date" value="{{$seminar->date}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="time" name="s_time" value="{{$seminar->s_time}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="time" name="e_time" value="{{$seminar->e_time}}" class="form-control" required>
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
        @endforeach
        <div class="row text-center">
            <div class="col">
                <h4>Up Coming Workshop</h4>
            </div>
        </div>
        @foreach($workshops as $workshop)
        <div class="row seminar-item">
            <div class="col-lg-6 col-md-9 col-sm-9">
                <div class="seminar-img">
                    <div class="seminar-img-left float-left">
                        <img class="img-fluid" src="{{url('public/uploads/event/'.$workshop->image)}}" alt="{{$workshop->alt}}">
                    </div>
                    <div class="seminar-img-right float-left">
                        <h5>{{$workshop->title}}</h5>
                        <p>Date:{{$workshop->date}}</p>
                        <p>Time: {{$workshop->s_time}} To {{$workshop->e_time}}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-3 col-sm-3 text-center">
                <div class="seminar-button">
                    <a href="{{route('registerseminar', ['id'=>$workshop->slug])}}" type="button" class="btn">Join</a>
                </div>
            </div>

            @Auth

            @if(auth()->user()->status==='active')

            <div class="modal-part">
                <div class="container">
                    <div class="row text-center">
                        <div class="col">
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#form{{$workshop->id}}">
                                Edit Form
                            </button>
                        </div>
                    </div>

                </div>

                <div class="modal fade" id="form{{$workshop->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('eventedit',['id'=>$workshop->id])}}" method="POST" role="form"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="img">Select image:</label>
                                        <input type="file" id="img" name="img" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="alt" value="{{$workshop->alt}}" class="form-control" placeholder="Enter alt tag">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="title" value="{{$workshop->title}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="date" value="{{$workshop->date}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="time" name="s_time" value="{{$workshop->s_time}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="time" name="e_time" value="{{$workshop->e_time}}" class="form-control" required>
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
        @endforeach



    </div>
</section>
<!-- ======== End Seminar middle Section =============-->

@endsection
