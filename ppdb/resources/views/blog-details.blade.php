@php
Use App\Models\Title;

$title=Title::where('p_mark',"Blog Details")->first();
@endphp

@php
use App\Models\Heading;
$heading=Heading::where('id',22)->first();
@endphp

@section('title') {!! substr($blog->title, 4, -5) !!} | {{$title->text}}@endsection
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

<!-- ===== Blog Header Section =======-->
<section class="course" id="course-top">
    <div class="container">
        <div class="row text-center">
{{--                <h1>{{$blog->title}}</h1>--}}

        </div>
    </div>
</section>
<!-- ===== End Blog Header Section =======-->
<!--============== CUSTOM SECTION ===================-->
<!--<div class="clearfix">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
            
            <!--posts start-->
<!--            <div class="col-md-8">-->
<!--                <div class="border p-3 radius">-->
<!--                   <h6 class="single-page-post-title">{!! $blog->title !!}</h6>-->
<!--                   <img src="{{url('public/uploads/blog/'.$blog->image)}}" alt="{{$blog->alt}}">-->
<!--                   <p><i class="far fa-clock"></i>{{$blog->created_at}}</p>-->
<!--                   <div>{!! $blog->description !!}</div>-->
<!--                </div>-->
<!--            </div>-->
            <!--post end-->
            
            <!--sidebar start-->
<!--            <div class="col-md-4">-->
<!--                <div class="border radius p-3">-->
<!--                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, molestiae! Omnis autem ipsam temporibus inventore vero, ad, labore explicabo reiciendis animi natus accusantium debitis porro quae! Qui illo dolor quibusdam.-->
<!--                </div>-->
<!--            </div>-->
            <!--sidebar end-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--============== CUSTOM SECTION END ===============-->

<!-- ===== Blog News Section =======-->
<section class="blog-news" id="blog-details">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="row">
                    <div class="col left-item">
                        <div class="border radius p-2">
                            <div class="blog-title">
                                <div>{!! $blog->title !!}</div>
                                <!--<h6>{{$blog->title}}</h6>-->
                            </div>
                            <div class="blog-img">
                                <img src="{{url('public/uploads/blog/'.$blog->image)}}" alt="{{$blog->alt}}">
                            </div>
                            <div class="blog-small">
                                <div class="small-left px-3">
                                    <p><i class="far fa-clock"></i>{{$blog->created_at}}</p>
                                </div>
                            </div>
                            <div class="blog-body px-3">
                                <div>{!! $blog->description !!}</div>
                                <!--<p>{{$blog->description}}</p>-->
                            </div>
                        </div>
                        @Auth
                        @if(auth()->user()->status==='active')
                        <p class="text-center">
                          <a class="btn btn-danger" data-toggle="collapse" href="#collapseExampleBlogDetails" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Edit Form
                          </a>
                        </p>
                        <div class="collapse" id="collapseExampleBlogDetails">
                          <div class="">
                              <div class="" id="form60" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('blogedit',['id'=>$blog->slug])}}" method="POST" role="form"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="img">Select image:</label>
                                                    <input type="file" id="img" name="img" accept="image/*">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="alt" value="{{$blog->alt}}" class="form-control" placeholder="Enter alt tag">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="title" id="summernote" required>{{$blog->title}}</textarea>

                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="description" id="summernote" required>{{$blog->description}}</textarea>
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
                        @php
                        use App\Models\Social_link;
                        $links=Social_link::paginate(5);
                        @endphp

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 blog-rigth">
                <div class="border radius p-2">
                    <div class="follow-button">
                        <button class="btn btn-light btn-outline-dark" data-filter="all">All</button>
                        <button class="btn btn-light btn-outline-dark top " data-filter=".popular">Popular</button>
                        <button class="btn btn-light btn-outline-dark" data-filter=".recent">Recent</button>
                    </div>
    
    
                    <div class="all-news">
    
                        @foreach($populars as $popular)
                        <a class="" href="{{route('blog-details',$popular->slug)}}" target="_blank">
                            <div class="row follow-img-title popular mix m-0 mb-2">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="follow-image">
                                        <img src="{{url('public/uploads/blog/'.$popular->image)}}" alt="{{$popular->alt}}">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="follow-text">
                                        <p>{!! $popular->title !!}</p>
                                        <small>{{$popular->created_at}}</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
    
                        @foreach($recents as $recent)
                        <a class="" href="{{route('blog-details',$recent->slug)}}" target="_blank">
                            <div class="row follow-img-title recent mix m-0 mb-2">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="follow-image">
                                        <img src="{{url('public/uploads/blog/'.$recent->image)}}" alt="{{$recent->alt}}">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="follow-text">
                                        <p>{!! $recent->title !!}</p>
                                        <small>{{$recent->created_at}}</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
    
                    </div>
                </div>
            </div>
            
            
            <!--remove duplicate elements script start -->
            <script>
            
                const findDuplicateElement = ()=>{
                    const elements = Array.from(document.getElementsByClassName('mix'));
                    const uniqueElem = [];
            
                    elements.forEach( (element)=>{
                        const txt = element.textContent;
                        if( !uniqueElem.includes(txt) ){
                            uniqueElem.push(txt);
                        }else{
                            element.remove();
                        }
                    });
            
                }
                findDuplicateElement();
                
            </script>
            <!--remove duplicate elements script end -->
        </div>
    </div>
</section>
<!-- ===== End Blog News Section =======-->


<!-- ===== Start Blog Share Section =======-->
<section class="blog-share d-none" id="blog-share">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="share-title float-left">
                    <p><i class="fas fa-share"></i>Share this post</p>
                </div>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>

            </div>
        </div>
    </div>
</section>
<!-- ===== End Blog Share Section =======-->


<!-- ===== Start Blog Author Section =======-->
<section class="blog-author d-none" id="blog-author">
    <div class="container">
        <div class="row author">
            <div class="col-md-8">
                <div class="author-img float-left">
                </div>
                <div class="author-text float-left">
                    <p>Projuktir Pathshala</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== End Blog Author Section =======-->



<section>

</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if(Session::has('comment'))
                <p class="alert alert-success">{{ Session::get('comment') }}</p>
                @endif

            </div>
        </div>
    </div>
</section>
<!-- ========== Start Comment Section ==========-->
<section class="comment" id="comment">
    <div class="container">
        @foreach($comments as $comment)
        <div class="row">
            <div class="col-md-8">
                <div class="name">
                    <h5 style="color: rgb(82, 82, 82);">{{$comment->name}}</h5>
                </div>
                <div class="comment-part">
                    <p>{{$comment->comment}}</p>
                </div>
            </div>
        </div>
        @endforeach
        {{$comments->links()}}

    </div>
</section>
<!-- ========== End Comment Section ==========-->

<!-- ===== Start Blog Comment Section =======-->
<section class="blog-comment" id="blog-comment">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h6>Leave a Reply</h6>
                <p>Your email address will not be published. Required fields are marked *</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
               
                <form action="{{route('addcomment')}}" method="post" role="form" enctype="multipart/form-data" class='custom-comment-form'>
                    @csrf

                    <input type="hidden" value="{{$blog->slug}}" name="blog_slug" required>

                    <div class="form-group">
                        <label for="exampleInputName">Name*</label>
                        <input type="text" name="name" class="form-control radius-sm" id="exampleInputName" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email*</label>
                        <input type="email" name="email" class="form-control radius-sm" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Comment</label>
                        <textarea class="form-control radius-sm" name="comment" id="exampleFormControlTextarea1" rows="3"
                            required></textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    <button type="submit" class="btn btn-primary radius-sm px-4">Post Comment</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ===== End Blog Comment Section =======-->




@endsection
