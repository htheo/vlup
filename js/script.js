
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

	$('.file-input').on('dragenter focus click', function() {
		$('.file-drop-area').addClass('is-active');
	});

	$('.file-input').on('dragleave blur drop', function() {
		$('.file-drop-area').removeClass('is-active');
	});

	$('.file-input').on('change', function() {
		count = $('.file-input')[0].files.length;
		if (count === 1) {
			// if single file then show file name
			$('.js-set-number').text($(".file-input").val().split('\\').pop());
		} else {
			// otherwise show number of files
			$('.js-set-number').text(count + ' files selected');
		}
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

