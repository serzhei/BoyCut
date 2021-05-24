$('#slideBar').slick({
  infinite: false,
  slidesToShow: 3,
  prevArrow: '.section-4__leftBtn',
  nextArrow: '.section-4__rightBtn',
  speed: 600,
  responsive: [
   {
     breakpoint: 1182,
     settings: {
       slidesToShow: 2,
       slidesToScroll: 2,
     }
   },
   {
     breakpoint: 800,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1,
     }
   },
   {
     breakpoint: 400,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1,
     }
   },
 ]
});

// centerMode: true,
// variableWidth: true,
// centerPadding: 50,
// variableWidth: true,
