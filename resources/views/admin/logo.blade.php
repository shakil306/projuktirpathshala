@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')
<div class="row ml-2 text-center">
@foreach($logo as $logo)
<div class="col-lg-3">
<div><img style="width: 250px; height:180px" src="{{url('public/uploads/logo/'.$logo->logo)}}" alt="DMS"></div>
<div><a href="{{route('logoedit', ['id'=>$logo->id])}}" class="btn btn-info btn-sm mt-2">Edit</a></div>
</div>
@endforeach
</div>

</table>
@elseif(auth()->user()->status==='pending')
<center>
<h1> Your request is pending</h1>
</center>
@else
<center>
<h1> You are blocked by Super Admin</h1>
</center>
@endif
</div>
@endsection
