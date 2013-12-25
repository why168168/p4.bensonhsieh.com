<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {     
        // validate submission
         if (empty($_SESSION["username"]) || empty($_SESSION["id"]) )
         {
             apologize("You must login or register an account.");
             
             // redirect to login
             redirect("./login.php");
         }          
        
        // query database for user
        $result = query( "INSERT INTO profolio (id, username, es, ds, cn, ct, pd, sa, ma, sf, ip, rc, rb, rd, sm, fi, mf, ot) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"           , $_SESSION["id"], $_SESSION["username"], $_POST["txta_es"], $_POST["txta_ds"], $_POST["txta_cn"]           , $_POST["txta_ct"], $_POST["txta_pd"], $_POST["txta_sa"], $_POST["txta_ma"], $_POST["txta_sf"]           , $_POST["txta_ip"], $_POST["txta_rc"], $_POST["txta_rb"], $_POST["txta_rd"], $_POST["txta_sm"]           , $_POST["txta_fi"], $_POST["txta_mf"], $_POST["txta_ot"]
        ); 
                
        if ($result === false)
        {
            apologize("Can not insert to the DB");
        }
        
        else if ($result !== false)
        {            
            // redirect to index            
            redirect("./index.php");    
                      
        }            
    }
    else
    {
        // else render form
        render("propose_form.php", ["title" => "Propose"]);       
    }

?>
