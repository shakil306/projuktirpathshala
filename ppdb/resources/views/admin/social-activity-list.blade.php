@extends('admin.master')

@section('content')

    <div class="container">
        @if(auth()->user()->status==='active')
            <div class="container">

                <h3>Social activity List</h3>

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
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1; @endphp
                        @forelse($social_activities as $social_activity)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$social_activity->title}}</td>
                                <td>{{Str::limit($social_activity->description, 180)}}</td>
                                <td><img style="width: 60px; height: 60px;" src="{{url('public/uploads/social/'.$social_activity->image)}}" alt="{{$social_activity->name}}"></td>
                                <td>
                                    <a onclick="return confirm('Are you sure?')" href="{{route('social.activity.delete', ['id'=>$social_activity->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="4">Social Activity not available</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {!! $social_activities->links() !!}
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
