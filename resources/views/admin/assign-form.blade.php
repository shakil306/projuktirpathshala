@extends('admin.master')

@section('content')
<div class="container">
    @if(auth()->user()->status==='active')

    <h3>Assign New Mentor</h3>

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

                    <form action="{{route('assign-mentor2')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Mentor Name:</label>
                        <input name="name"  placeholder="Enter Mentor Name" class="form-control" id="name" type="text" required>

                        <!-- <label for="description"> Description</label>-->
                        <!--<textarea type="string" name="description" class="form-control" id="description" required></textarea>-->

                        <!--<label for="department">Select Department:</label>-->
                        <!--<select name="department" id="department" class="form-control" required>-->

                        <!--    @foreach($departments as $department)-->
                        <!--      <option value="{{$department->name}}">{{$department->name}}</option>-->
                        <!--    @endforeach-->
                        <!--</select>-->
                        
                         <label for="department">Designation</label>
                        <input type="text" name="department" class="form-control" id="department" required>
                        
                        <!-- <label for="email">Email</label>-->
                        <!--<input type="email" name="email" class="form-control" id="email" required>-->



                        <!--<label for="facebook">Facebook Link</label>-->
                        <!--<input type="url" name="facebook" class="form-control" id="facebook" required>-->

                        <!--<label for="twitter">Twitter Link</label>-->
                        <!--<input type="url" name="twitter" class="form-control" id="twitter" required>-->

                        <!--<label for="linkedin">Linkedin Link</label>-->
                        <!--<input type="url" name="linkedin" class="form-control" id="linkedin" required >-->

        <div class="form-group">
            <input name="profile_image" type="file" class="form-control" required>
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
