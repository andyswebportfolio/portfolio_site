

function echoScrollTop() {
var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
    return scrollTop;  
}

$(document).ready(function(){
    $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
    });
});

nav_open = 0;
function toggleNav() {
    if (nav_open > 0) {
        document.getElementById("mySidenav").style.width = "0";
        nav_open = 0;
    
    } else {
        document.getElementById("mySidenav").style.width = "100%";
        nav_open = 1;
    }   
}