@extends('admin.master')

@section('content')

    <div class="container">
        @if(auth()->user()->status==='active')
            <div class="container">

                <h3>Partner List</h3>

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
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1; @endphp
                        @forelse($partners as $partner)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$partner->name}}</td>
                            <td><img style="width: 60px; height: 60px;" src="{{url('public/uploads/partner/'.$partner->image)}}" alt="{{$partner->name}}"></td>
                            <td>
                                <a onclick="return confirm('Are you sure?')" href="{{route('partner.delete', ['id'=>$partner->id])}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="4">Partner not available</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {!! $partners->links() !!}
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
