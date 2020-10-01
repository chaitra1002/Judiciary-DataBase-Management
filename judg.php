<?php

session_start();

include 'dbh.php';



$sql="SELECT jid, name , dob
FROM  judge";
    
$records=mysqli_query($conn, $sql);

?>

<html>

    <head>
    
        <title>Judge Details - JDBMS</title>
    
    </head>
    
    <body>
    
        <h3>Judge Details: </h3>    
        
        <table width ="1250" border="1" cellpadding="1" cellspacing="1">
        
            <tr>
            
                <th>JUDGE ID</th>
                <th>NAME</th>
                <th>DATE OF BIRTH</th>

            </tr>
        
        <?php
            
            while ($judge=mysqli_fetch_array($records)){
                echo "<tr>";
                
                echo "<td>".$judge['jid']."</td>";
                
                echo "<td>".$judge['name']."</td>";

                echo "<td>".$judge['dob']."</td>";
            
                
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