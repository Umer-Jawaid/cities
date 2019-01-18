
<!DOCTYPE html>
<html>
<body>

<h1>Countries informations</h1>


<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "newpassword";
$dbname = "cities";

//creat connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection


if ($conn->connect_error) {

    die ("connection failed:" .$conn->connect_error);
}


        

echo '<a href="addcountry.php"> Add Country </a><br><br>';



$sql = "SELECT * FROM `country`";
$result= $conn->query($sql);if($result->num_rows> 0) 
{  
    // output data ofeachrow
    
    while($row= $result->fetch_assoc())
     {
        echo '<a href="cityinfo.php?cid='.$row["id"].'">'.$row["country"].'</a><br>';} 
        //echo " " . $row["id"] . "-". $row["country"]. "<br>";}
        } 
        
        else 
        {
            echo"0 results";
            


        }
        
      
        
        $conn->close();

?>

</body>
</html>
