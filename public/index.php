<!DOCTYPE html>
<html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
      <meta charset="utf-8">
      <!-- mobile first -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">     
      <script src="./js/login.js"></script>   
      <link href="./css/carousel.css" rel="stylesheet"/>     

    
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
          
          <div class="container" style="margin-top:60px">
                    <!-- ====== caroudel start   ==== -->
                   <div id="myCarousel" class="carousel slide">
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                   <!-- Carousel items -->
                    <div class="carousel-inner">
                    <div class="active item"><img src="./img/cover1.jpg" alt="aaa"></div>
                    <div class="item"><img src="./img/cover2.jpg" alt="bbb"></div>
                    <div class="item"> <img src="./img/cover3.jpg" alt="ccc"></div>
                    </div>
                  <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                  </div>
                  <!-- ====== caroudel end   ==== --> 
               </div>    
                 
            
               <div class="container" style="margin-top:10px"> 
            
                <!-- Example row of columns -->
                <div class="row">
                  <div class="col-lg-4">
                    <h2>Propose Business Plan</h2>                    
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <img src="./img/bp6.jpg" class="img-circle" alt="img_src">
                    <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
                  </div>
                  <div class="col-lg-4">
                    <h2>Get Crowd Investing</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <img src="./img/bp8.jpg" class="img-circle" alt="img_src">
                    <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
                 </div>
                  <div class="col-lg-4">
                    <h2>Milestone Executing</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <img src="./img/bp5.jpg" class="img-circle" alt="img_src">
                    <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
                  </div>
                </div>           
                   <hr>
                <footer>
                  <!--<p>&copy; Company 2013</p>-->
                </footer>       
             </div>  <!-- end of container -->          
  </body>
  </html>
<?php     
     // configuration
     require("../includes/config.php");      
        
     if (!empty($_SESSION["id"]))
     {
        $rows = query("SELECT id, username, html, ctime,es FROM profolio WHERE id = ?", $_SESSION["id"]);
        //echo $_SESSION["id"];  
        //echo $_SESSION["username"];     
     }
     
     $positions = array();
     foreach ($rows as $row)
     {
         //$stock = lookup($row["symbol"]);
         if ($row !== false)
         {
             $positions [] = [
                 "id" => $row["id"],
                 "username" => $row["username"],
                 "ctime" => $row["ctime"],
                 "es"=> $row["es"]
             ];
         }
     }  

    // render portfolio
    //render("portfolio.php", ["title" => "Portfolio"]);
    render("portfolio.php", ["positions" => $positions, "title" => "Portfolio"]);
    
?>