$(document).ready(function() {
	$(".thumb").hover(function() {
		description = $(this).attr("description");
		$("#description").css("visibility", "visible").text(description);
	},
	function() {
		$("#description").css("visibility", "hidden").text("");
	});

	$(".header_link").css("color","white");
	$("#projects_link").css("color","#91AFBD");
});