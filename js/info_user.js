// media query event handler
if (matchMedia) {
	var mq = window.matchMedia("(min-width: 545px)");
	mq.addListener(WidthChange);
	WidthChange(mq);	
}

// media query change
function WidthChange(mq) {
	if (mq.matches) {
		// window width is at least 540px
		document.getElementById("left_icons").className = "col-xs-6 col-sm-6 col-md-8 col-lg-8";
		document.getElementById("right_icons").className = "col-xs-6 col-sm-6 col-md-4 col-lg-4 text-right";
	}
	else {
		// window width is less than 540px
		document.getElementById("left_icons").className = "col-xs-4";
		document.getElementById("right_icons").className = "col-xs-8 text-right";
		
	}
}
