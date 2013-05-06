<html>
<head>

<script src="mootools-core.js"></script>
<script src="mootools-more.js"></script>
<script src="raphael-min.js"></script>
</head>
<body style = "background:black;">

	<div id= "holder" style = "width:600px; height:480px; margin:0 auto; background:black;"></div>
	<div id= "nav_cicles" style = "text-align:center;width:600px; margin: 0 auto; background:black;">
		<a href="loop.php">Click</a>
	</div>

</body>
<script>
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
</script>

</html>

