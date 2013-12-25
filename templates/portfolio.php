<div>
    <!--<img alt="Under Construction" src="img/construction.gif"/>-->
    <!--<table>-->
    <p>Edited accupoints</p>
    <?php
         
         //echo $positions;
         if ( !empty($positions) )
         {
            echo "<table border='1'>
            <tr>
            <th>id</th>
            <th>username</th>            
            <th>ctime</th>
            <th>es</th>
            </tr>";               
       
            foreach ($positions as $position)
            {
                echo ("<tr>");
                echo("<td>{$position["id"]}</td>");
                echo("<td>{$position["username"]}</td>");
                echo("<td>{$position["ctime"]}</td>");
                echo("<td>{$position["es"]}</td>");
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