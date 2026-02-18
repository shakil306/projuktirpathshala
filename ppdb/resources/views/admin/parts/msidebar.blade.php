  
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
        Messages
      </div>
      <li class="nav-item">
      @foreach($contact_uses as $contact)
        <a class="nav-link collapsed" href="{{route('messagedetails', ['id'=>$contact->id])}}">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>{{$contact->name}}</span>
        </a>
        @endforeach
      </li>

      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    @endif
