var dots = 2;

function changeImg(imgNum) {
	var img = "url(./static/img/artist" + imgNum + ".png)";

	document.getElementById('img-pane').style.backgroundImage = img;

	for(var i=0;i<dots;i++) {
		var dot = "dot" + (i+1);

		if(imgNum === (i+1)) {
			document.getElementById(dot).src = 
"./static/img/active-round.png";
		} else {
         document.getElementById(dot).src =
"./static/img/inactive-round.png";
		}
	}
}
