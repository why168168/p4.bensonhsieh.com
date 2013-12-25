<?php     
     // configuration
     require("../includes/config.php");      
        
     if (!empty($_SESSION["id"]))
     {
        //$rows = query("SELECT * FROM capital WHERE id = ?", $_SESSION["id"]);  
        // fix id right now, implement next step
        $rows = query("SELECT * FROM capital WHERE id = ?", 66);        
     }
     
     $cipitals = array();
     foreach ($rows as $row)
     {
         //$stock = lookup($row["symbol"]);
         if ($row !== false)
         {
             $cipitals [] = [
                 "id" => $row["id"],                 
                 "username" => $row["username"],
                 "bp_name" => $row["bp_name"],
                 "inventor" => $row["inventor"],
                 "money" => $row["money"],
                 "percentage"=> $row["percentage"]
             ];
         }
     }  

    // render portfolio
    //render("portfolio.php", ["title" => "Portfolio"]);
    render("capital_form.php", ["cipitals" => $cipitals, "title" => "Capital Table"]);
    
?>