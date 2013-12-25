/*------------------------------------------------------------------
Check if the show button is clicked
Create an XMLHttpRequest object
Create the function to be executed when the server response is ready
Send the request off to a file on the server
Notice that a parameter (q) is added to the URL (with the content of the dropdown list)
-----------------------------------------------------------------------------------*/
function showLists()
{ 
	str = "id";
	if (str=="")
	  {	
	      document.getElementById("txtHint").innerHTML="";
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
	      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	    }
	  }
		
		    //alert('2');
			 xmlhttp.open("GET","queryLists.php?q="+str,true);
			 //xmlhttp.open("GET","queryLists.php",true);
			 xmlhttp.send();
}