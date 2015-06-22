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

			if($("#auto_move:checked").length && event.which != 9 && event.which != 16)
				$(this).focusNextInputField();
		});
	});

	// jqueryminute.com
	$.fn.focusNextInputField = function() {
	    return this.each(function() {
	        var fields = $(this).parents('form:eq(0),body').find('button,input,textarea,select');
	        var index = fields.index( this );
	        if ( index > -1 && ( index + 1 ) < fields.length ) {
	            fields.eq( index + 1 ).focus();
	        }
	        return false;
	    });
	};
});