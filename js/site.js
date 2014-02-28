// Modernizr fallback for switching out .svg with .png for earlier browsers
if(!Modernizr.svg) {
  $('img[src*="svg"]').attr('src', function() {
    return $(this).attr('src').replace('.svg', '.png');
  });
}

// Accordion Script
$('.accordion-expand').click(function() {
  $('.accordion-content').removeClass('visually-hidden');
});

$('.accordion-collapse').click(function() {
  $('.accordion-content').addClass('visually-hidden');
});

$('.accordion-header').click(function() {
  $(this).next().toggleClass('visually-hidden');
});