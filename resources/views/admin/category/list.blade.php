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
                    <div class="col-sm-6">
                        <h1>Category list</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right">
                        <a class="btn btn-primary " href="{{url('admin/category/add')}}"> Add New Category </a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        @include('admin.layouts._message')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">category List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th >#</th>
                                        <th>Name</th>
                                        <th>slug</th>
                                        <th>Meta Title</th>
                                        <th>Meta Description</th>
                                        <th>Meta Keywords</th>
                                        <th>Ceated By</th>
                                        <th >Status</th>
                                        <th>Ceated Date</th>
                                        <th >Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($getRecord as $value )

                                           <tr>
                                               <td>{{$value->id}}</td>
                                               <td>{{$value->name}}</td>
                                               <td>{{$value->slug}}</td>
                                               <td>{{$value->meta_title}}</td>
                                               <td>{{$value->meta_description}}</td>
                                               <td>{{$value->meta_keywords}}</td>
                                               <td>{{$value-> created_by_name}}</td>
                                               <td>{{($value->status ==0)?'Active':'Inactive'}}</td>

                                               <td>{{date('d-m-Y',strtotime($value-> created_at))}}</td>
                                               <td>
                                                   <a class="btn btn-primary " href="{{url('admin/category/edit/'.$value->id)}}">Edit</a>
                                                   <a class="btn btn-danger " href="{{url('admin/category/delete/'.$value->id)}}"> Delete </a>

                                               </td>
                                           </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('script')
    <script src="{{url('public/assets/dist/js/pages/dashboard3.js')}}"></script>
@endsection
