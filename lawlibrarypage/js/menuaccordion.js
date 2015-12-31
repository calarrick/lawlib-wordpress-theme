

jQuery(document).ready(function(){

   $(".SlidingPanelsContent").hide();
   $(".show_hide").show();
   $(".show_hide").click(function(){
   $(".SlidingPanelsContent").slideToggle();
   });
});

