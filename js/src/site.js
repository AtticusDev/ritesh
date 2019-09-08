jQuery(document).ready(function($){
// Add your custom jQuery here


            $(document).ready(function () {

                var menuLeft = $('#test-menu-left').slideMenu({
                    position: 'left',
                    submenuLinkAfter: ' >',
                    backLinkBefore: '< '
                });

                var menuRight = $('#test-menu-right').slideMenu({
                    submenuLinkAfter: ' ⇒',
                    backLinkBefore: '⇐ '
                });

                if ($(window).width() > 767) {
                    menuRight.open(false);
                }

            });

              $('.hamburger').click(function()
            {
              $('.hamburger').toggleClass('is-active');

              if ($('.hamburger').hasClass("is-active")) {
          //         $('main').css('margin-right','320px');
          //         $('main').css('margin-left','-320px');
          //         $('.controls').css('margin-right','320px');

              }
              else {
                   $('main').css('margin-right','0px');  
          //         $('main').css('margin-left','0px');
          //         $('.controls').css('margin-right','0px');  
              }

            });


  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

    // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

   var serviceBlock1Scene = new ScrollMagic.Scene({
        triggerElement: '.trigger',
        triggerHook: 0.7,
        reverse: true
    })
    .setClassToggle('.serviceBlock1', 'in-view') // add class to fade-in
//    .addIndicators()
    .addTo(controller);

   var serviceBlock2Scene = new ScrollMagic.Scene({
        triggerElement: '.trigger',
        triggerHook: 0.7,
        reverse: true
    })
    .setClassToggle('.serviceBlock2', 'in-view') // add class to fade-in
//    .addIndicators()
    .addTo(controller);

   var serviceBlock3Scene = new ScrollMagic.Scene({
        triggerElement: '.trigger',
        triggerHook: 0.7,
        reverse: true
    })
    .setClassToggle('.serviceBlock3', 'in-view') // add class to fade-in
//    .addIndicators()
    .addTo(controller);


   var testimonialScene = new ScrollMagic.Scene({
        triggerElement: '.testTrigger',
        triggerHook: 0.7,
        reverse: true
    })
    .setClassToggle('.testimonialWrapper', 'in-view') // add class to fade-in
  //  .addIndicators()
    .addTo(controller);

   var locationIconScene = new ScrollMagic.Scene({
        triggerElement: '.locationTrigger',
        triggerHook: 0.7,
        reverse: true
    })
    .setClassToggle('.location-icon', 'in-view') // add class to fade-in
 //   .addIndicators()
    .addTo(controller);

   var locationTitleScene = new ScrollMagic.Scene({
        triggerElement: '.locationTrigger',
        triggerHook: 0.7,
        reverse: true
    })
    .setClassToggle('.location-title', 'in-view') // add class to fade-in
//    .addIndicators()
    .addTo(controller);

   var locationAddressScene = new ScrollMagic.Scene({
        triggerElement: '.locationTrigger',
        triggerHook: 0.7,
        reverse: true
    })
    .setClassToggle('.location-address', 'in-view') // add class to fade-in
//    .addIndicators()
    .addTo(controller);

   var footerScene = new ScrollMagic.Scene({
        triggerElement: '.footerTrigger',
        triggerHook: 0.8,
        reverse: true
    })
    .setClassToggle('.site-footer', 'in-view') // add class to fade-in
  //  .addIndicators()
    .addTo(controller);

   var bottomImageScene = new ScrollMagic.Scene({
        triggerElement: '.bottomImageTrigger',
        triggerHook: 0.7,
        reverse: true
    })
    .setClassToggle('.contact-img-bottom', 'in-view') // add class to fade-in
//  .addIndicators()
    .addTo(controller);




});