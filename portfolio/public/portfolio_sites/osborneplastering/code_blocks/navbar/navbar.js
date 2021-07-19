//alert("navbar js loaded");
            function checkScroll() {
              var startY = 485; //The point where the navbar changes in px

              if ($(window).scrollTop() > startY) {
                $('#navbar').addClass("scrolled");
                $('#contactLinks').addClass("scrolled");
              } else {
                $('#navbar').removeClass("scrolled");
                $('#contactLinks').removeClass("scrolled");             
              }
            }

              $(window).on("scroll load resize", function() {
                checkScroll();
              });