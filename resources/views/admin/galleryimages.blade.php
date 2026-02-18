@extends('admin.master')

@section('content')
{{--<div class="container">--}}
{{--    @if(Session::has('message'))--}}
{{--        <p class="alert alert-success">{{ Session::get('message') }}</p>--}}
{{--    @endif--}}


{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--@if(auth()->user()->status=='active')--}}



{{--<div class="row ml-2 text-center">--}}
{{--@foreach($galleries as $gallery)--}}
{{--<div class="col-lg-3">--}}
{{--<div><img style="width: 250px; height:180px" src="{{url('public/uploads/gallery/'.$gallery->image)}}" alt="DMS"></div>--}}
{{--<div><a href="{{route('gallerydelete', ['id'=>$gallery->id])}}" class="btn btn-info btn-sm mt-2">Delete</a></div>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--</table>--}}

{{--@elseif(auth()->user()->status==='pending')--}}
{{--<center>--}}
{{--<h1> Your request is pending</h1>--}}
{{--</center>--}}
{{--@else--}}
{{--<center>--}}
{{--<h1> You are blocked by Super Admin</h1>--}}
{{--</center>--}}
{{--@endif--}}
{{--</div>--}}

<div class="container">
    @if(auth()->user()->status==='active')
        <div class="container">

            <h3>Gallery List</h3>

            @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Alt</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i = 1; @endphp
                    @forelse($galleries as $gallery)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$gallery->category}}</td>
                            <td><img style="width: 60px; height: 60px;" src="{{url('public/uploads/gallery/'.$gallery->image)}}" alt="{{$gallery->alt}}"></td>
                            <td>{{$gallery->alt}}</td>
                            <td>
                                <a href="{{route('galleryEdit', ['id'=>$gallery->id])}}" class="btn btn-info">Edit</a>
                                <a onclick="return confirm('Are you sure?')" href="{{route('gallerydelete', ['id'=>$gallery->id])}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="4">Gallery not available</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>


            @elseif(auth()->user()->status==='pending')

                <center>
                    <h1> Your request is pending</h1>
                </center>

            @else
                <center>
                    <h1> You are blocked by Super Admin</h1>
                </center>
        </div>
    @endif
</div>
@endsection
