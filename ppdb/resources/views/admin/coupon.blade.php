@extends('admin.master')
@section('content')
<div class="container">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-color">Coupon</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Code</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach($coupons as $coupon)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$coupon->code}}</td>
                                                <td>{{$coupon->status}}</td>
                                                <td>{{$coupon->amount}}</td>
                                                <td><a href="{{route('dcoupon', ['id'=>$coupon->id])}}" class="action-btn" data-toggle="modal" data-target="#exampleModal{{$coupon->id}}"><i class="far fa-edit"></i></a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="{{route('dcoupon', ['id'=>$coupon->id])}}" type="submit" id="del" onclick="myFunction()" class="action-btn"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>



                                            <div class="modal fade" id="exampleModal{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Update Coupon</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="{{route('ucoupon', ['id'=>$coupon->id])}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label>Edit Code</label>
                                                                    <input type="text" name="code" class="form-control" placeholder="Edit Code" value="{{$coupon->code}}" required>
                                                                </div>
                                                                <label for="sub_link">Amount</label>
                                                                <input type="string" name="amount" value="{{$coupon->amount}}" class="form-controller" required>



                                                                <div class="form-group">
                                                                    <p>Edit Status:</p>
                                                                    <input type="radio" id="active" name="status" value="active">
                                                                    <label for="active">Active</label><br>
                                                                    <input type="radio" id="inactive" name="status" value="Inactive">
                                                                    <label for="inactive">Inactive</label><br>
                                                                </div>
                                                                <div class="modal-image text-center">
                                                                    <img src="{{asset('backend/assets/img-icon/logo.png')}}" class="img-fluid">
                                                                </div>
                                                                <div class="modal-btn text-center">
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="text-color">Add Coupon</h5>
                                </div>
                                <form action="{{route('addcoupon')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Edit Code</label>
                                        <input type="text" name="code" class="form-control" placeholder="Edit Code" required>
                                    </div>
                                    <label for="sub_link">Amount</label>
                                    <input type="string" name="amount" class="form-controller" required>



                                    <div class="form-group">
                                        <p>Edit Status:</p>
                                        <input type="radio" id="active" name="status">
                                        <label for="active">Active</label><br>
                                        <input type="radio" id="inactive" name="status" value="Inactive">
                                        <label for="inactive">Inactive</label><br>
                                    </div>

                                    <div class="modal-btn text-center">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {

            if (confirm("Are you sure to delete this item ?")) {
                return true;
            } else {
                return false;
            }
            document.getElementById("del");
        }
    </script>


</div>
@endsection