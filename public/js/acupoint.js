// once/ the window has loaded
$(window).load(function() {
    // triggle event
    window_load();
    
});

function window_load()
{
	 // default radio button -- general
	 // contrust the radio button
	 construct_radio(rad_body_general);
	 
	 // listen for click on body radio
    $("#select_body_part").change(function() {
        if ($("#select_body_part").val() == 'body1')
            select_body_part("body1");
        else if ($("#select_body_part").val() == 'body2')
            select_body_part("body2");
        else if ($("#select_body_part").val() == 'body3')
            select_body_part("body3");
        else if ($("#select_body_part").val() == 'body4')
            select_body_part("body4");
        else if ($("#select_body_part").val() == 'body5')
            select_body_part("body5");    
    }); 
    
    radio_select();
    
    // event handle for marquee
    //imgScroll();
    
    // handle the sticker search
    $('#sticker-search-btn').click(function() {
        sticker_search();
    });
    
    // handle the refresh
    $('#refresh-btn').click(function() {
        refresh();
    });
    
    // handle print
    $('#print-btn').click(function() {
        print();
    });
    
    // handle save button click
    /*
    $('#save_btn').click(function() {
    	  storeList();
    });
    */
    
    /*
    // handle control click
    $('#controls').on('click', '.stickers', function() {
        control_click();
    });
    */
    
    // handle recipient_keyup 
    $('#recipient').keyup(function() {
        recipient_keyup();
    });
        
    
   // handle the sticker keyup
   $('#controls').on('click', '.stickers', function() {

	// Clone the sticker that was clicked
	var new_sticker = $(this).clone();
	
	// A class so we can position stickers on the
	new_sticker.addClass('stickers_on_card');
	
	// Inject the new image into the canvas
	$('#canvas').prepend(new_sticker);
	
	// Make that puppy draggable
	new_sticker.draggable({containment: '#canvas', opacity:.35});
		
   });
   
   // handle the marker pick   
   $('#marker_pick').on('click', '.stickers', function() {

	// Clone the sticker that was clicked
	var new_sticker = $(this).clone();
	
	// A class so we can position stickers on the
	new_sticker.addClass('stickers_on_card');
	
	// Inject the new image into the canvas
	$('#canvas').prepend(new_sticker);
	
	// Make that puppy draggable
	new_sticker.draggable({containment: '#canvas', opacity:.35});
		
   });
   
   $('#re_img1').resizable({
			animate: true
		});
   
}



function radio_select()
{
	$('.radio_select').click(function() {	        
          
		 // Which radio button was clicked?
		 // (Note here how we're storing a whole element in a variable... cool, huh?)
		 var radio_button = $(this);

		 // What is the label next to (i.e. after) that radio 
		 var label = radio_button.next();

		 // Now that we know the label, grab the text inside of it (That's our message!)
		 var message = label.html();
			
		$('#message-output').html(message);
    });
}

function select_body_part(body_part)
{
	if(body_part == "body1")
	{
		// contrust the radio button
		construct_radio(rad_body_general);
	}	  
   else if(body_part == "body2")
   {
   	// contrust the radio button
		construct_radio(rad_body_head);
   }
   else if(body_part == "body3")
   {
      // contrust the radio button
		construct_radio(rad_body_chest);	
   }
   else if(body_part == "body4")
   {
   	// contrust the radio button
		construct_radio(rad_body_back);
   }
   else if(body_part == "body5")
   {
   	// contrust the radio button
		construct_radio(rad_body_stomach);
   }
}

/**
 * Renders seating chart.
 */
function construct_radio(body)
{   
    var html = "";
    html += "<h2>Please chose the Item:</h2>";    
    
    //for (var i = 0; i < body.length; i++)
    for (var i in body)
    {      	  
    	  if (body[i] == null)
        {
            html += "<li>Empty </li>";
        }
        else
        {            
            html += "<input type='radio' class='radio_select' name='message'";            
            html += "id ="; 
            html += body[i];
            html += ">";
            html += "<label for=";
            html += body[i];
            html += ">";
            html += body[i];
            html += "</label>";
            html += "<br>";           
        }
    }   
    $('#radio_body').html(html);
    
    radio_select();
}

/*-------------------------------------------------------------------------------------------------
Sticker search with Ajax!
https://developers.google.com/image-search/v1/jsondevguide#using_json
http://api.jquery.com/jQuery.getJSON/
-------------------------------------------------------------------------------------------------*/
function sticker_search() {

	// First, clear out the results div in case we've already done a search
	// FYI- The results div is where the new stickers go...so if we've done this search before, it wouldn't be empty
	$('#sticker-search-results').html('');

	// What search term did the user enter?
	var search_term = $('#sticker-search').val();
		
	// This is the URL for Google Image Search that we'll make the Ajax call to
	var google_url = 'http://ajax.googleapis.com/ajax/services/search/images?v=1.0&imgsz=medium&q=' + search_term + '&callback=?';	
		
	// getJSON is a Ajax method provided to us by jQuery
	// It's going to make a call to the url we built above, and let us work with the results that Google sends back
	// Everthing in the function below is what will occur when getJSON is done and sends us the results back from Google
	$.getJSON(google_url, function(data){
	
		// This line will basically parse the data we get back from Google into a nice array we can work with
	    var images = data.responseData.results;
	
		// Only attempt to do the following if we had images...I.e there was more than 0 images
	    if(images.length > 0){
			
			// .each() is a jQuery method that lets us loop through a set of data. 
			// So here our data set is images
			// Essentially we're unpacking our images we got back from Google
	        $.each(images, function(key, image) {
	        
	        	// Create a new image element
	        	var new_image_element = "<img class='stickers circular' src='" + image.url + "'>";
	        	
	        	// Now put the new image in our results div
	            $('#sticker-search-results').prepend(new_image_element);
	
	        });
	    }	   
	});			
}

/*-------------------------------------------------------------------------------------------------
Start over
-------------------------------------------------------------------------------------------------*/
//$('#refresh-btn').click(function() {
function refresh(){	
	
	// Reset color and texture
	//$('#canvas').css('background-color', 'white');
	$('#canvas').css('background-image', '');
	
	// Clear message and recipient divs
	$('#message-output').html("");
	//$('#message-output').html("");
	$('#recipient-output').html("");
		
	// Remove any stickers
	$('.stickers_on_card').remove();

}

/*-------------------------------------------------------------------------------------------------
Print
-------------------------------------------------------------------------------------------------*/
function print() {
	
	// Goal: Open the card in a new tab
   
    // Take the existing card on the page (in the #canvas div) and clone it for the new tab
    //var canvas_clone = $('#canvas').clone();
    var canvas_clone = $('#for_image').clone();
        
    /* 
    Next, we need to get the HTML code of the card element
    We can't just say canvas.html() because that will get us the stuff *inside* the #canvas:
    
    	<div id="message-output"></div>
		<div id="recipient-output"></div>
		
	Think of a turkey sandwich. The above gets us just the inside of the sandwich, the turkey... But we need the bread too.
		
    I.e., this is what we want:
    
   		<div id="canvas" style="background-image: url(images/texture-cloth.png);">
			<div id="message-output"></div>
			<div id="recipient-output"></div>
		</div> 
    
    To accomplish this we'll use a new method .prop (short for property) and request the "outerHTML" property of the canvas.
    In JavaScript land, "outerHTML" is both the bread and the meat of an element. 
    (Don't let it confuse you, the name outerHTML sounds kinda like it would just be the bread...it's not...it's the whole sammie).
    */
    var canvas = canvas_clone.prop('outerHTML'); // Give us the whole canvas, i.e the bread and the meat, i.e the complete card from our clone
    	    
    // Now that we have the entire canvas let's focus on creating our new tab
    
    // For the new tab, we need to basically construct all the pieces we need for any HTML page starting with a start <html> tag.
    var new_tab_contents  = '<html>';
    
    // (Note the += symbol is used to add content onto an existing variable, so basically we're just adding onto our new_tab_contents variable one line at a time)
    new_tab_contents += '<head>';
    new_tab_contents += '<link rel="stylesheet" href="css/main.css" type="text/css">'; // Don't forget your CSS so the card looks good in the new tab!
    new_tab_contents += '<link rel="stylesheet" href="css/features.css" type="text/css">';
    new_tab_contents += '</head>';
    new_tab_contents += '<body>'; 
    new_tab_contents += canvas; // Here's where we add the card to our HTML for the new tab
    new_tab_contents += '</body></html>';
       
	 //alert(canvas);
	 console.log(new_tab_contents);
	 
	 // Ok, our card is ready to go, we just need to work on opening the tab
    
    // Here's how we tell JavaScript to create a new tab (tabs are controlled by the "window" object).
    var new_tab =  window.open();

	// Now within that tab, we want to open access to the document so we can make changes
    new_tab.document.open();
    
    // Here's the change we'll make: we'll write our card (i.e., new_tab_contents) to the document of the tab
    new_tab.document.write(new_tab_contents);
    
    // Then close the tab. This isn't actually closing the tab, it's just closing JS's ability to talk to it.
    // It's kind of like when you're talking to a walkie-talkie and you say "over and out" to communicate you're done talking
    new_tab.document.close();
    
    
}

/*-------------------------------------------------------------------------------------------------
Stickers
Note here we use the .on() method instead of just .click()
This is because we want this listener to also apply to the Google Image Stickers which are
added *after* the page loads. In order to do this, on has to be used, and we have to delegate the
listening for .stickers to the #controls div.
-------------------------------------------------------------------------------------------------*/	
function control_click() {

	// Clone the sticker that was clicked
	var new_sticker = $('.stickers').clone();
	
	// A class so we can position stickers on the
	new_sticker.addClass('stickers_on_card');
	
	// Inject the new image into the canvas
	$('#canvas').prepend(new_sticker);
	
	// Make that puppy draggable
	new_sticker.draggable({containment: '#canvas', opacity:.35});
		
}

/*-------------------------------------------------------------------------------------------------
Recipient
-------------------------------------------------------------------------------------------------*/

function recipient_keyup() {

	// Figure out what the user typed in
	var recipient = $('#recipient').val();
	
	// Inject the recipient into the output div on the card
	$('#recipient-output').html(recipient);
	
	// How long was the recipient?
	var length = recipient.length;
	
	// If it was 14 characters, that's the max, so inject an error message
	if(length == 50) {
		$('#recipient-error').html("Max characters: 50");
	}
	// Otherwise, we're all good, clear the error message
	else {
		$('#recipient-error').html("");
	}
	
	// Note: The "maxlength" attribute on the HTML element will prevent the user from entering more than 14 characters
	// <input type='text' id='recipient' maxlength="14"> 
	
}


/* 
* for horizontal marquee
*/
function imgScroll(){
var img;
 img = $(".inline-image").first();
 img.animate({width:0},2500,'linear',function(){
   img.remove();
   $(".imgholder").append(img);
   imgScroll();
 });
}