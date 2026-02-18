@php
    Use App\Models\Title;
    $title=Title::where('p_mark',"Partner")->first();
@endphp


@php
    use App\Models\Heading;
    $heading=Heading::where('id',23)->first();
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

    <!-- ======== Mentor Heading Top =============-->
    <section class="mentor" id="mentor-top">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>{{$heading->name}}</h1>

                    @Auth

                        @if(auth()->user()->status==='active')

                            <div class="modal-part">
                                <div class="container">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#heading">
                                        Edit Form
                                    </button>
                                </div>

                                <div class="modal fade" id="heading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                        <input type="text" name="heading" class="form-control"
                                                               value="{{$heading->name}}" required>
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
    <!-- ========End Mentor Heading Top  =============-->

    <section>
        <div class="container">
            <div class="row justify-content-center">
                @forelse($partners as $partner)
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="partner">
                        <img class="partner_image" src="{{url('public/uploads/partner/'.$partner->image)}}" alt="{{$partner->name}}">
                    </div>
                </div>
                @empty
                <h3 class="text-center">No partner available</h3>
                @endforelse
            </div>
        </div>
    </section>

@endsection
