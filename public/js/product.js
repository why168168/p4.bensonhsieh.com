function click_img($img_src) {
	
	// Create a new image element
	
	//var new_image_element = "<img class='stickers circular' src='" + image.url + "'>";	
	//$('#panel_1').html(new_image_element);
	
	//$('#panel_1').prepend(new_image_element);        	
	//$('#inside1').remove();
	
	
	if ( $('#img1').html() == null  ) 
	{
		var new_image_element = "<img id='img1' src='" + $img_src + "'  alt='picture'/> "  
		                      + "<h2> EV 1 </h2>"
		                      + "<p> About Image </p>";
		$('#inside1').html(new_image_element);
	}
	else if ( $('#img2').html() == null  ) 
	{
		var new_image_element = "<img id='img2' src='" + $img_src + "'  alt='picture'/> "  
		                      + "<h2> EV 2 </h2>"
		                      + "<p> About Image </p>";
		$('#inside2').html(new_image_element);
	}
	else if ( $('#img3').html() == null  ) 
	{
		var new_image_element = "<img id='img3' src='" + $img_src + "'  alt='picture'/> " 
		                      + "<h2> EV 3 </h2>"
		                      + "<p> About Image </p>";
		$('#inside3').html(new_image_element);
	}else if ( $('#img4').html() == null  ) 
	{
		var new_image_element = "<img id='img4' src='" + $img_src + "'  alt='picture'/> " 
		                      + "<h2> EV 4 </h2>"
		                      + "<p> About Image </p>";;
		$('#inside4').html(new_image_element);
	}else if ( $('#img5').html() == null  ) 
	{
		var new_image_element = "<img id='img5' src='" + $img_src + "'  alt='picture'/> " 
		                      + "<h2> EV 5 </h2>"
		                      + "<p> About Image </p>";
		$('#inside5').html(new_image_element);
	}
	else
	{
		//$('#pick_window').remove();
	}	
			
}