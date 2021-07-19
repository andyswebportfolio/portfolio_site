$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
	            function checkScroll() {
              var startY = 485; //The point where the navbar changes in px

              if ($(window).scrollTop() > startY) {
                $('#buttonBackground').addClass("scrolled");
                $('#buttonBackgroundMobile').addClass("scrolled");
                $('#animatedButton').addClass("scrolled");              
              } else {
                $('#buttonBackground').removeClass("scrolled");
                $('#buttonBackgroundMobile').removeClass("scrolled");                
                $('#animatedButton').removeClass("scrolled");    
              }
            }

              $(window).on("scroll load resize", function() {
                checkScroll();
              });
});