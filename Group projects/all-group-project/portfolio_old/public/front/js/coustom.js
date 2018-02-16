/*Simple Bootstrap Testimonial Carousel
Feedback section code start */
$(document).ready(function() {
  //carousel options
  $('#quote-carousel').carousel({
    pause: true, interval: 10000,
  });
  /* Feedback section code ends */
  
  $('body').scrollspy({ target: '#bs-example-navbar-collapse-1' });
  // scroll then acive navbar
    
    
//Paralux background effict set
$(window).stellar({
    horizontalScrolling: false,
    responsive: true,
});
    
    
});



