function mycarousel_initCallback(carousel) {

jQuery('#forw').bind('click', function() {
carousel.next();
return false;
});

jQuery('#prev').bind('click', function() {
carousel.prev();
return false;
});
};

jQuery(document).ready(function() {
jQuery("#carrusel").jcarousel({
scroll :1,
auto: 3,
wrap : "both",
initCallback: mycarousel_initCallback,
buttonNextHTML: null,
buttonPrevHTML: null
});
});