$(document).ready(function() {
	// show the hint to the user
	$("#show_hint").hover(function() {
		$(this).text() == "Show Hint" ? $(this).text("Are you sure?") : "";
	},
	function() {
		$(this).text() == "Are you sure?" ? $(this).text("Show Hint") : "";
	}).click(function() {
		$(this).text($(this).attr("alt"));
	});

	
	// reset the input text fields to ""
	$("#reset_button").click(function() {
		$("input[type='text']").val("");
	});

	// allow the cursor to automatically shift or not shift
	$("#auto_cursor").click(function() {
		if($(this).text() == "Auto Cursor: on")
			$(this).text("Auto Cursor: off");
		else
			$(this).text("Auto Cursor: on");
	});

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

			// if #auto_move text == on
			// if($("#auto_move:checked").length && event.which != 9 && event.which != 16)
			if($("#auto_cursor").text() == "Auto Cursor: on" && event.which != 9 && event.which != 16)
				$(this).focusNextInputField();
		});
	});

	// jqueryminute.com
	$.fn.focusNextInputField = function() {
	    return this.each(function() {
	        // var fields = $(this).parents('form:eq(0),body').find('button,input,textarea,select');
	        var fields = $(this).parents('form:eq(0),body').find("input[type='text']");
	        var index = fields.index( this );
	        // if ( index > -1 && ( index + 1 ) < fields.length ) {
	        //     fields.eq( index + 1 ).focus();
	        // }
	        if ( index > -1 && ( index+1  ) != fields.length ) {
	            while(fields.eq(index).val() != "" && (index+1) != fields.length)
	            {
	            	fields.eq( index + 1 ).focus();
	            	index++;
	            }
	        }
	        else if( (index+1) == fields.length) {
	        	fields.eq(0).focus();
	        }
	        return false;
	    });
	};

	// remove auto cursor move for mobile devices.
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
	{
		// $("#auto_move").prop("checked", false);
		$("#auto_cursor").text("Auto Cursor: off").hide();
		var testA = 20;
	}

});