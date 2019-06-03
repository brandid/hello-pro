jQuery(document).ready(function($) {

  // Optimization: Store the references outside the event handler:
  var $window = $(window);

  // maximum height of site-header element (before sticky)
  var maxHeaderHeight = $('body.sticky-header .site-header:not(.sticky)').outerHeight();

  // Set margin-top on .site-inner
  function siteInnerTopMargin() {

    // Apply top margin to .site-inner div
    if ($(window).width() > 1023) {
        // outerHeight of site-header element
        var headerHeight = $('body.sticky-header .site-header').outerHeight();
        // set value to element height
        $('body.sticky-header .site-inner').css("margin-top", headerHeight);
    } else {
        // remove margin
        $('body.sticky-header .site-inner').css("margin-top", 0);
    }

  }
  siteInnerTopMargin();


  /* // STICKY NAV // */
  // Do sticky nav on smartscroll
  $(window).smartscroll(function(e) {

    // var elemHeight = $('body.sticky-header .site-header').outerHeight() + 20;
    var elemHeight = 66;

    var scroll = $(window).scrollTop();

    // If we've scrolled past the height of the header element
    if (scroll >= elemHeight) {

      $("body.sticky-header .site-header").addClass("sticky");

      setTimeout(function() {
        $("body.sticky-header .site-header").addClass("active");
      });

    } else {
      $("body.sticky-header .site-header").removeClass("sticky").removeClass("active");
    }

  });

  // Execute functions on smartresize
  $(window).smartresize(function(e) {
    siteInnerTopMargin();
  });


});
