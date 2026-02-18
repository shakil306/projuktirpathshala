@extends('admin.master')

@section('content')
    <div class="container">

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

        @if(auth()->user()->status==='active')
            <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Seen Message</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($contacts as $key=>$single_data)
                    <tr>
                        <th scope="row">{{$key+1}}</th>

                        <td>{{Str::limit($single_data->name,30)}}</td>
                        <td>{{Str::limit($single_data->email,30)}}</td>
                        <td>{{Str::limit($single_data->subject,30)}}</td>
                        <td>{{Str::limit($single_data->phone,30)}}</td>
                        <td>{{Str::limit($single_data->message,30)}}</td>
                        <td>
                            <a href="{{route('admin.contact.show', ['id'=>$single_data->id])}}" class="btn btn-info">View</a>
                            <a onclick="return confirm('Are you sure?')" href="{{route('admin.contact.delete', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $contacts->links() !!}

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
