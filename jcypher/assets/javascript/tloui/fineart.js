$(document).ready(function() {
	$(".thumb_container").hover(function(){
		$("#tempImgText").text($(this).attr('alt')).css({'width': '250px'});
	},
	function(){
	    $("#tempImgText").text('').css({'width': '0px'});
	}); 
});

/****** Display full sized image from table of pictures ******/
function displayimage(img_num, img_width, img_height, content_height)
{
	var file_url = '/assets/images/tloui/Fine_Art/';
	var imageSource = [	' ',
						file_url + 'BewareOfBeast.jpg',
						file_url + 'SippyHead.jpg',
						file_url + 'OneEyedCrawler.jpg', 
						file_url + 'Munkbuster.jpg', 
						file_url + 'AssortedSharpThings.jpg', 
						file_url + 'TumTum.jpg',
						file_url + 'MushroomMan.jpg', 
						file_url + 'DragonSoulja.jpg', 
						file_url + 'B&W_WomanCup.jpg', 
						file_url + 'ForshortenedGirl.jpg', 
						file_url + 'SelfPortrait_01.jpg'
					];
	document.getElementById('displaypic').style.width = img_width;
	document.getElementById('displaypic').style.height = img_height;
	document.getElementById('page_content').style.height = content_height;
	document.getElementById('displaypic').style.backgroundImage = "url(" + imageSource[img_num] + ")";
	
	window.scrollTo(145,475);
}