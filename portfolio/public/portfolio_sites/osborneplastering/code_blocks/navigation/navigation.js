	function toggleNavigation() {
		var element = document.getElementById("navigation");

if (element.classList) { 
    element.classList.toggle("open");
} else {
    // For IE9
    var classes = element.className.split(" ");
    var i = classes.indexOf("open");

    if (i >= 0) 
        classes.splice(i, 1);
    else 
        classes.push("open");
        element.className = classes.join(" "); 
}
	}