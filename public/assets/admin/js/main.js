(function ($) {
	"use strict";

    jQuery(document).ready(function($){

        $(function(){

             // create regexp to match current url pathname and remove trailing slash if present as it could 
             // collide with the link in navigation in case trailing slash wasn't present there
             // now grab every link from the navigation

            var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/,'') + "$");
            $('.components li a').each(function(){
             // and test its normalized href against the url pathname regexp
             if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).parent().addClass('active');
                $(this).closest('ul').addClass("collapse show");
                $(this).closest('ul').attr("aria-expanded","true");
                $(this).parents('li').parents('li').find('.submenu').attr("aria-expanded","true");
             }
            });
        });

        /*  Counter area  */
        $('.number').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 1000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        /*  /Counter area  */

        $('#sidebarCollapse').on('click', function () {
           $('.admin__sidebar').toggleClass('active');
           $(this).toggleClass('active');
       });

        $('#sidebar__menu').perfectScrollbar();

        /*  Product Size Check js  */
        $('.productSizeCheck').click(function(){
            $('.form-group-hidden').toggle();
        });

        
        /*  Bootstrap data table js  */
        $('#common-table').dataTable({
             "language": {
                "search": "",
                "searchPlaceholder": "Search For a Record"
            },
              "ordering": false
        });

        //Tagify JS 
        $('.mytags').tagify();

        $(".color-wrap").hide();
        $('.checkclick').on( "click", function() {
            $('.color-wrap').toggle();
        });

        $(".fa-close").on( "click", function() {
            $(this).parents(".colorbox").hide();
        });

        $(".fa-close").on( "click", function() {
            $(this).parents(".featured").hide();
        });

        // product profile scroll bar
        $('.header__comments-content, .header__notification-content, .header__wishlist-content').perfectScrollbar(); 

        /*  Bootstrap colorpicker js  */
        $('.cp').colorpicker();

        // Check Click :)
        $(".checkclick").on( "change", function() {
            if(this.checked){
             $(this).parent().parent().next().removeClass('showbox');  
            }
            else{
             $(this).parent().parent().next().addClass('showbox');   
            }
            
        });
        // IMAGE UPLOADING :)
        $(".uploadTrigger").on( "click", function() {
          var button = $(this);
          var imgpath = $(this).parent().parent().parent().prev().find('img');
          var file = $(this).parent().find('input[type=file]');
          file.click();
          file.change(function(event) {
            readURL(this,imgpath);
            button.html(file.val());
          });
        });
        // PROFILE IMAGE UPLOADING :)
        $(".uploadProfile").on( "click", function() {
          var button = $(this);
          var imgpath = $(this).parent().prev().find('img');
          var file = $(this).parent().find('input[type=file]');
          file.click();
          file.change(function(event) {
            readURL(this,imgpath);
            button.html(file.val());
          });
        });

        function readURL(input,imgpath) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              imgpath.attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
        // IMAGE UPLOADING ENDS :)

        // Display Modals :)
      $('#confirm-delete').on('show.bs.modal', function(e) {
          $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
      });

      $(document).on("click", ".extra" , function(){
        $(".modal-backdrop, .modal.vendor").css('background-color','rgba(0,0,0,0)');
      });
      // Display Modals END
    $(document).on("click", ".email" , function(){
        var email = $(this).parent().find('input[type=hidden]').val();
        $("#eml1").val(email);
    });


});

}(jQuery));	

        // NIC EDITOR :)
              bkLib.onDomLoaded(function() {
                var elementArray = document.getElementsByClassName("nic-edit");
                for (var i = 0; i < elementArray.length; ++i) {
                  nicEditors.editors.push(
                    new nicEditor().panelInstance(
                      elementArray[i]
                    )
                  );
                }
              });
        // NIC EDITOR ENDS :)
