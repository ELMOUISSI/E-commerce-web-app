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
                        <h1>Add New Admin </h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">


                                        <div class="col-md-12">
                                            <!-- general form elements -->
                                            <div class="card card-primary">

                                                <form action="" method="post">
                                                    {{csrf_field()}}
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label >Name</label>
                                                            <input type="text"
                                                                   value="{{old('name')}}"
                                                                   class="form-control"
                                                                   name="name"   required
                                                                   placeholder="Enter name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label >Email address</label>
                                                            <input type="email"
                                                                   value="{{old('email')}}"
                                                                   name="email"
                                                                   class="form-control"   required
                                                                   placeholder="Enter email">
                                                            <div style="color: darkred"> {{$errors->first('email')}}</div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Password</label>
                                                            <input type="password"

                                                                   name="password"
                                                                   class="form-control"   required
                                                                   placeholder="Password">
                                                        </div>

                                                        <div class="form-group">
                                                            <label >Status</label>
                                                            <select class="form-control" name="status"   required >
                                                                <option>op</option>
                                                                <option   value="{{(old('status')==0)?'selected':''}}"> Active</option>
                                                                <option  value="{{(old('status')==1)?'selected':''}}"> inActive</option>
                                                            </select>
                                                        </div>
                                                    <!-- /.card-body -->
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
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
