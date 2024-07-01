@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{url('public/assets/plugins/summernote/summernote-bs4.min.css')}}">
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Edit Product </h1>
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
                        <!-- general form elements -->
                        <div class="card card-primary">

                            <form action="" method="post"  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="card-body">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label >Product Title <span style="color: red">*</span></label>
                                               <input type="text"
                                                      value="{{old('title',$product->title)}}"
                                                      class="form-control"
                                                      name="title"   required
                                                      placeholder="title ">
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label > SKU <span style="color: red">*</span></label>
                                               <input type="text"
                                                      value="{{old('sku',$product->sku)}}"
                                                      class="form-control"
                                                      name="sku"   required
                                                      placeholder="SKU ">
                                           </div>
                                       </div>

                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label > Category <span style="color: red">*</span></label>
                                               <select class="form-control" name="category_id" id="ChangeCategory" >
                                                   <option value=""> Select</option>
                                                   @foreach($getCategory as $category)
                                                       <option {{($product->category_id == $category->id)? 'selected':''}} value="{{$category->id}}"> {{$category->name}}</option>
                                                   @endforeach
                                               </select>
                                           </div>
                                       </div>

                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label >Sub Category <span style="color: red">*</span></label>
                                               <select class="form-control" name="sub_category_id" id="getSubCategory" >
                                                   <option value=""> Select</option>
                                                   @foreach($getSubCategory as $subCategory)
                                                       <option {{($product->sub_category_id == $subCategory->id)? 'selected':''}} value="{{$subCategory->id}}"> {{$subCategory->name}}</option>
                                                   @endforeach
                                               </select>
                                           </div>
                                       </div>

                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label > Brand <span style="color: red">*</span></label>
                                               <select class="form-control" name="brand_id"  >
                                                   <option value=""> Select</option>
                                                   @foreach($getBrand as $brand)
                                                    
                                                       <option {{($product->brand_id == $brand->id) ? 'selected':''}} value="{{$brand->id}}"> {{$brand->name}}</option>
                                                   @endforeach
                                               </select>
                                           </div>
                                       </div>



                                   </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Color  <span style="color: red">*</span></label>
                                             @foreach($getColor as $color)
                                             
                                                    @php
                                                          $checked ='';
                                                      @endphp
                                                  @foreach ($product->getColor as $pcolor )
                                                    @if ($pcolor->color_id == $color->id)

                                                      @php
                                                          $checked ='checked';
                                                      @endphp
                                                       @endif
                                                  @endforeach
                                                <div>
                                                    <label> <input {{$checked}} type="checkbox" name="color_id[]"  value="{{$color->id}}"  > {{$color->name}}
                                                    </label>

                                                </div>
                                             @endforeach


                                        </div>
                                    </div>



                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label >Price (dh)<span style="color: red">*</span></label>
                                                <input type="text"
                                                      value="{{$product->price}} "
                                                       class="form-control"
                                                       name="price"   required
                                                       placeholder="Price ">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label >Old Price (dh)<span style="color: red">*</span></label>
                                                <input type="text"
                                                value="{{$product->old_price}} "
                                                       class="form-control"
                                                       name="old_price"   required
                                                       placeholder=" Old Price ">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label >Size <span style="color: red">*</span></label>
                                                <div>
                                                   <table class="table table-striped">
                                                     <thead>
                                                     <tr>
                                                         <th>Name</th>
                                                         <th>Price (dh)</th>
                                                         <th> Action</th>
                                                     </tr>
                                                     </thead>
                                                       <tbody id="AppendSize">
                                                        @php
                                                            $i_s = 1;
                                                        @endphp
                                                        @foreach ($product->getSize as $size)
                                                        <tr id="DeleteSize{{$i_s}}">
                                                           <td>
                                                               <input  type="text " value="{{ $size->name}}"  name="size[{{$i_s}}][name]" class="form-control"  >
                                                           </td>
                                                           <td>
                                                               <input  type="text " value="{{$size->price}}"  name="size[{{$i_s}}][price]"class="form-control"  >
                                                           </td>
                                                           <td style="width: 100px">
                                                               <button type="button" class="btn btn-danger btn-sm DeleteSize" >Delete</button>

                                                           </td>
                                                       </tr>
                                                       @php
                                                            $i_s ++;
                                                        @endphp
                                                        @endforeach
                                                      



                                                       </tbody >
                                                   </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    <hr>
                    <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                         <label >Image</label>
                        <input type="file" name="image[]" class="form-control" multiple accept="image/*"  style="padding:5px;" >
                            </div>
                        </div>
                       </div>
                       @if (!empty($product->getImage->count()))
                       <div class="row" id="sortable">
                        @foreach ($product->getImage as $image )
                        @if (!empty($image->getLogo()))
                        <div class="col-md-1 sortable_image" id="{{$image->id}}" style="text-align: center ;"  >
                         <img  style=" width:100% ; height:150px ;" src=" {{ $image->getLogo()}}" alt="" >
                         <a  onclick="return confirm('do you want to delete?') " href="{{url('admin/product/image_delete/'.$image->id)}}"  style="margin-top: 10px;" class="btn btn-danger btn-sm">Delete</a>
                       </div>
                        @endif
                           
                         @endforeach
                          </div>
                       @endif

<hr>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label >short description <span style="color: red">*</span></label>
                                               <textarea name="short_description"
                                               class="form-control"
                                                placeholder="Short Description"
                                               >
                                                        {{$product->short_description}} 
                                               </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label >description <span style="color: red">*</span></label>
                                                <textarea name="description"
                                                          class="form-control editor"
                                                          placeholder="Description"
                                                >
                                                {{$product->description}} 
                                               </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label >Additional Information  <span style="color: red">*</span></label>
                                                <textarea name="additional_information"
                                                          class="form-control editor "
                                                          placeholder="additional information  "
                                                >
                                                {{$product->additional_information}} 
                                               </textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label >Shipping Returns  <span style="color: red">*</span></label>
                                                <textarea name="shipping_returns"
                                                          class="form-control editor"
                                                          placeholder="Shipping Returns  "
                                                >
                                                {{$product->shipping_returns}} 
                                               </textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-12">

                                    <div class="form-group">
                                        <label >Status <span style="color: red">*</span></label>
                                        <select class="form-control" name="status" required>

                                            <option value="0" {{( $product->status == 0) ? 'selected' : '' }}>Active</option>
                                            <option value="1"  {{ ($product->status == 1) ? 'selected' : '' }}>Inactive</option>
                                        </select>

                                    </div>
                                        </div>
                                    </div>








                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">update</button>
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
    <script src="{{url('public/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{url('public/assets/sortable/jquery-ui.js')}}"></script>
  {{-- <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>--}}
{{--<script src="{{url('public/assets/dist/js/adminlte.js')}}"></script>--}}
    <script type="text/javascript">
       $(document).ready(function() {
    $("#sortable").sortable({
        update: function(event, ui) {
            var photo_id = new Array();
            $('.sortable_image').each(function() {
                var id = $(this).attr('id');
                photo_id.push(id);
            });

            // AJAX call inside the update callback
            $.ajax({
                type: "POST",
                url: "{{url('admin/product_image_sortable')}}",
                data: {
                    "photo_id": photo_id,
                    "_token": "{{csrf_token()}}"
                },
                dataType: "json",
                success: function(data) {
                    // Handle success
                },
                error: function(data) {
                    // Handle error
                }
            });
        }
    });
});






          $('.editor').summernote(
              {
                  height:200
              }
        );







    var i =101;
              $('body').delegate('.AddSize','click',function (){
              var html = '<tr id="DeleteSize'+i+'" > \n\
                    <td>\n\
                        <input type="text"  name="size['+i+'][name]" class="form-control">\n\
                    </td>\n\
                    <td>\n\
                        <input type="text"  name="size['+i+'][price]" class="form-control">\n\
                    </td>\n\
                    <td>\n\
                        <button type="button" class="btn btn-danger btn-sm DeleteSize" id="'+i+'">Delete</button>\n\
                    </td>\n\
                </tr>';
              i++;
                $('#AppendSize').append(html);
              //$('table tbody').append(html);
          });
            $('body').delegate('.DeleteSize','click',function (){
                var id =$(this).attr('id');
               $('#DeleteSize'+id).remove();
            });
      $('body').delegate('#ChangeCategory','change',function (e){

             var id =$(this).val();
              $.ajax({
                  type:"POST",
                  url :"{{url('admin/get_sub_category')}}",
                  data : {
                      "id":id,
                      "_token":"{{csrf_token()}}"
                  },
                  dataType :"json",
                  success:function (data){
                     $('#getSubCategory').html(data.html);
                  },
                  error:function (data){

                  }
              });


          });
      </script>
@endsection
