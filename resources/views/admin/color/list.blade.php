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
                        <h1>Color list</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right">
                        <a class="btn btn-primary " href="{{url('admin/color/add')}}"> Add New Color </a>
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
                                <h3 class="card-title">color List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th >#</th>
                                        <th>Name</th>
                                        <th>Code</th>
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
                                            <td>{{$value->code}}</td>

                                            <td>{{$value-> created_by_name}}</td>
                                            <td>{{($value->status ==0)?'Active':'Inactive'}}</td>

                                            <td>{{date('d-m-Y',strtotime($value-> created_at))}}</td>
                                            <td>
                                                <a class="btn btn-primary " href="{{url('admin/color/edit/'.$value->id)}}">Edit</a>
                                                <a class="btn btn-danger " href="{{url('admin/color/delete/'.$value->id)}}"> Delete </a>

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
