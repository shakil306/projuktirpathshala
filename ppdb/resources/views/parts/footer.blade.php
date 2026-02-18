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
@endphp

@php
use App\Models\Our_sister_concern;
$sisters=Our_sister_concern::get();
@endphp


    <!--Payment Method Section start-->
        <section class="social-icon paymentMethodDiv pt-5 pb-4" id="footer-icon" style="background-color:#ebf2f5">
          <div class="container">
              <h3 class="footerPaymentHeading">Marketplace</h3>
            <div class="row text-center justify-content-center pt-4">
              <div class="col">
                <!--<img class="freelanceWebsiteLogo" src="{{url('public/uploads/market_place/Web-site--banner.png')}}" alt="marketplace">-->
                <img class="freelanceWebsiteLogo" src="{{url('public/uploads/market_place/market-place-icons.png')}}" alt="marketplace">
              </div>
            </div>
          </div>
        </section>
    <!--Payment Method Section start-->

    <!--Marchent payment section start-->
        <section class="social-icon paymentMethodDiv our-all-payment-method" id="footer-icon" style="background-color:#ffffff">
          <div class="container">
              <h3 class="footerPaymentHeading all_payment_method_heading">Our All Payment Methods</h3>
            <div class="row text-center justify-content-center pt-4">
              <div class="col paymentFooter">
                <img src="{{url('public/uploads/market_place/Payment-icon.png')}}" alt="payment methods">
              </div>
            </div>
          </div>
        </section>
    <!--Marchent payment section end-->
  <section class="footer-top" id="footer-top">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Our Sister Concern</h2>
          </div>
        </div>
        <div class="row text-center">
          @foreach($sisters as $sister)
          <div class="col">
            <div class="img">
              <a href="{{$sister->link}}" target="_blank"><img src="{{url('public/uploads/sister/'.$sister->logo)}}" alt="{{$sister->alt}}"></a>
            </div>
          </div>
          @endforeach
        </div>
        @Auth
      @if(auth()->user()->status==='active')
      <center>
      <a class="btn btn-primary" href="{{route('sisterconcern')}}">Click for Edit</a>
      </center>
      @endif
      @endif
    </section>
    <!-- ========== End Footer Top logo ==========-->
@php
use App\Models\Social_link;
$links=Social_link::get();
@endphp

    <!-- ========= Footer Top Social icon =========-->
    <section class="social-icon pt-5" id="footer-icon">
      <div class="container">
        <div class="row text-center">

        @foreach($links as $link)
          <div class="col same">
            <div class="icon">
              <a href="{{$link->link}}" target="_blank"><i class="{{$link->class}}"></i></a>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section>
    @Auth
      @if(auth()->user()->status==='active')
      <br>
      <center>
      <a class="btn btn-primary" href="{{route('sociallist')}}">Click for Edit</a>
      </center>
      @endif
      @endif
    <!-- ========== End Footer Top Social icon ==========-->

    <!-- ========== Footer Top ==========-->
    <section class="footer-top" id="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="row">
              <div class="col-12 footer-right-title">
                <div class="right">
                  <h4>USEFUL LINK</h4>
                  <p><a href="{{route('index')}}" target="_blank">{{$titleh->page_name}}</a></p>
                  <p><a href="{{route('course')}}" target="_blank">{{$titlec->page_name}}</a></p>
                  <p><a href="{{route('mentor')}}" target="_blank">{{$titlem->page_name}}</a></p>
                  <p><a href="{{route('admission')}}" target="_blank">{{$titlead->page_name}}</a></p>
                  <p><a href="{{route('about')}}" target="_blank">{{$titlea->page_name}}</a></p>
                </div>
              </div>
            </div>
          </div>
            <hr class="hr_class">
          @php
          use App\Models\Course;
          $courses=Course::where('status',"active")->paginate(5);
          @endphp
          <div class="col-lg-3 col-md-3 col-sm-6">
            <h4>Our Courses</h4>
            <div class="row">
              <div class="col-12">
                <div class="left">
                  @foreach($courses as $course)
                  <p><a href="{{route('course_details',['id'=>$course->slug])}}" target="_blank">{!! $course->title !!}</a></p>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <hr class="hr_class">
          @php
          use App\Models\Contact;
          $contact=Contact::skip(1)->first();
          $whatsApp=Contact::first();
          @endphp
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="row">
                  <div class="col-12 footer-right-title">
                      <div class="right">
                          <h4>Blog</h4>
                            @php
                                $blogs = \App\Models\Blog::orderBy('id', 'DESC')->take(5)->get();
                                @endphp
                          @foreach($blogs as $blog)
                          <p><a href="{{route('blog-details',$blog->slug)}}" target="_blank">{!! Str::limit($blog->title, 34) !!}</a></p>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
            <hr class="hr_class">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <h4>CONTACT US</h4>
            <div class="row">
              <div class="col">
                <div class="phone">
                  <div class="phn-icon">
                    <i class="fab fa-whatsapp footer_whats"></i>
                  </div>
                  <div class="phn-num">
                    <a class="footer_whatsapp" href="tel:+8801733662435" title="+8801733662435">{{$whatsApp->phone}}</a>
                      @auth
                          @if(auth()->user()->status==='active' && auth()->user()->role==='super admin')

                              <div class="modal-part">
                                  <div class="container">
                                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#footernumber">
                                          Edit
                                      </button>
                                  </div>

                                  <div class="modal fade" id="footernumber" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header border-bottom-0">

                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <form action="{{route('footer.whatsapp',['id'=>$whatsApp->id])}}" method="POST" role="form" enctype="multipart/form-data">
                                                  @method('post')
                                                  @csrf
                                                  <div class="modal-body">
                                                      <div class="form-group">
                                                          <input type="text" name="phone" class="form-control" value="{{$whatsApp->phone}}" required>
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
            <div class="row">
              <div class="col">
                <div class="email">
                  <div class="email-icon">
                    <i class="far fa-envelope"></i>
                  </div>
                  <div class="email-add">
                    <p>{{$contact->email}}</p>
                  </div>
                </div>
              </div>
            </div>
              <div class="row mt-2">
                  <div class="col">
                      <div class="home">
                          <div class="icon">
                              <i class="fas fa-home"></i>
                          </div>
                          <!--  <div class="home-address">-->
                          <p style="margin-left: 50px;">{{$contact->address}}

                          @auth
                          @if(auth()->user()->status==='active' && auth()->user()->role==='super admin')

                              <div class="modal-part">
                                  <div class="container">
                                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#headingaddress">
                                          Edit
                                      </button>
                                  </div>

                                  <div class="modal fade" id="headingaddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header border-bottom-0">

                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <form action="{{route('footer.address',['id'=>$contact->id])}}" method="POST" role="form" enctype="multipart/form-data">
                                                  @method('post')
                                                  @csrf
                                                  <div class="modal-body">
                                                      <div class="form-group">
                                                          <input type="text" name="phone" class="form-control" value="{{$contact->phone}}" required>
                                                      </div>
                                                      <div class="form-group">
                                                          <input type="text" name="email" class="form-control" value="{{$contact->email}}" required>
                                                      </div>
                                                      <div class="form-group">
                                                          <input type="text" name="address" class="form-control" value="{{$contact->address}}" required>
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
                          <!-- </div>-->
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========= End Footer Top =========-->
    @php
use App\Models\Copyright;
$copy=Copyright::first();

@endphp
<style>
    .copywrite{
    padding: 0px 0px;
    margin:auto;
}
.copywrite ul {
    list-style: none;
    margin: auto;
    text-align: center;
}
.copywrite ul li{
    display: inline-block;
    padding-top: 15px;
    padding-left: 15px;
    padding-right: 15px;
}
.copywrite ul li:first-child{
    padding-left: 0px;
}
.copywrite ul li a {
    text-decoration: none;
    color: #BDC3C7;
    transition: .5s;
    font-size: 14px;
}
.copywrite ul li a:hover{
    color: #ffffff;
    transition: .5s;
}
@media (max-width: 425px) {
    .footer ul {
        list-style: none;
        margin-left: -6px;
    }
    .copywrite ul {
        list-style: none;
        margin-left: -20px;
    }
    .copywrite ul li {
        display: inline-block;
        padding-top: 15px;
         padding-left: 0px;
        padding-right: 15px;
    }
}
</style>
    <!-- =========  Footer =========-->
    <footer id="footer">
      <div class="container-fluid">
        <div class="copywrite">
            <ul>
                <li><a href="{{route('terms-condition')}}">Terms & Condition</a></li>
                <li><a href="{{route('return-refund-policy')}}">Return and Refund Policy</a></li>
                <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                <li><a href="{{route('disclaimer')}}">Disclaimer</a></li>
            </ul>
        </div>
        <div class="row text-center">

          <div class="col">
            <p>© 2016-{{date("Y")}} Projuktir Pathshala Institute. All Rights Reserved. | Design & Development By:-<a href="https://www.digitalmarketingbd.com/">Digital Marketing Solution (Pvt.) Ltd.</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- ========= End Footer =========-->
