(function ($) {
    "use strict";

            $(document).ready(function(){
                setInterval(function(){
                        $.ajax({
                                type: "GET",
                                url:mainurl+'/json/notf',
                                success:function(data){
                                    $("#notf_count").html(data);
                                  }
                          }); 
                }, 5000);
            }); 


                $('#notf_click').on( "click", function() {
                    var val = $(this).attr('aria-expanded');
                    $("#notf_count").html('0');
                    $("#notf_show").load(mainurl+'/admin/notf');
            });


            $(document).on("click", "#notf_clear" , function(){
            $.ajax({
                    type: "GET",
                    url:mainurl+'/json/notf/clear'
              }); 
            });


          $(document).on("submit", "#emailreply1" , function(){
            var token = $(this).find('input[name=_token]').val();
            var subject = $(this).find('input[name=subject]').val();
            var message =  $(this).find('textarea[name=message]').val();
            var to = $(this).find('input[name=to]').val();
            $('#eml1').attr('disabled', true);
            $('#subj1').attr('disabled', true);
            $('#msg1').attr('disabled', true);
            $('#emlsub1').attr('disabled', true);
          $.ajax({
            type: 'post',
            url: mainurl+'/admin/user/send/message',
            data: {
                '_token': token,
                'subject'   : subject,
                'message'  : message,
                'to'   : to
                  },
            success: function( data) {
            $('#eml1').attr('disabled', false);
            $('#subj1').prop('disabled', false);
            $('#msg1').attr('disabled', false);
            $('#subj1').val('');
            $('#msg1').val('');
            $('#eml1').val('');
            $('#emlsub1').attr('disabled', false);
            if(data == 0)
            $.notify("Oops Something Goes Wrong !!","error");
            else
            $.notify("Message Sent !!","success");
            $('.ti-close').click();
                }
            });          
              return false;
        });

}(jQuery));