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
                        <h1>Edit Brand </h1>
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
                                        <label >Brand  Name <span style="color: red">*</span></label>
                                        <input type="text"
                                               value="{{old('name',$getRecord->name)}}"
                                               class="form-control"
                                               name="name"   required
                                               placeholder="Brand  name">
                                    </div>


                                    <div class="form-group">
                                        <label >Slug <span style="color: red">*</span></label>
                                        <input type="text"
                                               value="{{old('slug',$getRecord->slug)}}"
                                               class="form-control"
                                               name="slug"   required
                                               placeholder="Slug Ex. URL">
                                        <div style="color: darkred"> {{$errors->first('slug')}}</div>
                                    </div>





                                    <div class="form-group">
                                        <label >Status <span style="color: red">*</span></label>
                                        <select class="form-control" name="status" required>

                                            <option value="0" {{ old('status',$getRecord->status) == 0 ? 'selected' : '' }}>Active</option>
                                            <option value="1" {{ old('status',$getRecord->status) == 1 ? 'selected' : '' }}>Inactive</option>
                                        </select>

                                    </div>

                                    <!-- /.card-body -->


                                    <hr>


                                    <div class="form-group">
                                        <label >Meta title <span style="color: red">*</span></label>
                                        <input type="text"
                                               value="{{old('meta_title',$getRecord->meta_title)}}"
                                               class="form-control"
                                               name="meta_title"   required
                                               placeholder="meta_title ">
                                    </div>


                                    <div class="form-group">
                                        <label >Meta Description</label>
                                        <textarea
                                            class="form-control"
                                            name="meta_description"
                                            placeholder="meta_description">{{old('meta_description',$getRecord->meta_description)}}</textarea>
                                    </div>


                                    <div class="form-group">
                                        <label >Meta Keywords</label>
                                        <input type="text"
                                               value="{{old('meta_keywords',$getRecord->meta_keywords)}}"
                                               class="form-control"
                                               name="meta_keywords"
                                               placeholder="meta_keywords ">
                                    </div>

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
