@extends('layouts.admin') 

@section('styles')
@endsection   

@section('content')  
      <div class="wrap__right">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12">
              <!-- Admin haeder start -->
              <div class="panel panel-default common">
                <div class="panel-heading">
                  <div class="admin__header">
                    <div class="row reorder-xs align-items-center">
                      <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="header__title">
                          <h3>Packages</h3>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Packages</p>
                        </div>
                      </div>
                      @include('includes.notification')
                    </div>   
                  </div>
                </div>
              </div>
              <!-- Admin haeder end -->
            </div>
          </div>
        
          @include('includes.form-error')
          @include('includes.form-success')
          <!-- Admin table start -->
          <div class="row">
            <div class="col-xl-12">
              <div class="table-wrap mb-30">
                <div class="table-responsive">
                  <table id="common-table" class="table table-striped table-hover common dt-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th width="300">Package Title</th>
                        <th width="200">Date</th>
                        <th>Cost</th>
                        <th>Location</th>
                        <th>Featured</th>
                        <th>Actions</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($packages as $package) 
                        <tr>
                          <td>{{$package->title}}</td>
                          <td>{{date('d M',strtotime($package->start_date))}} - {{date('d M',strtotime($package->return_date))}}</td>
                          <td>{{$sign->sign}}{{round(($package->cost_adult * $sign->value), 2)}}</td>
                          <td>{{$package->location}}</td>
                          <td>
                          <div class="btn-group orders dropdown show">
                              <a class="btn btn-{{$package->featured == 1 ? "green" : "danger"}} dropdown-toggle btn-xs table-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$package->featured == 1 ? "Showed" : "Not Showed"}}</a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{route('admin-package-featured',['id'=>$package->id,'status'=>1])}}">Show</a>
                                <a class="dropdown-item" href="{{route('admin-package-featured',['id'=>$package->id,'status'=>0])}}">Not Show</a>
                              </div>
                          </div>
                          </td>
                          <td>
                          <a href="{{route('admin-package-edit',$package->id)}}" class="btn btn-primary product-btn table-btn"><i class="fa fa-edit"></i> Edit</a>
                          <a style="cursor: pointer; background-color: #0165cb;" class="btn btn-info product-btn table-btn view-gallery" data-toggle="modal" data-target="#myModal"><input type="hidden" value="{{$package->id}}"><i class="fa fa-eye"></i> Gallery</a>
                          <a href="javascript:;" data-href="{{route('admin-package-delete',$package->id)}}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger product-btn table-btn"><i class="fa fa-trash"></i> Remove</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Admin table end -->
        </div>
      </div>

<!-- The Modal -->
<div class="modal fade" id="confirm-delete">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header text-center">
        <h4 class="modal-title w-100">Confirm Delete</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <p class="text-center">You are about to delete this Package. Everything will be deleted under this Package.</p>
            <p class="text-center">Do you want to proceed?</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger btn-ok">Delete</a>
      </div>

    </div>
  </div>
</div>

<!-- Gallry Modal -->
<div id="myModal" class="modal fade gallery" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100">Image Gallery</h4>
      </div>
      <div class="modal-body">
        <div class="gallery-btn-area text-center">
          <form  method="POST" enctype="multipart/form-data" id="form-gallery">
            {{ csrf_field() }}
            <input style="display: none;" type="file" accept="image/*" id="gallery" name="gallery[]" multiple/>
          <input type="hidden" name="package_id" value="" id="pid">
          </form>          
            <a class="btn btn-info gallery-btn mr-5 gallery-btn-upload" id="prod_gallery"><i class="fa fa-download"></i> Upload Images</a>
            <a class="btn btn-info gallery-btn mr-5 gallery-btn-upload done" data-dismiss="modal"><i class="fa fa-check" ></i> Done</a>
            <p style="font-size: 11px;">You can upload multiple images.</p>
        </div>

        <div class="gallery-wrap" id="gallery-wrap1">
                <div class="row">
                </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection


@section('scripts')
    <script type="text/javascript">
      $( document ).ready(function() {
        $(".btn-area").append('<div class="col-sm-4 text-right">'+
          '<a href="{{route('admin-package-create')}}" class="add-btn">'+
          '<i class="fas fa-plus"></i> Add New Package</a>'+
          '</div>');
      });


// Gallery Section

    $(document).on("click", ".view-gallery" , function(){
        var pid = $(this).parent().find('input[type=hidden]').val();
        $('#pid').val(pid);
        $('.gallery-wrap .row').html('');
            $.ajax({
                    type: "GET",
                    url:mainurl+'/json/gallery',
                    data:{id:pid},
                    success:function(data){
                      if(data[0] == 0)
                      {
      $('.gallery-wrap .row').css('display','block');
      $('.gallery-wrap .row').html('<h3 class="text-center">No Images Found.</h3>');
     }
                     
                      else {
        $('.gallery-wrap .row').css('display','flex');
        $('.gallery-wrap .row').find('h3').remove();      
                          var arr = $.map(data[1], function(el) {
                          return el });
                          for(var k in arr)
                          {
                                $('.gallery-wrap .row').append('<div class="col-sm-4">'+
                                  '<div class="gallery__img">'+
                                  '<img src="'+imgpath+'/galleries/'+arr[k]['photo']+'" alt="gallery image">'+
                                  '<div class="gallery-close">'+
                                  '<input type="hidden" value="'+arr[k]['id']+'">'+
                                  '<i class="fa fa-times"></i>'+
                                  '</div>'+
                                  '</div>'+
                                  '</div>');
                          }                         
                       }
 
                    }
                  });
      });
    
  $(document).on('click', '#prod_gallery' ,function() {
    $('#gallery').click();
  });
  
  $("#gallery").on( "change", function() {
    var pid = $("#pid").val();
    var total_file = document.getElementById("gallery").files.length;
    $("#form-gallery").submit();  
   });


  $(document).on('submit', '#form-gallery' ,function() {
  $.ajax({
   url:mainurl+'/json/addgallery',
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    if(data != 0)
    {
                          var arr = $.map(data, function(el) {
                          return el });
                          for(var k in arr)
                          {
        $('.gallery-wrap .row').css('display','flex');
        $('.gallery-wrap .row').find('h3').remove();
        $('.gallery-wrap .row').append('<div class="col-sm-4">'+
                                  '<div class="gallery__img">'+
                                  '<img src="'+imgpath+'/galleries/'+arr[k]['photo']+'" alt="gallery image">'+
                                  '<div class="gallery-close">'+
                                  '<input type="hidden" value="'+data[k]['id']+'">'+
                                  '<i class="fa fa-times"></i>'+
                                  '</div>'+
                                  '</div>'+
                                  '</div>');
                          }          
    }
                     
                       }

  });
  return false;
 }); 

    $(document).on('click', '.gallery-close' ,function() {
    var pid = $(this).find('input[type=hidden]').val();
    $(this).parent().parent().remove();
              $.ajax({
                    type: "GET",
                    url:mainurl+'/json/removegallery',
                    data:{id:pid}
                  });
  });


//  Gallery Section Ends --}}

    </script>
@endsection    