$(document).ready(function() {
	$('.char_input').focus(function() {
		var prev_value = $(this).val();
		var prev_value_ascii = $(this).val().charCodeAt(0);

		$(this).keyup(function(event) {
			$(this).val($(this).val().toUpperCase());
			var current_value = $(this).val().charCodeAt(0);

			if((current_value < 65) || (current_value > 90))
			{
				$(this).val('');
				$("#character" + prev_value_ascii).show();
			}
			else
			{
				current_class = "." + $(this).attr('class').substring(11);
				$(current_class).val($(this).val());
			//}).change(function() {					
				if(prev_value != $(this).val() && prev_value_ascii >= 65 && prev_value_ascii <=90)
				{
					$("#character" + prev_value_ascii).show();
					for(i=65; i<91; i++)
					{
						if($('.'+i).val() == prev_value)
							$("#character" + prev_value_ascii).hide();
					}
				}

				$("#character" + current_value).hide();
			}
		});
	});
});