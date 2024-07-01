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
                        <h1>Add New Sub Category </h1>
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
                                        <label  >Category Name <span style="color: red">*</span></label>
                                        <select class="form-control"  name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($getCategory as $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Sub-Category Name <span style="color: red">*</span></label>
                                        <input type="text"
                                               value="{{old('name')}}"
                                               class="form-control"
                                               name="name"   required
                                               placeholder="Sub Category name">
                                    </div>

                                    <div class="form-group">
                                        <label >Slug <span style="color: red">*</span></label>
                                        <input type="text"
                                               value="{{old('slug')}}"
                                               class="form-control"
                                               name="slug"   required
                                               placeholder="Slug Ex. URL">
                                        <div style="color: darkred"> {{$errors->first('slug')}}</div>
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


                                    <div class="form-group">
                                        <label >Meta title <span style="color: red">*</span></label>
                                        <input type="text"
                                               value="{{old('meta_title')}}"
                                               class="form-control"
                                               name="meta_title"   required
                                               placeholder="meta_title ">
                                    </div>


                                    <div class="form-group">
                                        <label >Meta Description</label>
                                        <textarea
                                            class="form-control"
                                            name="meta_description"
                                            placeholder="meta_description">{{old('meta_description')}}</textarea>
                                    </div>


                                    <div class="form-group">
                                        <label >Meta Keywords</label>
                                        <input type="text"
                                               value="{{old('meta_keywords')}}"
                                               class="form-control"
                                               name="meta_keywords"
                                               placeholder="meta_keywords ">
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
