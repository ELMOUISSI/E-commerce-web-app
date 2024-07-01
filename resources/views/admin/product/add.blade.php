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
                        <h1>Add New Product </h1>
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
                                        <label >Product Title <span style="color: red">*</span></label>
                                        <input type="text"
                                               value="{{old('title')}}"
                                               class="form-control"
                                               name="title"   required
                                               placeholder="title ">
                                    </div>

                                    </div>

                                    <!-- /.card-body -->


                                    <hr>


                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                            </form>

                            <!-- /.card -->


                        </div>
                    </div>
                </div>
            </div>







        </section>
    </div>
@endsection
@section('script')

@endsection
