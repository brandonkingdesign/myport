

// var win, ww, $gridEq, $res, $gridFill, $svlaGrid, $svlaGridUL, $svlaGridLI, svlaGridLI_l, gridCol = 4,
//     gridNumb, gridEq, gridREq, quart1500 = 0, marg;

	

function setGrid(){

	var gridCol = 4;
	var win = $(window);
	var ww = win.width();
	var main = ww - 60;

	
	    // if (ww > 1000) {
	    //     gridCol = 4
	    // } else if (ww > 768) {
	    //     gridCol = 3
	    // } else if (ww > 500) {
	    //     gridCol = 2
	    // } else {
	    //     gridCol = 1
	    // }

	    if (window.matchMedia('(min-width: 1000px)').matches) {
	        gridCol = 4
	    } else if (window.matchMedia('(min-width: 769px) and (max-width: 999px)').matches) {
	        gridCol = 3
	    } else if (window.matchMedia('(min-width: 501px) and (max-width: 768px)').matches) {
	        gridCol = 2
	    } else {
	        gridCol = 1
	    }
	

	console.log(ww);

    var marg = ((gridCol * 2) -2) * 15;

	var goalWidth = (main - marg) / gridCol;

	$(".teaser li").css("width", goalWidth+"px");

};


$(document).ready(setGrid);
$(window).resize(setGrid);




