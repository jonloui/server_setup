$(document).ready(function() {
	$("#new_cypher").submit(function() {
		$.post("cyphers/create", $(this).serialize(), function(cypher_info)
		{
			if(cypher_info.error == false)
			{
				$("#error").html("");
				$("#success").html("<p>Cypher was saved to the database!</p>");
				$("#cypher_index_table tbody").append(cypher_info.new_cypher);
				// let the plugin know that we made an update
				$("#cypher_index_table").trigger("update");
			}
			else
			{
				$("#success").html("");
				$("#error").html(cypher_info.error);
			}
		}, "json");

		return false;
	});

	// Sorting table on final column and making colums 2 and 3 unsortable.
	$("#cypher_index_table").tablesorter({sortList: [[3,0]],
										  headers: {
										  			1: {
										  				sorter: false
										  			},
										  			2: {
										  				sorter: false
										  			}
										  }});

	$(".header_link").css("color","white");
	$("#projects_link").css("color","#91AFBD");
});