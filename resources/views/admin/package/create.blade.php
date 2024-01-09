@extends('layouts.admin')

@section('styles')

  <link rel="stylesheet" href="{{ asset('assets/admin/css/datepicker.css')}}" type="text/css" />

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
                          <div class="header__btn d-flex">
                            <h3>Add Package</h3>
                            <a href="{{ route('admin-package-index') }}" class="add-btn back"><i class="fas fa-arrow-left"></i> Back</a>
                          </div>
                          <p>Dashboard <i class="fa fa-angle-right"></i> Packages <i class="fa fa-angle-right"></i> Add</p>
                        </div>
                      </div>

                      @include('includes.notification')

                    </div>   
                  </div>
                </div>

                <div class="panel-body common pt-30 pb-30 pl-10 pr-10">
                  @include('includes.form-error')
                  @include('includes.form-success')
                  <div class="row justify-content-center">
                    <div class="col-xl-10">
                      <div class="top-banner-wrap">
                        <div class="common-form">
                          <form id="form1" action="{{ route('admin-package-store') }}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}
                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label">Title * <span>(In Any Language)</span></label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="name">Sub Title *<span>(In Any Language)</span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="name" name="name" placeholder="Sub Title" type="text" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="image">Current Feature Photo *<span></span>
                                </label>
                                <div class="col-sm-7">
                                    <div class="logo"><img id="adminimg" src="" alt="Image"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="number"> Choose Feature Photo *<span></span>
                                </label>
                                <div class="col-sm-7">
                                  <div class="top-banner-btn text-center">
                                    <input type="file" id="uploadFile" class="hidden" name="photo" value="">
                                    <button type="button" class="form-control uploadTrigger"><i class="fas fa-upload"></i> Upload Photo</button>
                                    <span>Prefered Size: (600x600) or Square Sized Image</span>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="profile_photo">Gallery Images *<span></span></label>
                                <div class="col-sm-7">
                                  <input style="display: none;" type="file" accept="image/*" id="uploadgallery1" name="gallery[]" multiple="">
                                <div class="margin-top">
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="fa fa-plus"></i> Set Gallery</a>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="description">Package Description *<span></span>
                                </label>
                                <div class="col-sm-7">
                                <textarea class="form-control nic-edit" cols="30" rows="5" name="description" id="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="start_date">Departure Date *<span></span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="start_date" name="start_date" placeholder="Departure Date" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="return_date">Return Date *<span></span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="return_date" name="return_date" placeholder="Return Date" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="location">Tour Location *<span></span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="location" name="location" placeholder="Tour Location" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="cost_adult">Adult Cost *<span>(In {{$sign->name}})</span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="cost_adult" name="cost_adult" placeholder="Adult Cost" type="number" step=".01">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="cost_child">Child Cost *<span>(In {{$sign->name}})</span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="cost_child" name="cost_child" placeholder="Child Cost" type="number" step=".01">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="cost_previous">Previous Cost<span>(Optional In {{$sign->name}})</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="cost_previous" name="cost_previous" placeholder="Previous Cost" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="highlight_discount">Discount<span>(Optional)</span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="highlight_discount" name="highlight_discount" placeholder="Discount" type="text" value="">
                                </div>
                            </div>

                            <h3 class="text-center">Highlight Section</h3>
                            <hr style="margin-top: 20px; margin-bottom: 20px;">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="highlights">Highlights *<span>Separated By Comma(,)</span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control mytags" id="highlights" name="highlights" placeholder="Package Highlights" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="includes">Includes *<span>Separated By Comma(,)</span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control mytags" id="includes" name="includes" placeholder="Package Includes" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="excludes">Excludes *<span>Separated By Comma(,)</span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control mytags" id="excludes" name="excludes" placeholder="Package Excludes" type="text">
                                </div>
                            </div>
                            <hr style="margin-top: 20px; margin-bottom: 20px;">
                              <div class="featured-tag-wrap row mb-30">
                                <div class="col-sm-12">
                                  <div class="featured-title text-center">
                                    <h3 class="mb-15">Package Offers</h3>
                                  </div>

                                  <div class="featured__box">
                                    <div class="featured-offer col-sm-8 offset-sm-3">
                                    <div class="form-group  row align-items-center">
                                        <label class="col-sm-2 col-form-label" for="offer_title">Title *</label>
                                        <div class="col-sm-10 add_width">
                                        <input type="text" class="form-control" id="offer_title" name="offer_title[]" placeholder="Title">
                                      </div>
                                    </div> 
                                    <div class="form-group  row align-items-center">
                                        <label class="col-sm-2 col-form-label" for="offer_day">Day *</label>
                                        <div class="col-sm-10 add_width">
                                        <input type="text" class="form-control" id="offer_day" name="offer_day[]" placeholder="Day">
                                      </div>
                                    </div> 
                                    <div class="form-group  row align-items-center">
                                        <label class="col-sm-2 col-form-label" for="offer_subtitle">Sub Title *</label>
                                        <div class="col-sm-10 add_width">
                                        <input type="text" class="form-control" id="offer_subtitle" name="offer_subtitle[]" placeholder="Sub Title">
                                      </div>
                                    </div> 
                                    <div class="form-group  row align-items-center">
                                        <label class="col-sm-2 col-form-label" for="offer_tags">Tags *<span>Separated By Comma(,)</span></label>
                                        <div class="col-sm-10 add_width">
                                        <input type="text" class="form-control" id="offer_tags" name="offer_tags[]" placeholder="Tags">
                                      </div>
                                    </div> 
                                    <div class="form-group  row align-items-center">
                                        <label class="col-sm-2 col-form-label" for="offer_details">Description *</label>
                                        <div class="col-sm-10 add_width">
                                          <textarea class="form-control" cols="30" rows="5" id="offer_details" name="offer_details[]" placeholder="Description"></textarea>
                                      </div>
                                    </div> 
                                        <a href="javascript:void(0)" class="fa-close ui-close"><i class="fas fa-times"></i></a>
                                    </div>
                                  </div>
                                  <div class="featured__btn text-center">
                                    <a href="javascript:void(0)" class="add-btn transparent featured mt-20" id="add-field-btn"><i class="fas fa-plus"></i> Add More Field</a>
                                  </div>
                                </div>
                              </div>

                            <div class="form-group row mb-0">
                              <div class="col-sm-12 text-center">
                                <button name="addProduct_btn" type="submit" class="btn btn-success form-btn">Submit</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- Admin haeder end -->
            </div>
          </div>

        </div>
      </div>
<!-- Gallry Modal1 -->
<div id="myModal1" class="modal fade gallery" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100">Image Gallery</h4>
      </div>
      <div class="modal-body">
        <div class="gallery-btn-area text-center">
            <a class="btn btn-info gallery-btn mr-5 gallery-btn-upload" id="prod_gallery1"><i class="fa fa-download"></i> Upload Images</a>
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

<script type="text/javascript" src="{{ URL::asset('assets/admin/js/datepicker.js')}}"></script>

<script type="text/javascript">
    var dateToday = new Date();
    var dates =  $( "#start_date,#return_date" ).datepicker();


// Gallery Section

  $(document).on('click', '.close1' ,function() {
    var id = $(this).find('input[type=hidden]').val();
    $('#galval1'+id).remove();
    $(this).parent().parent().remove();
  });

  $(document).on('click', '#prod_gallery1' ,function() {
    $('#uploadgallery1').click();
     $('#gallery-wrap1 .row').html('');
    $('#form1').find('.removegal1').val(0);
  });

  $("#uploadgallery1").on( "change", function() {
     var total_file=document.getElementById("uploadgallery1").files.length;
     for(var i=0;i<total_file;i++)
     {
      $('#gallery-wrap1 .row').append('<div class="col-sm-4">'+
                                  '<div class="gallery__img">'+
                                  '<img src="'+URL.createObjectURL(event.target.files[i])+'" alt="gallery image">'+
                                  '<div class="gallery-close close1">'+
                                  '<input type="hidden" value="'+i+'">'+
                                  '<i class="fa fa-times"></i>'+
                                  '</div>'+
                                  '</div>'+
                                  '</div>');
      $('#form1').append('<input type="hidden" name="galval[]" id="galval1'+i+'" class="removegal1" value="'+i+'">')
     }

  });
</script>

<script type="text/javascript">
      $(document).on('click','#add-field-btn',function() {
        $(".featured__box").append('<div class="featured-offer col-sm-8 offset-sm-3">'+
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label">Title *</label>'+
                                        '<div class="col-sm-10 add_width">'+
                                        '<input type="text" class="form-control" name="offer_title[]" placeholder="Title">'+
                                      '</div>'+
                                    '</div>'+
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label">Day *</label>'+
                                        '<div class="col-sm-10 add_width">'+
                                        '<input type="text" class="form-control" name="offer_day[]" placeholder="Day">'+
                                      '</div>'+
                                    '</div>'+ 
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label">Sub Title *</label>'+
                                        '<div class="col-sm-10 add_width">'+
                                        '<input type="text" class="form-control" name="offer_subtitle[]" placeholder="Sub Title">'+
                                      '</div>'+
                                    '</div>'+ 
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label">Tags *<span>Separated By Comma(,)</span></label>'+
                                        '<div class="col-sm-10 add_width">'+
                                        '<input type="text" class="form-control" name="offer_tags[]" placeholder="Tags">'+
                                      '</div>'+
                                    '</div> '+
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label" >Description *</label>'+
                                        '<div class="col-sm-10 add_width">'+
        '<textarea class="form-control" cols="30" rows="5" name="offer_details[]" placeholder="Description"></textarea>'+
                                      '</div>'+
                                    '</div> '+
                                        '<a href="javascript:;" class="fa-close ui-close"><i class="fas fa-times"></i></a>'+
                                    '</div>');
    });

  function isEmpty(el){
      return !$.trim(el.html())
  }

  $(document).on('click', '.ui-close' ,function() {
  $(this).parent().remove();
    if (isEmpty($('.featured__box'))) {
        $(".featured__box").html('<div class="featured-offer col-sm-8 offset-sm-3">'+
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label" >Title *</label>'+
                                        '<div class="col-sm-10 add_width">'+
                                        '<input type="text" class="form-control" name="offer_title[]" placeholder="Title">'+
                                      '</div>'+
                                    '</div>'+
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label">Day *</label>'+
                                        '<div class="col-sm-10 add_width">'+
                                        '<input type="text" class="form-control" name="offer_day[]" placeholder="Day">'+
                                      '</div>'+
                                    '</div>'+ 
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label">Sub Title *</label>'+
                                        '<div class="col-sm-10 add_width">'+
                                        '<input type="text" class="form-control" name="offer_subtitle[]" placeholder="Sub Title">'+
                                      '</div>'+
                                    '</div>'+ 
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label">Tags *<span>Separated By Comma(,)</span></label>'+
                                        '<div class="col-sm-10 add_width">'+
                                        '<input type="text" class="form-control" name="offer_tags[]" placeholder="Tags">'+
                                      '</div>'+
                                    '</div> '+
                                    '<div class="form-group  row align-items-center">'+
                                        '<label class="col-sm-2 col-form-label">Description *</label>'+
                                        '<div class="col-sm-10 add_width">'+
        '<textarea class="form-control" cols="30" rows="5" name="offer_details[]" placeholder="Description"></textarea>'+
                                      '</div>'+
                                    '</div> '+
                                        '<a href="javascript:;" class="fa-close ui-close"><i class="fas fa-times"></i></a>'+
                                    '</div>');
    }
  });
</script>
@endsection
