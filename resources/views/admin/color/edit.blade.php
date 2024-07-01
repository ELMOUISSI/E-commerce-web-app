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
                        <h1>Edit Color </h1>
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
                                        <label >Color Name <span style="color: red">*</span></label>
                                        <input type="text"
                                               value="{{old('name',$getRecord->name)}}"
                                               class="form-control"
                                               name="name"   required
                                               placeholder="Color name">
                                    </div>


                                    <div class="form-group">
                                        <label >Code <span style="color: red">*</span></label>
                                        <input type="color"
                                               value="{{old('code',$getRecord->code)}}"
                                               class="form-control"
                                               name="code"   required
                                               placeholder="code Ex. 00000 ">

                                    </div>


                                    <div class="form-group">
                                        <label >Status <span style="color: red">*</span></label>
                                        <select class="form-control" name="status" required>

                                            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Active</option>
                                            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Inactive</option>
                                        </select>

                                    </div>

                                    <!-- /.card-body -->


                                    <hr>






                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
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
