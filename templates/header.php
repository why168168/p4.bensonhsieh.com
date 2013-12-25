<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <link href="../public/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../public/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="../public/css/styles.css" rel="stylesheet"/>
        <link href="../public/css/carousel.css" rel="stylesheet"/>        
        <?php if (isset($title)): ?>
            <title>DWA15 Project4: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>DWA15 Project4</title>
        <?php endif ?>

        <script src="../public/js/jquery-1.10.2.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/scripts.js"></script>
        <script src="../public/js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../public/js/bootstrap.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div class="navbar navbar-inverse  navbar-fixed-top">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="./index.php" style="font-size:20px">Crowd Investing!</a>
                    </div>
                    <div class="navbar-collapse collapse" style="width:1200px">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="./index.php">Home</a></li>
                         <li><a href="./product.php">Product</a></li>
                        <li><a href="./propose.php">Propose</a></li>
                        <li><a href="./template.php">Template</a></li>
                        <li><a href="./capital.php">Capital</a></li>
                       
                        
                      </ul>          
                      <form class="navbar-form navbar-right" action="login.php" method="post">       
                        <?php if( isset($_SESSION['username']) || isset($_SESSION['id']) ) { ?>
                            <input id="btn_signout" type="button" class="btn btn-success" onClick="location.href='./logout.php'" value="Log out">            
                        <?php  } else { ?>                              
                        
                        <div class="form-group">            
                            <input id="username" name="username" type="text" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                        </div>
                        
                        <!--<button id="btn_submit" type="submit" class="btn btn-success" onClick='login_check()'>Sign in</button>-->                        
                        <!--<button id="btn_signup" type="submit" class="btn btn_success" onClick="location.href='./register.php'">Sign up</button>-->
                        <input id="btn_submit" type="submit" class="btn btn-success" value="Sign in">
                        <input id="btn_signup" name="signup" class="btn" type="button" onClick="location.href='./register.php'" value="Sign up">
                        <?php  } ?>           
                        
                        <?php if( isset($_SESSION['username']) )  { ?>
                            <!--<label id="show_user" type="text" value="hello <?php echo $_SESSION['username']?> !"> -->
                            <label style="color:#99FFCC">&nbsp;&nbsp;Hello <?php echo $_SESSION['username']?> !</label>           
                        <?php  }  ?>
                     
                      </form>            
                          <!--<label id="in_text"  type="text" value="<?php $_SESSION['username']?>"></label> -->
                          <!--<label> <?php $_SESSION['username']?> </label> -->  
                    </div><!--/.navbar-collapse -->      
                   
                  </div>
                   	   
               </div> <!-- end of navbar -->                
            </div>
                <div id='txtHint' style="margin-top:60px"><p></div>
                <div id='txtUsername'><p></div>    
            
            <p style="color:red;font-size:20px"> <p>
            
            <div id="middle">  