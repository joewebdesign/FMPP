// JavaScript Document

$(window).scroll(function() {

  //After scrolling 100px from the top...
  if ( $(window).scrollTop() >= 50 ) {
    $('#header-wrapper').css('top', '1%');

  //Otherwise remove inline styles and thereby revert to original stying
  } else {
    $('#header-wrapper').css('top', '2%');
	}

});


$( document ).ready(function() {
  $(".main-content").mCustomScrollbar();
});

