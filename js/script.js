$('.slider-block').slick({
  centerMode: true,
  centerPadding: '80px',
  arrows: true,
  slidesToShow: 1,
  infinity: true,
  prevArrow: "<img src='../img/back.png' class='prev' alt='1'>",
  nextArrow: "<img src='../img/next.png' class='next' alt='2'>",
  waitForAnimate: false,
  centerMode: true,
  adaptiveHeight: true,
  autoplay: false,
  easing: 'easeInOutExpo',
  pauseOnHover: true,
  pauseOnFocus: true,
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        arrows: true,
        centerMode: true,
        slidesToShow: 1,
        autoplay: false
      }
    },
    {
      breakpoint: 995,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 1000
      }
    },
    {
      breakpoint: 560,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 1,
        variableWidth: true
      }
    }
  ]
});
$(function(){
  $("#phone_mask").mask("8(999) 999-9999");
});
$(document).ready(function(){
  $("#menu ,#menu1, #menu2").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
    top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 800);
  });
});
$(document).ready(function() {
  $('.header-burger').click(function(event) {
    $('.header-burger, .header-menu').toggleClass('active');
    $('body').toggleClass('lock');
  })
  $('.header-link').click(function(event) {
    $('.header-burger, .header-menu').removeClass('active');
    $('body').removeClass('lock');
  })
});