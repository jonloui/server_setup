$(document).ready(function() {
	$("#bookmark_container").accordion();
	$(".menu_links").menu();
	$("#add_new_link_container").hide();

	$("input[type=text]").focus(function() {
		$(this).toggleClass("input_focus");
	}).blur(function() {
		$(this).toggleClass("input_focus");
	});

	$("input[type=submit], button").button();

	$("#bookmark_container h3 .ui-icon-plus").click(function() {
		var id = $(this).attr("value");

		if($("#add_new_section_container").css("display") != "none")
			$("#add_new_section_container").effect("explode", 1000).hide();
		
		$("#add_new_link_container").show().children("form").attr("action", "/bookmarks/create/" + id);
	});

	$("#form_cancel").click(function() {
		$("#add_new_link_container").effect("explode", 1000).hide();
		$("#add_new_section_container").show();
	})

	$("#projects_link").css("color","#91AFBD");
});