@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Edit Admin </h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">


                    <!-- Main content -->

                    <!-- left column -->
                    <div class="col-sm-12">
                        <!-- general form elements -->
                        <div class="card card-primary">

                            <form action="" method="post">
                                {{csrf_field()}}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label >Name</label>
                                        <input type="text"
                                               class="form-control"
                                               value="{{old('name',$getRecord->name)}}"
                                               name="name"
                                               placeholder="Enter name"   required
                                        >

                                    </div>

                                    <div class="form-group">
                                        <label >Email address</label>
                                        <input type="email"
                                               name="email"
                                               value="{{old('email',$getRecord->email)}}"
                                               class="form-control"   required
                                               placeholder="Enter email">
                                        <div style="color: darkred"> {{$errors->first('email')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label >Password</label>
                                        <input type="text"
                                               name="password"
                                               class="form-control"
                                               placeholder="Password">
                                        <p>do you want change password, please add</p>
                                    </div>

                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="form-control" name="status"   required>
                                            <option value="0" {{($getRecord->status ==0)?'selected':''}}> Active</option>
                                            <option value="1" {{($getRecord->status ==1)?'selected':''}}> inActive</option>
                                        </select>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->



                    </div>
                </div>
            </div>







        </section>

@endsection
@section('script')

@endsection
