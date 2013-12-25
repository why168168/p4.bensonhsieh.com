<div>   
    <h3 style="color:purple">Capital Table</h3>
   
    <?php         
    
         if ( !empty($cipitals) )
         {
            echo "<table border='1' align='center'>
            <tr>
            <th>ID</th>
            <th>username</th>            
            <th>Business Plan</th>
            <th>Inventor</th>
            <th>Money</th>
            <th>Percentage(%)</th>            
            </tr>";               
       
            foreach ($cipitals as $cipital)
            {
                echo ("<tr>");
                echo("<td>{$cipital["id"]}</td>");
                echo("<td>{$cipital["username"]}</td>");
                echo("<td>{$cipital["bp_name"]}</td>");
                echo("<td>{$cipital["inventor"]}</td>");
                echo("<td>{$cipital["money"]}</td>");
                echo("<td>{$cipital["percentage"]}</td>");
                echo("</tr>");
            }
            echo "</table>"; 
        }
        /*
        foreach ($positions as $position)
        {
            print("<tr>");
            print("<td>{$position["id"]}</td>");
            print("<td>{$position["username"]}</td>");
            print("<td>{$position["html"]}</td>");
            print("<td>{$position["ctime"]}</td>");
            print("</tr>");
        }
        */

    ?>
    <!--</table>-->
</div>
<div>
    <a href="logout.php">Log Out</a>
</div>