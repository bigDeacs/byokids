$('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
});

$(".navbar-nav a").on("click", function(){
   $(".navbar-nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});

// Only enable if the document has a long scroll bar
// Note the window height + offset
if ( ($(window).height() + 100) < $(document).height() ) {
    $('#top-link-block').removeClass('hidden').affix({
        // how far to scroll down before link "slides" into view
        offset: {top:100}
    });
}



/*
 * Here is an example of how to use Backstretch as a slideshow.
 * Just pass in an array of images, and optionally a duration and fade value.
 */

  // Duration is the amount of time in between slides,
  // and fade is value that determines how quickly the next image will fade in
  $("#hero").backstretch([
      "/img/fullwidthimg1.jpg"
    , "/img/fullwidthimg2.jpg"
    , "/img/fullwidthimg3.jpg"
  ], {duration: 6000, fade: 750});