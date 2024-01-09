$(function ($) {
  "use strict";

//  LOADER

  if(gs.is_loader == 1)
  {
    $(window).on("load", function (e) {
      setTimeout(function(){
          $('#cover').fadeOut(1000);
        },1000)
    });    
  }

//LOADER ENDS


}(jQuery));