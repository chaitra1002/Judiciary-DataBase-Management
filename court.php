<?php

session_start();

include 'dbh.php';



$sql="SELECT courtid, category , location
FROM  court";
    
$records=mysqli_query($conn, $sql);

?>

<html>

    <head>
    
        <title> Court Details - JDBMS</title>
    
    </head>
    
    <body>
    
        <h3>Court Details: </h3>    
        
        <table width ="1250" border="1" cellpadding="1" cellspacing="1">
        
            <tr>
            
                <th>COURT ID</th>
                <th>CATEGORY</th>
                <th>LOCATION</th>

            </tr>
        
        <?php
            
            while ($court=mysqli_fetch_array($records)){
                echo "<tr>";
                
                echo "<td>".$court['courtid']."</td>";
                
                echo "<td>".$court['category']."</td>";

                echo "<td>".$court['location']."</td>";
            
                
                echo "<tr>";
            }
        
            if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
        ?>
        </table>
    
    
    
    </body>
</html>