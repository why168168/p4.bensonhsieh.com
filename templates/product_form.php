<!doctype html>
<html>
<head>
    <meta charset="utf-8">   
    <link href="./css/style.css" rel="stylesheet">  
    <link rel="stylesheet" href="./css/style1.css" type="text/css" media="screen" />     
    <link href="./css/bootstrap.min.css" rel="stylesheet">       
    <link href="./css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">       
    <link herf="./css/carousel.css" rel="stylesheet"/>
    
    <script type="text/javascript" src="./js/propose.js"></script> 
    <!--<script type="text/javascript" src="./js/jquery1.js"></script>-->  
  
    <script type="text/javascript" src="./js/moving.js"></script>  
    <script type="text/javascript" src="./js/product.js"></script>     
</head>
<body>         
   <div id="middle">   
      <h3> Demo product editing </h3> 
      <div id="product_demo" style="margin-top:10px;float:left " >  
          <h2 style="color:purple;align:left"> Demo window </h2>                 
                <ul>
                    <table>
                          <div id="wrapper" style='margin-left:0px;'>	
                           
                            <div id="slider">                               
                            <img class="scrollButtons left" src="./img/fancy-left0.png" width="20px" height="40px">
                      			<div style="overflow: hidden;" class="scroll">
                  					<div class="scrollContainer">
                  	          <div class="panel" id="panel_1">
                  		  				<div class="inside" id="inside1">
                  							<!--<img id="img1" src="./img/ev/v1.jpg" alt="picture" />-->
                  							<h2>Select Image 1</h2>                  							
                  						</div>
                  					</div>

                  	        <div class="panel" id="panel_2">
                  						<div class="inside" id="inside2">
                  							<!--<img src="./img/ev/v2.jpg" alt="picture" />-->
                  							<h2>Select Image 2</h2> 
                  					</div>
                  					</div>
                  			      <div class="panel" id="panel_3">
                  						<div class="inside" id="inside3">
                  							<!--<img src="./img/ev/v3.jpg" alt="picture" /> -->
                  							<h2>Select Image 3</h2> 
                  						</div>
                  					</div>
                  					<div class="panel" id="panel_4">
                  						<div class="inside" id="inside4">
                  							<!--<img src="./img/ev/v4.jpg" alt="picture" /> -->
                  							<h2>Select Image 4</h2> 
                  						</div>
                  					</div>
                    				<div class="panel" id="panel_5">
                  						<div class="inside" id="inside5">
                  							<!--<img src="./img/ev/v5.jpg" alt="picture" /> -->
                  							<h2>Select Image 5</h2> 
                  						</div>
                  					</div>
                  	      </div>
                  			
                        </div>
                  			<img class="scrollButtons right" src="./img/fancy-right0.png" width="15px" height="40px">
                            <div id="left-shadow"></div> 
                            <div id="right-shadow"></div> 
                           <div align=center valign=top style="font-size: 10px;color: #dadada;" id="dumdiv">
                           <a href="http://www.hscripts.com" id="dum" style="font-size: 10px;color: #dadada;text-decoration:none;color: #dadada;">&copy;h</a></div>
                      </div>
                     </div>        
                    </table>
                  </ul> 
               </div>            
               
               
      <!-- pick the picture from the marquee -->   		
		<div style="float:left; margin-left:150px;border:2">					 
			<div id="pick_window" > 
			  <h2 style="color:purple">Pick images</h2>
	    	  <marquee height="350" width="250" bgcolor="#ffffff" scrollamount="5" loop="60" 
	    	   direction="up" onmouseover="this.stop()" onmouseout="this.start()">
         
                  <div align="left" style="margin: 10px;">
                      <img class='stickers' src="./img/ev/v1.jpg" onClick=click_img(this.src);> 
                  </div> 
                  <div align="left" style="margin: 10px;">
                      <img class='stickers' src="./img/ev/v2.jpg" onClick=click_img(this.src);>  
                  </div>           
                  <div align="left" style="margin: 10px;">
                      <img class='stickers' src="./img/ev/v3.jpg" onClick=click_img(this.src);>
                  </div> 
                  <div align="left" style="margin: 10px;">
                      <img class='stickers' src="./img/ev/v4.jpg" onClick=click_img(this.src);> 
                  </div>  
                  <div align="left" style="margin: 10px;">
                      <img class='stickers' src="./img/ev/v5.jpg" onClick=click_img(this.src);>                   
                  </div>                      
         </marquee>
        </div> 
  	  </div>  
   </div> 
</body>
</html>
