
$(document).ready(function() {

	$('input').each(function() {

		$(this).on('focus', function() {
			$(this).parent('.formSubContent').addClass('active');
		});

		$(this).on('blur', function() {
			if ($(this).val().length == 0) {
				$(this).parent('.formSubContent').removeClass('active');
			}
		});

		if ($(this).val() != '') $(this).parent('.formSubContent').addClass('active');

	});

	$(function() {
		$( "#btn1" ).click(function() {
			$( "#btn1" ).addClass( "onclic", 250, validate);
		});

		function validate() {
			setTimeout(function() {
				$( "#btn1" ).removeClass( "onclic" );
				$( "#btn1" ).addClass( "validate", 450, callback );
			}, 2250 );
		}
		function callback() {
			setTimeout(function() {
				$( "#btn1" ).removeClass( "validate" );
			}, 1250 );
		}
	});

});



	var random = Math.floor((Math.random() * 11) + 1);
	console.log(random);
	$('header').css("background-image", "url(images/"+random+".gif)");
	$('footer').css("background-image", "url(images/"+random+".gif)");

