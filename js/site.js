// Modernizr fallback for switching out .svg with .png for earlier browsers
if(!Modernizr.svg) {
  $('img[src*="svg"]').attr('src', function() {
    return $(this).attr('src').replace('.svg', '.png');
  });
}

// Accordion Script
$('.accordion-expand').click(function() {
  $('.accordion-content').removeClass('hide-accordion').addClass('show-accordion');
});

$('.accordion-collapse').click(function() {
  $('.accordion-content').removeClass('show-accordion').addClass('hide-accordion');
});

$('.accordion-header').click(function() {
  $(this).next().removeClass('hide-accordion').toggleClass('show-accordion');
});