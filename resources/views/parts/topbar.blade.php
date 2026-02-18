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
$titlereview=Title::where('p_mark',"Review")->first();
$titlepartner=Title::where('p_mark',"Partner")->first();
@endphp
@php
use App\Models\Logo;
$tlogo=Logo::where('place','Header')->first();
@endphp

@php
use App\Models\Social_link;
$links=Social_link::get();
@endphp



@php
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Design1;
use App\Models\Design2;
$sub = Submenu::where('sub_status', 'Active')->get();
$menu = Menu::where('menu_status', 'Active')->get();
$menu_i=0;

$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
@endphp
<!-- =========Header top =========-->
<section class="header-icon" id="header-icon">
    <div class="row icon-sec">
        <div class="date_item">
            <p class="top_p">Date : {{date("d/m/Y")}}&nbsp; <!--Time : {{$dt->format('g:i a')}}--></p>
        </div>
        <div class="col">
            <div class="row">
                @php
                    use App\Models\Batch;
                    $batches=Batch::where('status',"active")->orderBy('id','DESC')->get();
                @endphp
                    <div class="col">
                            <marquee class="marquee" behavior="" direction="">Upcoming Batch :  @foreach($batches as $batch)<a class="marquee_a" href="{{route('registernow', ['id'=>$batch->slug])}}">{{$batch->course_name}}.</a>@endforeach</marquee>
                    </div>
            </div>
        </div>
        <div class="col-3">
            <ul>
                @foreach($links as $link)
                    <li>
                        <a href="{{$link->link}}" target="_blank"><i class="{{$link->class}}"></i></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row logo-design">
            <div class="col-lg-4 col-md-3 col-sm-3">
                <div class="logo">
                    <a href="{{route('index')}}"><img src="{{url('public/uploads/logo/'.$tlogo->logo)}}" alt="Projuktir Pathshala Institute"></a>
                </div>
            </div>
            @php
            use App\Models\Contact;
            $contacts=Contact::get();
            @endphp
            <div class="col-lg-8 col-md-9 col-sm-9">
                <div class="row contact">
                    <div class="col-lg-6 col-md-6 col-sm-5">
                        <div class="phone">
                            <div class="phn-icon">
{{--                                <i class="fas fa-phone-alt"></i>--}}
                            </div>
                            <div class="phn-num">
                            @foreach($contacts as $contact)
                                    <p><i class="fas fa-phone-alt top_phone"></i>{{$contact->phone}}
                                @Auth

@if(auth()->user()->status==='active')

<div class="modal-part">
    <div class="container">
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#heading2{{$contact->id}}">
        Edit Form
      </button>
    </div>

    <div class="modal fade" id="heading2{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('phone',['id'=>$contact->id])}}" method="POST" role="form" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="modal-body">
              <div class="form-group">
              <input type="string" name="number" class="form-control" value="{{$contact->phone}}" required>
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


                                </p>
                            @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7">
                        <div class="email">
{{--                            <div class="email-icon">--}}
{{--                                <i class="far fa-envelope"></i>--}}
{{--                            </div>--}}
                            <div class="email-add">
                            @foreach($contacts as $contact)
                                <p><i class="far fa-envelope top_phone"></i>{{$contact->email}}</p>

                                @Auth
              @if(auth()->user()->status==='active')
              <div class="modal-part">
                <div class="container">
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form11{{$contact->id}}">
                    Edit Email
                  </button>
                </div>
                <div class="modal fade" id="form11{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{route('email',['id'=>$contact->id])}}" method="POST" role="form" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="Email">Your Email</label>
                            <input type="email" name="email" id="Email" value="{{$contact->email}}" required>
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

                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========= End Header top =========-->

<!-- ===== Start Navbbar Section =======-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('index')}}"><img src="{{url('public/uploads/logo/'.$tlogo->logo)}}" alt="projuktir pathshala institute"></a>
    <a class="nav_number" href="tel:+8801733662435" title="+8801733662435">+8801733662435</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto">
            <li class="nav-item ">
                <a class="nav-link " href="{{route('index')}}">{{$titleh->page_name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('course')}}">{{$titlec->page_name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admission')}}">{{$titlead->page_name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('mentor')}}">{{$titlem->page_name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('blog')}}">{{$titleb->page_name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('review')}}">{{$titlereview->page_name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('gallery')}}">{{$titleg->page_name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">{{$titlecn->page_name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">{{$titlea->page_name}}</a>
            </li>

        @foreach($menu as $all_menu)

            @if (count($all_menu->sub) > 0)

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{$all_menu->menu_name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($all_menu->sub as $all_sub)


                    <a class="dropdown-item" href="{{$all_sub->sub_link}}">{{$all_sub->sub_name}}</a>

                    @endforeach
                </div>
            </li>



            @else

            <li class="nav-item">
                <a class="nav-link" href="{{$all_menu->menu_link}}">{{$all_menu->menu_name}}</a>
            </li>enrollment
            @endif


            @endforeach
            <li class="nav-item">
                <a class="nav-link" href="{{route('enrollment.form')}}">Course Enroll</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Others
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="submenu">
                    <!--<a class="dropdown-item" href="{{route('gallery')}}">{{$titleg->page_name}}</a>-->
                    <a class="dropdown-item" href="{{route('seminar')}}">{{$titles->page_name}}</a>
                    <a class="dropdown-item" href="{{route('social-activity')}}">{{$titlesa->page_name}}</a>
                    <a class="dropdown-item" href="{{route('partner')}}">{{$titlepartner->page_name}}</a>
                    <a class="dropdown-item" href="{{route('student-feedback')}}">{{$titlesf->page_name}}</a>
                </div>
            </li>


          @Auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{Auth()->user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @if(Auth()->user()->role==='student')
                    <a class="dropdown-item" href="{{route('profile')}}">My Profile</a>
                @else
                <a class="dropdown-item" href="{{route('home')}}">Admin Dashboard</a>
                @endif
                    <a class="dropdown-item" href="{{route('resetpassword')}}">Change Password</a>
                    <a class="dropdown-item" href="{{route('logout')}}">Log Out</a>
                </div>
            </li>

          @endif



        </ul>
    </div>
</nav>
<!-- ===== End Start Navbbar Section =======-->

 <!--===== shorting submenu by length =====-->
 <script>
  const submenu = document.getElementById('submenu');
  const links = Array.from(submenu.getElementsByTagName('a'));

  links.sort((a, b) => a.textContent.length - b.textContent.length);

  links.forEach(link => submenu.appendChild(link));
</script>
 <!--===== shorting submenu by length end =====-->
