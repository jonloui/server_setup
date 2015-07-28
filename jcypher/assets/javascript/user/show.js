$(document).ready(function() {
	$("#edit_button").click(function() {
		// $().text("testing");
		$("#user_info").animate({ height: 0,
								  width: 0
		}, "slow", function() {
			$(this).css({"height": "0", "width": "0"})
			$("#update_user_info").animate({ height: "320px",
										 	 width: "280px"
			}, "slow", function() {
				$(this).css({"border": "2px solid white"})
			});
		});
	});

	$("#cancel").click(function() {
		$("#update_user_info").animate({ height: 0,
									 	 width: 0
		}, "slow", function() {
			$(this).css({"border": "none"});
			$("#user_info").animate({ height: 0,
								  	  width: 0
			}, "slow", function() {
				$(this).css({"height": "0px", "width": "0px"})
			});
		});
	});
});