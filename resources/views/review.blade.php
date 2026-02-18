@php
    Use App\Models\Title;
    $title=Title::where('p_mark',"Review")->first();

    $review = \App\Models\Review::where('id',1)->first();

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
    
        <!-- ===== Start Gallery image Section =======-->
    <section class="gallery-image-butotn reviewPage" id="gallery-image-button">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="reviewHeadingTag">Reviews</h2>
                </div>
            </div>
        </div>
        <div class="container image-mixer reviewPageDiv">
            <div class="row reviews-radius">
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/GAkdIPIk7Rg">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/1SnrRNrs9SA">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/GlETkCe_tno">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/v6BxWAfnkq8">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/gUMJ8Xfydqw">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/4oDXGCqPiBQ">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/3NvsLS22xD4">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/LIXVjEraLmU">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/JIKsvl2jV2k">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/Xk-Yet4G-Nk">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/_ed51HcdpUk">
                    </iframe>
                </div>
                <div class="col-md-4 mix reviewDiv text-center">
                    <iframe style="border-radius:10px;" allowfullscreen="allowfullscreen" width="100%" height="250px"
                        src="https://www.youtube.com/embed/kyFGa1aGED4">
                    </iframe>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ===== End Gallery image Section =======-->

@endsection
