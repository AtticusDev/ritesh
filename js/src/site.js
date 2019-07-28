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



});