$(document).ready(function() {
	$("#new_cypher").submit(function() {
		$.post("cyphers/create", $(this).serialize(), function(cypher_info)
		{
			if(cypher_info.error == false)
			{
				$("#error").html("");
				$("#success").html("<p>Cypher was saved to the database!</p>");
				$("#cypher_index_table tbody").append(cypher_info.new_cypher);
			}
			else
			{
				$("#success").html("");
				$("#error").html(cypher_info.error);
			}
		}, "json");

		return false;
	});

	$(".header_link").css("color","white");
	$("#projects_link").css("color","#91AFBD");
});