
function onload(){
	var random = Math.floor((Math.random() * 7) + 1);
	console.log(random);
	$('header').css("background-image", "url(images/"+random+".gif)");
	$('footer').css("background-image", "url(images/"+random+".gif)");

}
