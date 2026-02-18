<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


@php
use App\Models\Consult;
$consults=Consult::where('status',"unseen")->get();
$count_cs=0;
@endphp

@foreach($consults as $consult)
@php
$count_cs++;
@endphp
@endforeach


          @php
use App\Models\Contact_us;
$contacts=Contact_us::where('status','unseen')->get();
$count_ms=0;
@endphp

@foreach($contacts as $contact)
@php
$count_ms++;
@endphp
@endforeach

          <ul class="navbar-nav ml-auto">

          @if(auth()->user()->status==='active')
          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="ml-2 d-none d-lg-inline text-white small">Consult({{$count_cs}})</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                @foreach($consults as $consult)

                <a href="{{route('consultview', ['id'=>$consult->id])}}" class="dropdown-item">{{$consult->name}}</a>
                @endforeach
                <a href="{{route('all_consult')}}"> See All</a>
              </div>
            </li>


          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="ml-2 d-none d-lg-inline text-white small">Message({{$count_ms}})</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                @foreach($contacts as $contact)

                <a href="{{route('admin.contact.show', ['id'=>$contact->id])}}" class="dropdown-item">{{$contact->name}}</a>
                @endforeach
                <a style="margin-left: 15px;" href="{{route('contact.seen')}}"> See All</a>
              </div>
            </li>
            @endif
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
{{--                <img class="img-profile rounded-circle" src="{{url('public/uploads/admin/'.Auth()->user()->profile_image)}}" style="max-width: 60px">--}}
                  <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle" style="width:40px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
              </a>

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('editprofile')}}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profile
                </a>
                <a class="dropdown-item" href="{{route('change_password')}}">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                 Change Password
                </a>


                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">

                  </i>
                                        {{ __('Logout') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                </a>
              </div>
            </li>
          </ul>
        </nav>



