@extends('admin.master')

@section('content')

<div class="container">
    @if(auth()->user()->status==='active')

    <h3>Edit Information</h3>

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

                     <form action="{{route('mentoredit2',['id'=>$mentor->id])}}" method="POST" role="form" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="name">Mentor Name:</label>
                            <input name="name"  value="{{$mentor->name}}" class="form-control" id="name" type="text" required>
    
                             <label for="department">Designation</label>
                            <input type="text" name="department" value="{{$mentor->department}}" class="form-control" id="department" required>
    
    
                            <!--<label for="facebook">Facebook Link</label>-->
                            <!--<input type="url" name="facebook" value="{{$mentor->facebook}}" class="form-control" id="facebook" required>-->
    
                            <!--<label for="twitter">Twitter Link</label>-->
                            <!--<input type="url" name="twitter" value="{{$mentor->twitter}}" class="form-control" id="twitter" required>-->
    
                            <!--<label for="linkedin">Linkedin Link</label>-->
                            <!--<input type="url" name="linkedin" value="{{$mentor->linkedin}}" class="form-control" id="linkedin" required >-->
    
                            <div class="form-group">
                                <input name="image" type="file" class="form-control" >
                            </div>
                    
                        <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>



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
