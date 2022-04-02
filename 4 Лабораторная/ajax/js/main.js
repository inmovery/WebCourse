$(document).ready(function() {
	$(".contact_form").submit(function() {
		var value = $(this).serialize();

		$.ajax({
			type: "POST",
			url: "send.php",
			data: value,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="notification"><p class="notification__title">Ваша <span>форма отправлена</span></p><p class="notification__description">Здесь ещё какой-то текст, который мне не интересен</p></div>';
					$(".fields").hide();
				} else { result = msg; }
				$('.notice').html(result);
			}
		});
		return false;
	});

	$(".choice").selectpicker();
	// $('select').selectpicker();
});

