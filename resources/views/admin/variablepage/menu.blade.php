@extends('admin.master')
@section('content')

<div class="wrapper">
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="content-header">
                    <h6 class="m-0 text-color">Home > Menu > <span>Menu Management</span></h6>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-color">Menu</h5>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i = 1)
                                        @foreach($menu as $all_menu)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$all_menu->menu_name}}</td>
                                            <td>{{$all_menu->menu_status}}</td>
                                            <td><a href="{{url('/admin/menu/update',$all_menu->id)}}" class="action-btn" data-toggle="modal" data-target="#exampleModal{{$all_menu->id}}"><i class="far fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                <a href="{{url('/admin/menu/destroy',$all_menu->id)}}" class="action-btn" data-toggle="modal" data-target="#exampleModaldelete{{$all_menu->id}}"><i class="fas fa-times"></i></a>



                                                <div class="modal fade" id="exampleModal{{$all_menu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <form action="{{ url('/admin/menu/update', $all_menu->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label>Edit Menu Name</label>
                                                                        <input type="text" name="menu_name" class="form-control" placeholder="Edit Menu Name" value="{{$all_menu->menu_name}}">
                                                                    </div>
                                                                    <label for="sub_link">Link:</label>
                                                                    <input type="url" name="menu_link" value="{{$all_menu->menu_link}}" class="form-controller" required>



                                                                    <div class="form-group">
                                                                        <p>Edit Status:</p>
                                                                        <input type="radio" id="active" name="menu_status" value="Active">
                                                                        <label for="active">Active</label><br>
                                                                        <input type="radio" id="inactive" name="menu_status" value="Inactive">
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



                                                <div class="modal fade" id="exampleModaldelete{{$all_menu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete your data?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <form action="{{url('/admin/menu/destroy',$all_menu->id)}}" method="POST" enctype="multipart/form-data">
                                                                    @csrf

                                                                    <div class="modal-btn text-center">
                                                                        <button type="submit" class="btn btn-primary">Confirm</button>
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
                                <h5 class="text-color">Add Menu</h5>
                            </div>
                            <form action="{{url('/admin/menu/store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="menu_name" name="menu_name" placeholder="Enter Menu Name" required>
                                    </div><br>

                                    <label for="sub_link">Link:</label>
                                    <input type="url" name="menu_link" class="form-controller" required>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="radio" id="active" name="menu_status" value="Active">
                                            <label for="active">Active</label>
                                            <input type="radio" id="inactive" name="menu_status" value="Inactive">
                                            <label for="inactive">Inactive</label><br><br>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary btn-custom">Save</button>
                                    </div>
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


@endsection