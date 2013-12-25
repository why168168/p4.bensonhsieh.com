<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Your confirmation is not the same as the password");
        }

        // query database for user
        $result = query("INSERT INTO users (username, password) VALUES(?, ?)", $_POST["username"], crypt($_POST["password"]));
                
        if ($result === false)
        {
            apologize("Can not insert to the DB");
        }
        else if ($result !== false)
        {
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            
            $row = $rows[0];
            
            // remember that user's now logged in by storing user's ID in session
            $_SESSION["id"] = $row["id"];            
            $_SESSION["username"] = $_POST["username"];
            
            //echo($row);
            //echo($_SESSION["id"]);
            
            // redirect to index            
            redirect("./index.php");                
        }   
      //echo($result);     
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);       
    }

?>
