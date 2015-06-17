$(document).ready(function() {
	$(".thumb_container").hover(function() {
		$(this).css({"opacity":"1.0"});
		$("#tempImgText").text($(this).attr('alt')).css({'width': '250px'});
	},
	function() {
	    $(this).css({"opacity":"0.4"});
		$("#tempImgText").text('').css({'width': '0px'});
	});

	$(".thumb_container").click(function() {
		url = "/assets/media/tloui/Animation/" + $(this).attr("video");
		$("#vid_container").show(function() {
			$(this).children("iframe").attr("src", url);
		}).children('.x').click(function() {
			$("#vid_container").hide();
		});
	});
});