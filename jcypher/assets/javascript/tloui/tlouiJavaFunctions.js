function setTitle()
{
	if(document.title == "Timothy Loui's Demo")
	{
		document.getElementById('title_container').style.backgroundImage="url(/assets/images/tloui/img_titles/tloui_Demo.gif)";
		document.getElementById('menu_demo').style.background="url(/assets/images/tloui/img/menu_Sprite.jpg) -360px -4px";
	}
	else if(document.title == "Timothy Loui's Animations")
	{
		document.getElementById('title_container').style.backgroundImage="url(/assets/images/tloui/img_titles/tloui_Animations.gif)";
		document.getElementById('menu_animation').style.background="url(/assets/images/tloui/img/menu_Sprite.jpg) -360px -39px";
	}
	else if(document.title == "Timothy Loui's Fine Art")
	{
		document.getElementById('title_container').style.backgroundImage="url(/assets/images/tloui/img_titles/tloui_FineArt.gif)";
		document.getElementById('menu_fine_art').style.background="url(/assets/images/tloui/img/menu_Sprite.jpg) -360px -74px";
	}
	else if(document.title == "Timothy Loui's Resume")
	{
		document.getElementById('title_container').style.backgroundImage="url(/assets/images/tloui/img_titles/tloui_Resume.gif)";
		document.getElementById('menu_resume').style.background="url(/assets/images/tloui/img/menu_Sprite.jpg) -360px -107px";
	}
	else if(document.title == "Timothy Loui's Contact Info")
	{
		document.getElementById('title_container').style.backgroundImage="url(/assets/images/tloui/img_titles/tloui_ContactInfo.gif)";
		document.getElementById('menu_contact_info').style.background="url(/assets/images/tloui/img/menu_Sprite.jpg) -360px -140px";
	}
	else
		document.getElementById('title_container').style.backgroundImage="url(/assets/images/tloui/img_titles/tloui_Demo.gif)";
}

/****** Show description of image when cursor hovers ******/
/* NOT USED ANYMORE */
function show_image_text(event,text)
{
	document.getElementById('tempImgText').style.width= "250px";
	document.getElementById('tempImgText').innerHTML = text;
}

/****** Remove description of image when cursor does not hover over image ******/
/* NOT USED ANYMORE */
function hide_image_text()
{
	document.getElementById('tempImgText').style.width=0;
	document.getElementById('tempImgText').innerHTML = "";
}

/****** Increases an image's visibility ******/
/* NOT USED ANYMORE */
function mouseOn(cursor)
{
	cursor.filters.alpha.opacity=100;
	cursor.style.opacity=1;
}

/****** Decreases an image's visibility ******/
/* NOT USED ANYMORE */
function mouseOff(cursor)
{
	cursor.filters.alpha.opacity=40;
	cursor.style.opacity=0.4;
}