/*------------------------------------------------------------------
Check if the store button is clicked
Create an XMLHttpRequest object
Create the function to be executed when the server response is ready
Send the request off to a file on the server
Notice that a parameter (q) is added to the URL (with the content of the dropdown list)
-----------------------------------------------------------------------------------*/
function storeList()
{  
	var str = genHtml();
	if (str=="")
	  {	
	      document.getElementById("for_image").innerHTML="";
	      return;
	  } 
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	      xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	      xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	      document.getElementById("for_image").innerHTML=xmlhttp.responseText;
	    }
	  }
		    //alert(str);
		    
			 xmlhttp.open("GET","storeList.php?q_html="+str,true);
			 //xmlhttp.open("GET","queryLists.php",true);
			 xmlhttp.send();
}

function genHtml() {
	 //alert($('#for_image'));
	 //var image = document.getElementById("for_image");
	
	 var canvas_clone = $('#for_image').clone();
	 //var canvas_clone = image.clone();
	 
	
	 var canvas = canvas_clone.prop('outerHTML'); // Give us the whole canvas, i.e the bread and the meat, i.e the complete card from our clone
        
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
    
    return new_tab_contents;
}
