
@php
Use App\Models\Title;
$tit=Title::where('p_mark',"Mentor")->first();
@endphp


@php
use App\Models\Heading;
$heading=Heading::where('id',16)->first();
@endphp
@extends('master.master')
@section('content')

<div class="container">
    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif

    @Auth
@if(auth()->user()->status==='active')
<section>
     <div class="container py-5">
         <div class="row">
             <div class="col">
                <form action="{{route('mentoredit2',['id'=>$mentor->id])}}" method="POST" role="form" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                    <div class="form-group">
                        <label for="img">Select imagee:</label>
                          <input type="file" id="img" name="image" accept="image/*">
                      </div>
                    <div class="form-group">
                    <input name="name"  value="{{$mentor->name}}" class="form-control" id="name" type="text" required>
                    </div>
                    <!--<div class="form-group">-->
                        <!--<textarea name="description" class="form-control" id="editor" required>{{$mentor->description}}</textarea>-->
                    <!--<input type="string" name="description" value="{{$mentor->description}}" class="form-control" id="description" required>-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--<select name="department" id="department" class="form-control" required>-->

                    <!--    @foreach($departments as $department)-->
                    <!--      <option value="{{$department->name}}">{{$department->name}}</option>-->
                    <!--    @endforeach-->
                    <!--    </select>-->

                    <!--</div>-->
                    
                    <div class="form-group">
                    <input type="text" name="department" value="{{$mentor->department}}" class="form-control" id="department" required>
                    </div>
                    
                    <!--<div class="form-group">-->
                    <!--<input type="email" name="email" value="{{$mentor->email}}" class="form-control" id="email" required>-->
                    <!--</div>-->


                    <!--<div class="form-group">-->
                    <!--<input type="url" name="facebook" value="{{$mentor->facebook}}" class="form-control" id="facebook" required>-->
                    <!--</div>-->

                    <!--<div class="form-group">-->
                    <!--<input type="url" name="twitter" value="{{$mentor->twitter}}" class="form-control" id="twitter" required>-->
                    <!--</div>-->

                    <!--<div class="form-group">-->
                    <!--<input type="url" name="linkedin" value="{{$mentor->linkedin}}" class="form-control" id="linkedin" required >-->
                    <!--</div>-->
<center>
                    <button class="btn btn-primary" type="submit">Submit</button>
</center>

                  </form>
             </div>
         </div>
     </div>
 </section>
 @endif
 @endif

</div>

@endsection
