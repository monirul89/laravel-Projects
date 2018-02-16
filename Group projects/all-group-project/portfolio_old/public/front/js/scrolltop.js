/////////////////////////
//Scroll To Top by Ruhul
/////////////////////////

$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $(".scrolltop").fadeIn('slow');
  }
  else {
    $(".scrolltop").fadeOut('slow');
  }
});
$(".scrolltop").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 'slow');
});
