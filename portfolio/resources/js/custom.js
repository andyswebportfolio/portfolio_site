
document.addEventListener("DOMContentLoaded", (event) => {

    //Every time I scroll, check the scroll param
    window.onscroll = function (e) {  

        // called when the window is scrolled.  
        var y = window.scrollY;

        //If the scroll param is over x, check if the class is there
        if (y > 75) {

            //If the class is not there, add it
            var element, name, arr;
            element = document.getElementById("mainNav");
            name = "nav-highlight-isscrolled";
            arr = element.className.split(" ");

            if (arr.indexOf(name) == -1) {
                element.className += " " + name;
            }

        } else {
            //If the class is there, remove it
            var element = document.getElementById("mainNav");
            element.className = element.className.replace(/\bnav-highlight-isscrolled\b/g, "");
        }
    } 


//Email form



    

});

/* Not needed???
//Now do it, but when the page loads

        // called when the window is scrolled.  
        var y = window.scrollY;

        //If the scroll param is over x, check if the class is there
        if (y > 75) {

            //If the class is not there, add it
            var element, name, arr;
            element = document.getElementById("mainNav");
            name = "nav-highlight-isscrolled";
            arr = element.className.split(" ");

            if (arr.indexOf(name) == -1) {
                element.className += " " + name;
            }

        } else {
            //If the class is there, remove it
            var element = document.getElementById("mainNav");
            element.className = element.className.replace(/\bnav-highlight-isscrolled\b/g, "");
        }
*/












