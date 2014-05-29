$(document).ready(function() {
  $('.commitment').bxSlider({
    mode: 'fade',
    pager: false,
    controls: false
  });

  $('.slider_main').bxSlider({
    pagerCustom: '#slider-pager',
    controls: false,
    mode: 'fade',
    auto: true
  });
  $('.bx-slider1').bxSlider({
    controls: false,
    mode: 'fade',
    auto: true,
    pager: true,
    adaptiveHeight: true,
    responsive: true
  });
});