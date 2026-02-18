
   @if(auth()->user()->status==='active')
  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon">

        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pages1212" aria-expanded="true"
             aria-controls="collapse">
              <i class="fab fa-fw fa-wpforms"></i>
              <span>Pages</span>
          </a>
          <div id="pages1212" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">

                  <a class="collapse-item" href="{{route('pagetitle')}}">Manage Pages/Titles</a>

              </div>
          </div>
      </li>

      @if(auth()->user()->status==='active' && auth()->user()->role==='super admin')
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapses1221" aria-expanded="true"
                 aria-controls="collapse">
                  <i class="fab fa-fw fa-wpforms"></i>
                  <span>Admin</span>
              </a>
              <div id="collapses1221" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">

                      <a class="collapse-item" href="{{route('admin.create')}}">Admin Create</a>
                      <a class="collapse-item" href="{{route('adminlist')}}">Admin List</a>

                  </div>
              </div>
          </li>
      @endif

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Mentors & Leaders</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Mentor</h6>
            <a class="collapse-item" href="{{route('assign-mentor')}}">Assign Mentor</a>
            <a class="collapse-item" href="{{route('mentorlist')}}">Mentor List</a>

            <h6 class="collapse-header">Leader</h6>
            <a class="collapse-item" href="{{route('newleader')}}">New Leader</a>
            <a class="collapse-item" href="{{route('leaderlist')}}">Leader List</a>


          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Department Course & Batch</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

          <h6 class="collapse-header">Department</h6>
            <a class="collapse-item" href="{{route('newdepertment')}}">New Department</a>
            <a class="collapse-item" href="{{route('depertmentlist')}}">Department List</a>

            <h6 class="collapse-header">Course</h6>
            <a class="collapse-item" href="{{route('assigncourse')}}">New Course</a>
            <a class="collapse-item" href="{{route('course-list')}}">Course List</a>
            <h6 class="collapse-header">Batch</h6>
            <a class="collapse-item" href="{{route('newbatch')}}">Create New Batch</a>
            <a class="collapse-item" href="{{route('runningbatchlist')}}">Running Batch</a>
            <a class="collapse-item" href="{{route('completebatch')}}">Complete Batch</a>

          </div>
        </div>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#admissionpage" aria-expanded="true"
             aria-controls="collapsePage">
              <i class="fas fa-fw fa-columns"></i>
              <span>Admission</span>
          </a>
          <div id="admissionpage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Feedback</h6>
                  <a class="collapse-item" href="{{route('admission.list')}}">Admission Student List</a>
                  <a class="collapse-item" href="{{route('excel')}}">Download Excel File</a>
              </div>
          </div>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagepay" aria-expanded="true"
             aria-controls="collapsePage">
              <i class="fas fa-fw fa-columns"></i>
              <span>Payment</span>
          </a>
          <div id="collapsePagepay" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Feedback</h6>
                  <a class="collapse-item" href="{{route('p_done')}}">Complete</a>
                  <a class="collapse-item" href="{{route('p_pending')}}">Pending</a>
              </div>
          </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true"
          aria-controls="collapse">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Manage Gallery</span>
        </a>
        <div id="collapse" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gallery</h6>
            <a class="collapse-item" href="{{route('newslider')}}">Gallery Slider</a>
            <a class="collapse-item" href="{{route('sliderlist')}}">Gallery Slider Images</a>
            <a class="collapse-item" href="{{route('addgallery')}}">Add Image in Galley</a>
            <a class="collapse-item" href="{{route('galleries')}}">Galley Images</a>


          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapses" aria-expanded="true"
          aria-controls="collapse">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Social Activities</span>
        </a>
        <div id="collapses" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('newsocial')}}">Add new</a>
            <a class="collapse-item" href="{{route('social.index')}}">Index</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Feedback & Success</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Feedback</h6>
            <a class="collapse-item" href="{{route('student-feedback2')}}">Feedback</a>
            <a class="collapse-item" href="{{route('feedbacklist')}}">Feedback List</a>
            <h6 class="collapse-header">Success</h6>
            <a class="collapse-item" href="{{route('Success-Students')}}">Success Students</a>
            <a class="collapse-item" href="{{route('s_students')}}">Success Students List</a>


          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePageww" aria-expanded="true"
          aria-controls="collapsePageww">
          <i class="fas fa-fw fa-columns"></i>
          <span>Slider</span>
        </a>
        <div id="collapsePageww" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="{{route('welcomeslider')}}">New Slider</a>
            <a class="collapse-item" href="{{route('wsliderlist')}}">Slider List</a>

          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagewwblog" aria-expanded="true"
          aria-controls="collapsePagewwblog">
          <i class="fas fa-fw fa-columns"></i>
          <span>Blog</span>
        </a>
        <div id="collapsePagewwblog" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

          <h6 class="collapse-header">Blog</h6>
            <a class="collapse-item" href="{{route('writeblog')}}">Write Blog</a>
            <a class="collapse-item" href="{{route('bloglist')}}">Blog List</a>


          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagewwevent" aria-expanded="true"
          aria-controls="collapsePagewwblog">
          <i class="fas fa-fw fa-columns"></i>
          <span>Event</span>
        </a>
        <div id="collapsePagewwevent" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">


            <a class="collapse-item" href="{{route('addseminar')}}">New Event</a>
            <a class="collapse-item" href="{{route('seminarlist')}}">Upcoming Seminar List</a>

            <a class="collapse-item" href="{{route('workshoplist')}}">Upcoming Workshop List</a>
            <a class="collapse-item" href="{{route('eventsdone')}}">Complete Event List</a>

          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#partner" aria-expanded="true"
          aria-controls="collapsePagewwblog">
          <i class="fas fa-fw fa-columns"></i>
          <span>Partner</span>
        </a>
        <div id="partner" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('partner.create')}}">Partner Create</a>
            <a class="collapse-item" href="{{route('partner.list')}}">Partner List</a>

          </div>
        </div>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapses12213" aria-expanded="true"
             aria-controls="collapse">
              <i class="fab fa-fw fa-wpforms"></i>
              <span>Social Link</span>
          </a>
          <div id="collapses12213" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">

                  <a class="collapse-item" href="{{route('newlink')}}">Add new </a>
                  <a class="collapse-item" href="{{route('sociallist')}}">Social Link List </a>
              </div>
          </div>
      </li>

      @php
          $count = \App\Models\Contact_us::where('status','unseen')->count();
          @endphp

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contact_form" aria-expanded="true"
             aria-controls="collapse">
              <i class="fab fa-fw fa-wpforms"></i>
              <span>Message ({{$count}})</span>
          </a>
          <div id="contact_form" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="{{route('contact.list')}}">Index ({{$count}})</a>
                  <a class="collapse-item" href="{{route('contact.seen')}}">Seen Message</a>
              </div>
          </div>
      </li>

{{--      <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesmenu" aria-expanded="true"--}}
{{--          aria-controls="collapse">--}}
{{--          <i class="fab fa-fw fa-wpforms"></i>--}}
{{--          <span>Menu</span>--}}
{{--        </a>--}}
{{--        <div id="collapsesmenu" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">--}}
{{--          <div class="bg-white py-2 collapse-inner rounded">--}}

{{--            <a class="collapse-item" href="{{route('menu.index')}}">Menu</a>--}}
{{--            <a class="collapse-item" href="{{route('submenu.index')}}">Sub-Menu</a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </li>--}}

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesmenu" aria-expanded="true"
            aria-controls="collapse">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Reviews</span>
          </a>
          <div id="collapsesmenu" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{route('google.facebook.review')}}">Google & Facebook Reviews</a>
            </div>
          </div>
        </li>




      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesmenufacility" aria-expanded="true"
          aria-controls="collapse">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Facility & Why Us</span>
        </a>
        <div id="collapsesmenufacility" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

          <h6 class="collapse-header">Facilities and Why us</h6>
            <a class="collapse-item" href="{{route('facilities')}}">Facilities</a>
            <a class="collapse-item" href="{{route('why_us')}}">Why Us</a>
          </div>
        </div>
      </li>




      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesmenuseo" aria-expanded="true"
          aria-controls="collapse">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>SEO Tool</span>
        </a>
        <div id="collapsesmenuseo" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="{{route('analytic')}}">Google Analytics</a>
            <a class="collapse-item" href="{{route('metakey')}}">Meta Keyword</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesmenuseoextra" aria-expanded="true"
          aria-controls="collapse">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Extra</span>
        </a>
        <div id="collapsesmenuseoextra" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
{{--          <a class="collapse-item" href="{{route('pagetitle')}}">Page Titles</a>--}}
          <a class="collapse-item" href="{{route('logo')}}">Logo</a>
          <a class="collapse-item" href="{{route('acoupon')}}">Coupon</a>
            <h6 class="collapse-header">Sister Concern</h6>
            <a class="collapse-item" href="{{route('sisterconcern')}}">Our Sister Concern</a>
            <a class="collapse-item" href="{{route('addsister')}}">Add new</a>
              <h6 class="collapse-header">Career Counselling</h6>
              <a class="collapse-item" href="{{route('career-counseling')}}">Career Counselling Image</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesmenuseoedown" aria-expanded="true"
          aria-controls="collapse">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Download Students List</span>
        </a>
        <div id="collapsesmenuseoedown" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6>All</h6>
          <a class="collapse-item" href="{{route('excel')}}">Excel</a>
          <a class="collapse-item" href="{{route('csv')}}">CSV</a>
          <h6>Running</h6>
          <a class="collapse-item" href="{{route('rexcel')}}">Excel</a>
          <a class="collapse-item" href="{{route('rcsv')}}">CSV</a>
          <h6>Past</h6>
          <a class="collapse-item" href="{{route('pexcel')}}">Excel</a>
          <a class="collapse-item" href="{{route('pcsv')}}">CSV</a>

          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    @endif
