<?php

session_start();

include 'dbh.php';



$sql="SELECT lid, name , dob
FROM  lawyer";
    
$records=mysqli_query($conn, $sql);

?>

<html>

    <head>
    
        <title>Lawyer Details - JDBMS</title>
    
    </head>
    
    <body>
    
        <h3>Lawyer Details: </h3>    
        
        <table width ="1250" border="1" cellpadding="1" cellspacing="1">
        
            <tr>
            
                <th>LAWYER ID</th>
                <th>NAME</th>
                <th>DATE OF BIRTH</th>

            </tr>
        
        <?php
            
            while ($lawyer=mysqli_fetch_array($records)){
                echo "<tr>";
                
                echo "<td>".$lawyer['lid']."</td>";
                
                echo "<td>".$lawyer['name']."</td>";

                echo "<td>".$lawyer['dob']."</td>";
            
                
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