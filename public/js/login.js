/*----------------------------
AJAX login check 
--------------------------------*/
function login_check() {
	
	//if( $('#username').val() == "" ||  $('#password').val() == "")
	    //return;
	    
	var l_username = $('#username').val();
	var l_password = $('#password').val();	
	
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
	
	  alert(l_username);
	  alert(l_password);
	  xmlhttp.open("GET","login.php?username="+l_username+"&"+"password="+l_password,true);			 
	  xmlhttp.send();
	  
	  
	  /*
	  if ($('#text-danger') == "")
	  {
	  	  $('#btn_submit').hide(); 
	     $('#btn_signup').hide();
	     $('#btn_signout').show(); 
	     alert("1");
	  }
	  */
	  
}

/*
// once/ the window has loaded
$(window).load(function() {
    // triggle event
    //window_load();
    $.ajax({
            url:'./login.php',
            cache:false,
            success:function(data){
                // Do something with the result
                if(data=="true"){
                    $('#mydiv').show();
                }else{
                    $('#mydiv').show();
                }
            } });
    
});
*/
