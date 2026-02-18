@extends('admin.master')

@section('content')

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
    <h3 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Edit {{$titles->page_name}} Menu/Title</h3>
<section>
     <div class="container py-5">
         <div class="row">
             <div class="col">
                <form action="{{route('titleedit2',['id'=>$titles->id])}}" method="POST" role="form" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Page Name</label>
                                <input class="form-control" name="page_name" value="{{$titles->page_name}}" type="text" placeholder="Page Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input class="form-control" name="title" value="{{$titles->text}}" type="string" placeholder="Title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input class="form-control" name="description" value="{{$titles->description}}" placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input class="form-control" name="keyword" value="{{$titles->keyword}}" placeholder="Keywords">
                            </div>

                          </div>
                          <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Update</button>
                          </div>
                  </form>
             </div>
         </div>
     </div>
 </section>
 @elseif(auth()->user()->status==='pending')
<center>
<h1> Your request is pending</h1>
</center>
@else
<center>
<h1> You are blocked by Super Admin</h1>
</center>
@endif

@endsection
