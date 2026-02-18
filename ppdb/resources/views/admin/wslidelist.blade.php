@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')
<div class="row ml-2 text-center">
@foreach($welcomeslides as $slider)
<div class="col-lg-3">
<div><img style="width: 250px; height:180px" src="{{url('public/uploads/welcome/'.$slider->image)}}" alt="{{$slider->alt}}"></div>
<div><a href="{{route('wsliderEdit', ['id'=>$slider->id])}}" class="btn btn-info btn-sm mt-2">Edit</a></div>
<div><a href="{{route('wsliderdelete', ['id'=>$slider->id])}}" class="btn btn-danger btn-sm mt-2">Delete</a></div>
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
