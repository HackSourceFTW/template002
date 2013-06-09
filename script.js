window.onload=function() {
alert('Welcome!');




var paper	=	Raphael('holder',610, 480);  
var x		=	1;
var y		=	12;
var dirx	=	1;
var diry	=	1;
var circle = paper.circle(10, 10, 10);  
	circle.attr("fill", "#ffff00");
	circle.attr("stroke", "#ffff00");

function draw(){
	
	// Raphael.animation(params, ms)
	
	  // circle.animate({arc: [x, 300, 10]}, 750, "elastic");
	circle.animate({"cx":x,"cy":y},5,"linear");

	x = x + dirx;
	y = y + diry;

	if ( y == 480 || y== 0){
	diry = -diry;
	}
	if ( x == 620|| x == 0){
	dirx = -dirx;
	}
}


draw.periodical(10); 




}
