@extends('admin.master')
@section('content')
<div class="container">
  <div class="form-inner">
    <center>
    <div class="modal-body">
      <form action="{{route('metakeyup',['id'=>$metakey->id])}}" method="POST" role="form" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                    <label for="name">Keywords:</label>
                    <input name="metakey"  value="{{$metakey->keyword}}" class="form-control" id="name" type="text" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            
      </form>
      </div>
      </center>
    </div>
</div>
@endsection