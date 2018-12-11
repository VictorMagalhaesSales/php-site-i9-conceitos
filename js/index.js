$(window).scroll(function() {
  if ($(document).scrollTop() > 700) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});