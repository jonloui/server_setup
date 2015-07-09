$(document).ready(function() {
	$("#load_container").animate({left:"1000px"},"slow").slideUp("fast", function() {
		$("#title_container").slideDown("slow", function() {
			$("#img_section").slideDown("normal");
		});
	});

	$("#title").lettering();

	var gallery = create_gallery(0, "down");
	$("#thumb_container").html(gallery).children(".thumb_sect").slideDown("slow");

	$("#down_button").click(function() {
		row = $(".thumb_sect").attr("row");
		new_gallery = create_gallery(row, "down");
		$(".thumb_sect").slideUp("slow", function() {
			$(this).parent("#thumb_container").html(new_gallery).children(".thumb_sect").slideDown("slow");
		});

		if(row == 6)
			$("#down_button").css("visibility", "hidden");

		if(row > 0)
			$("#up_button").css("visibility", "visible");
	});

	$("#up_button").click(function() {
		row = $(".thumb_sect").attr("row");
		new_gallery = create_gallery(row, "up");
		$(".thumb_sect").slideUp("slow", function() {
			$(this).parent("#thumb_container").html(new_gallery).children(".thumb_sect").slideDown("slow");
		});
		
		if(row == 2)
			$("#up_button").css("visibility", "hidden");

		if(row < 8)
			$("#down_button").css("visibility", "visible");
	});

	$(document).on("click", ".thumb", function() {
		temp_id = $(this).attr("id");
		$("#display").css("background-image", "url(/assets/images/baby_leo/img_gallery/" + temp_id + ".JPG");
	});

	$(document).on("click", "#left_button", function(event) {
		event.stopPropagation();
		console.log($(this).attr("id"));
		var background_img = $("#display").css('background-image');
		var img_array = array_of_images();

		for(var i=img_array.length-1; i > -1; i--)
		{
			if(background_img.indexOf("happy_1st") > 0 || background_img.indexOf(img_array[0]) > 0)
				$("#display").css('background-image', "url(/assets/images/baby_leo/img_gallery/" + img_array[0] + ".JPG");
			else if(background_img.indexOf(img_array[i]) > 0)
			{
				$("#display").css('background-image', "url(/assets/images/baby_leo/img_gallery/" + img_array[i-1] + ".JPG");
				if(i%9 == 0)
				{
					row = Math.floor(i / 9 + 1);
					new_gallery = create_gallery(row, "up");
					$(".thumb_sect").slideUp("slow", function() {
						$(this).parent("#thumb_container").html(new_gallery).children(".thumb_sect").slideDown("slow");
					});
					
					if(row == 7)
						$("#down_button").css("visibility", "visible");

					if(row == 2)
						$("#up_button").css("visibility", "hidden");
				}
			}
		}
	});

	$(document).on("click", "#display, #right_button", function(event) {
		event.stopPropagation();
		var background_img = $("#display").css('background-image');
		var img_array = array_of_images();

		for(var i=0; i < img_array.length; i++)
		{
			if(background_img.indexOf("happy_1st") > 0)
				$("#display").css('background-image', "url(/assets/images/baby_leo/img_gallery/" + img_array[0] + ".JPG");
			else if(background_img.indexOf(img_array[i]) > 0 && i != (img_array.length-1))
			{
				$("#display").css('background-image', "url(/assets/images/baby_leo/img_gallery/" + img_array[i+1] + ".JPG");
				if(i%9 == 8)
				{
					row = Math.floor(i / 9 + 1);
					new_gallery = create_gallery(row, "down");
					$(".thumb_sect").slideUp("slow", function() {
						$(this).parent("#thumb_container").html(new_gallery).children(".thumb_sect").slideDown("slow");
					});
					$("#up_button").css("visibility", "visible");

					if(row == 6)
						$("#down_button").css("visibility", "hidden");
				}
			}
		}
	});

	$("#display").hover(function() {
		$("#left_button, #right_button").show();
	},
	function() {
		$("#left_button, #right_button").hide();	
	});

	$("#projects_link").css("color","#91AFBD");
});

// change the set of images that can be viewed.
function create_gallery(row, direction)
{
	var img_array = array_of_images();
	gallery = '';
	direction == "down" ? row++ : row--;
	array_num = (row-1)*9;

	for(var i=array_num; i < (array_num+9); i++)
	{
		if(i%9 == 0)
			gallery += "<div class='thumb_sect' row='" + row + "'>";

		gallery += "<div id='" + img_array[i] + "' class='thumb' style='background-image: url(/assets/images/baby_leo/img_gallery/" + img_array[i] + "B.JPG)'></div>";
	}
	gallery += "</div>";

	return gallery;
}

function array_of_images()
{
	var img_array = new Array(	"IMG_4406",  "IMG_4407",  "IMG_4408",  "IMG_4409",  "IMG_4411",  
								"IMG_4412",  "IMG_4413",  "IMG_4414",  "IMG_4415",  
								"IMG_4416",  "IMG_4417",  "IMG_4419",  "IMG_4420",  "IMG_4421",  
								"IMG_4422",  "IMG_4426",  "IMG_4427",  "IMG_4428", 
								"IMG_4429",  "IMG_4430",  "IMG_4431",  "IMG_4432",  "IMG_4433",  
								"IMG_4434",  "IMG_4435",  "IMG_4436",  "IMG_4437",  
								"IMG_4438",  "IMG_4439",  "IMG_4440",  "IMG_4443",  "IMG_4445",  
								"IMG_4448",  "IMG_4449",  "IMG_4450",  "IMG_4451", 
								"IMG_4452",  "IMG_4453",  "IMG_4454",  "IMG_4455",  "IMG_4456",  
								"IMG_4457",  "IMG_4460",  "IMG_4461",  "IMG_4463",  
								"IMG_4464",  "IMG_4465",  "IMG_4466",  "IMG_4467",  "IMG_4468",  
								"IMG_4469",  "IMG_4470",  "IMG_4471",  "IMG_4472", 
								"IMG_4473",  "IMG_4474",  "IMG_4475",  "IMG_4476",  "IMG_4480",  
								"IMG_4481",  "IMG_4482",  "IMG_4483",  "IMG_4484");
	return img_array;
}

// var str = 'document.getElementById("display").style.backgroundImage="url(img_gallery/';
// document.getElementById("thumb_container").innerHTML = 	"<div class='thumb_sect' id='sect1'>" +
// 														"<div class='thumb' id='IMG_4406B' onclick=" + str + 'IMG_4406.JPG)";' + "></div>" + 
// 														"<div class='thumb' id='IMG_4407B' onclick=" + str + 'IMG_4407.JPG)";' + "></div>" + 
// 														"<div class='thumb' id='IMG_4408B' onclick=" + str + 'IMG_4408.JPG)";' + "></div>" + 
// 														"<div class='thumb' id='IMG_4409B' onclick=" + str + 'IMG_4409.JPG)";' + "></div>" + 
// 														"<div class='thumb' id='IMG_4411B' onclick=" + str + 'IMG_4411.JPG)";' + "></div>" + 
// 														"<div class='thumb' id='IMG_4412B' onclick=" + str + 'IMG_4412.JPG)";' + "></div>" + 
// 														"<div class='thumb' id='IMG_4413B' onclick=" + str + 'IMG_4413.JPG)";' + "></div>" + 
// 														"<div class='thumb' id='IMG_4414B' onclick=" + str + 'IMG_4414.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4415B' onclick=" + str + 'IMG_4415.JPG)";' + "></div>" +
// 														"<div style='width:40px; height:80px; float:left; '>" +
// 														"<div style='width:40px; height:40px; '></div>" +
// 														"<div class='down_buttons' onclick='slide(1,2,1);'></div></div></div>" +
														
// 														"<div class='thumb_sect' id='sect2'>" +
// 														"<div class='thumb' id='IMG_4416B' onclick=" + str + 'IMG_4416.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4417B' onclick=" + str + 'IMG_4417.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4419B' onclick=" + str + 'IMG_4419.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4420B' onclick=" + str + 'IMG_4420.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4421B' onclick=" + str + 'IMG_4421.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4422B' onclick=" + str + 'IMG_4422.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4426B' onclick=" + str + 'IMG_4426.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4427B' onclick=" + str + 'IMG_4427.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4428B' onclick=" + str + 'IMG_4428.JPG)";' + "></div>" +
// 														"<div style='width:40px; height:80px; float:left; '>" +
// 														"<div class='up_buttons' onclick='slide(2,1,2);'></div>" +
// 														"<div class='down_buttons' onclick='slide(2,3,1);'></div></div></div>" +
														
// 														"<div class='thumb_sect' id='sect3'>" +
// 														"<div class='thumb' id='IMG_4429B' onclick=" + str + 'IMG_4429.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4430B' onclick=" + str + 'IMG_4430.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4431B' onclick=" + str + 'IMG_4431.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4432B' onclick=" + str + 'IMG_4432.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4433B' onclick=" + str + 'IMG_4433.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4434B' onclick=" + str + 'IMG_4434.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4435B' onclick=" + str + 'IMG_4435.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4436B' onclick=" + str + 'IMG_4436.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4437B' onclick=" + str + 'IMG_4437.JPG)";' + "></div>" +
// 														"<div style='width:40px; height:80px; float:left; '>" +
// 														"<div class='up_buttons' onclick='slide(3,2,2);'></div>" +
// 														"<div class='down_buttons' onclick='slide(3,4,1);'></div></div></div>" +
														
// 														"<div class='thumb_sect' id='sect4'>" +
// 														"<div class='thumb' id='IMG_4438B' onclick=" + str + 'IMG_4438.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4439B' onclick=" + str + 'IMG_4439.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4440B' onclick=" + str + 'IMG_4440.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4443B' onclick=" + str + 'IMG_4443.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4445B' onclick=" + str + 'IMG_4445.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4448B' onclick=" + str + 'IMG_4448.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4449B' onclick=" + str + 'IMG_4449.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4450B' onclick=" + str + 'IMG_4450.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4451B' onclick=" + str + 'IMG_4451.JPG)";' + "></div>" +
// 														"<div style='width:40px; height:80px; float:left; '>" +
// 														"<div class='up_buttons' onclick='slide(4,3,2);'></div>" +
// 														"<div class='down_buttons' onclick='slide(4,5,1);'></div></div></div>" +
														
// 														"<div class='thumb_sect' id='sect5'>" +
// 														"<div class='thumb' id='IMG_4452B' onclick=" + str + 'IMG_4452.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4453B' onclick=" + str + 'IMG_4453.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4454B' onclick=" + str + 'IMG_4454.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4455B' onclick=" + str + 'IMG_4455.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4456B' onclick=" + str + 'IMG_4456.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4457B' onclick=" + str + 'IMG_4457.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4460B' onclick=" + str + 'IMG_4460.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4461B' onclick=" + str + 'IMG_4461.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4463B' onclick=" + str + 'IMG_4463.JPG)";' + "></div>" +
// 														"<div style='width:40px; height:80px; float:left; '>" +
// 														"<div class='up_buttons' onclick='slide(5,4,2);'></div>" +
// 														"<div class='down_buttons' onclick='slide(5,6,1);'></div></div></div>" +
														
// 														"<div class='thumb_sect' id='sect6'>" +
// 														"<div class='thumb' id='IMG_4464B' onclick=" + str + 'IMG_4464.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4465B' onclick=" + str + 'IMG_4465.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4466B' onclick=" + str + 'IMG_4466.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4467B' onclick=" + str + 'IMG_4467.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4468B' onclick=" + str + 'IMG_4468.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4469B' onclick=" + str + 'IMG_4469.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4470B' onclick=" + str + 'IMG_4470.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4471B' onclick=" + str + 'IMG_4471.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4472B' onclick=" + str + 'IMG_4472.JPG)";' + "></div>" +
// 														"<div style='width:40px; height:80px; float:left; '>" +
// 														"<div class='up_buttons' onclick='slide(6,5,2);'></div>" +
// 														"<div class='down_buttons' onclick='slide(6,7,1);'></div></div></div>" +
														
// 														"<div class='thumb_sect' id='sect7'>" +
// 														"<div class='thumb' id='IMG_4473B' onclick=" + str + 'IMG_4473.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4474B' onclick=" + str + 'IMG_4474.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4475B' onclick=" + str + 'IMG_4475.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4476B' onclick=" + str + 'IMG_4476.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4480B' onclick=" + str + 'IMG_4480.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4481B' onclick=" + str + 'IMG_4481.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4482B' onclick=" + str + 'IMG_4482.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4483B' onclick=" + str + 'IMG_4483.JPG)";' + "></div>" +
// 														"<div class='thumb' id='IMG_4484B' onclick=" + str + 'IMG_4484.JPG)";' + "></div>" +
// 														"<div style='width:40px; height:80px; float:left; '>" +
// 														"<div class='up_buttons' onclick='slide(7,6,2);'></div>" +
// 														"<div style='width:40px; height:40px; '></div></div></div>";
// 	document.getElementById("display").style.backgroundImage="url(img_background/happy_1st.gif)";

// function slide(cur, next, action) {
// 	$(document).ready(function() {
// 		if(action == 1) {
// 			$("#sect" + cur).slideUp("normal");
// 			$("#sect" + next).slideDown("normal");
// 		}
// 		else {
// 			$("#sect" + cur).slideUp("normal");
// 			$("#sect" + next).slideDown("normal");
// 		}
// 	});
// }

// function change_img(event)
// {
// 	var img_array = new Array(	"happy_1st.gif",  "IMG_4406.JPG",  "IMG_4407.JPG",  "IMG_4408.JPG",  "IMG_4409.JPG",  "IMG_4411.JPG",  
// 								"IMG_4412.JPG",  "IMG_4413.JPG",  "IMG_4414.JPG",  "IMG_4415.JPG",  "IMG_4416.JPG",  "IMG_4417.JPG",  
// 								"IMG_4419.JPG",  "IMG_4420.JPG",  "IMG_4421.JPG",  "IMG_4422.JPG",  "IMG_4426.JPG",  "IMG_4427.JPG",  
// 								"IMG_4428.JPG",  "IMG_4429.JPG",  "IMG_4430.JPG",  "IMG_4431.JPG",  "IMG_4432.JPG",  "IMG_4433.JPG",  
// 								"IMG_4434.JPG",  "IMG_4435.JPG",  "IMG_4436.JPG",  "IMG_4437.JPG",  "IMG_4438.JPG",  "IMG_4439.JPG",  
// 								"IMG_4440.JPG",  "IMG_4443.JPG",  "IMG_4445.JPG",  "IMG_4448.JPG",  "IMG_4449.JPG",  "IMG_4450.JPG",  
// 								"IMG_4451.JPG",  "IMG_4452.JPG",  "IMG_4453.JPG",  "IMG_4454.JPG",  "IMG_4455.JPG",  "IMG_4456.JPG",  
// 								"IMG_4457.JPG",  "IMG_4460.JPG",  "IMG_4461.JPG",  "IMG_4463.JPG",  "IMG_4464.JPG",  "IMG_4465.JPG",  
// 								"IMG_4466.JPG",  "IMG_4467.JPG",  "IMG_4468.JPG",  "IMG_4469.JPG",  "IMG_4470.JPG",  "IMG_4471.JPG",  
// 								"IMG_4472.JPG",  "IMG_4473.JPG",  "IMG_4474.JPG",  "IMG_4475.JPG",  "IMG_4476.JPG",  "IMG_4480.JPG",  
// 								"IMG_4481.JPG",  "IMG_4482.JPG",  "IMG_4483.JPG",  "IMG_4484.JPG");
// 	var i=0;
// 	for(i=0; i < img_array.length; i++) {
// 		if(event.style.backgroundImage.search(img_array[i]) > -1)
// 			break;
// 		else { }
// 	}

// 	i = i + 1;
// 	if(i != img_array.length)
// 		document.getElementById(event.id).style.backgroundImage = "url(img_gallery/" + img_array[i] + ")";
// 	else {}
// }