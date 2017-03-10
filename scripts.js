$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 600) {
      $('.masthead-nav').addClass('navbar-fixed');
      $('#about').css('margin-top',60);
    }
    if ($(window).scrollTop() < 601) {
      $('.masthead-nav').removeClass('navbar-fixed');
      $('#about').css('margin-top',0);
    }
  });
});