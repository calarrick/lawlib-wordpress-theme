
jQuery(document).ready(function($) {


$('.hassubmenu').prepend('<div class="toggle">+</div>');

if ($.browser.msie){
   $('.menu-main-menu-container ul#menu-main-menu li:last-child .menutop').css('border-width','0 1px 1px;')
 }

 $('.toggle:not(.toggle-open)') .addClass('toggle-closed') .parents('li') .children('ul') .hide();    

 $('.toggle') .click(function(){
   if ($(this) .hasClass('toggle-open')) {
     $(this) .removeClass('toggle-open') .addClass('toggle-closed') .empty('') .append('+') .parents('li') .children('ul') .slideUp(250);
     $(this) .parent('.menutop') .removeClass('menutop-open') .addClass('menutop-closed');
   }else{
     $(this) .parent('.menutop') .removeClass('menutop-closed') .addClass('menutop-open');
     $(this) .removeClass('toggle-closed') .addClass('toggle-open') .empty('') .append('&ndash;') .parents('li') .children('ul') .slideDown(250);
 }
 })
 
 

});

