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

            <div class="pending" style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">
                <h1 >All Pages/Titles</h1>

                <div class="search-container" style="
  float: right; margin-top: -44px;
    margin-right: 21px;

">
                    <form action="{{ route('pages.search') }}" method="GET">
                        <input type="text" placeholder="Search Pages" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

            </div>
        <table class="table display" id="dataTable">
            <thead>
            <tr>
                <th scope="col">S/L</th>
                <th scope="col">Page Name</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Keywords</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                {{-- @php unset($titles[17]); @endphp --}}
            @foreach($titles as $key=>$single_data)
                <tr>
                    <td scope="row">{{$key+1}}</td>

                    <td>{{$single_data['page_name']}}</td>

                    <td>{{$single_data['text']}}</td>
                    <td>{{Str::limit($single_data['description'],100)}}</td>
                    <td>{{Str::limit($single_data['keyword'],100)}}</td>

                    <td>
                        <a href="{{route('titleedit', ['id'=>$single_data['id']])}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>


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
