$(function() {
	//console.log("hello");

	// Click button to open mobile menu
	$('.menubutton').on('click', function(){
		$('#menu').slideToggle();
		console.log('click');
	});


	setTimeout(function() { 
		$( "#iframe-holder" ).html(  "<iframe  src='http://www.youtube-nocookie.com/embed/1oi42z6zb1Q' frameborder='0' allowfullscreen></iframe>");
	}, 2500);	

});
