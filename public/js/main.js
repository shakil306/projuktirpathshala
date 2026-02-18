$("document").ready(function () {

// JQUERY COUNTER In Home Page
  $('.counter').counterUp({
         delay: 10,
         time: 1000
      });

  //STICKY MENU On Scroll
  var height = $("#header-icon").height();
  $(window).scroll(function () {
    if ($(this).scrollTop() > height) {
      $(".navbar").addClass("fixed");
    } else {
      $(".navbar").removeClass("fixed");
    }
  });

  //Owl-carousel For Mentor Page

  $(".mentor .carousel .owl-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });

 
  //Owl-carousel For Gallery Page

  $(".gallery-slider .carousel .owl-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },
      992: {
        items: 1,
      },
    },
  });

  // Magnific Popup On Gallery Page
  $(".test-popup-link").magnificPopup({
    type: "image",
    gallery: { enabled: true },
  });
});

// Mix It up js code On Gallery Page
$("document").ready(function () {
  var mixer = mixitup(".image-mixer");
});

// Mix It up js code On Blog Page
$("document").ready(function () {
  var mixer = mixitup(".all-news");
});

// BOTTOM TO TOP Button JS CODE
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      $("#bottom-to-top").css({
        opacity: "1",
        "pointer-events": "auto",
      });
    } else {
      $("#bottom-to-top").css({
        opacity: "0",
        "pointer-events": "none",
      });
    }
  });
  $("#bottom-to-top").click(function () {
    $("html").animate({ scrollTop: 0 }, 500);
  });
});