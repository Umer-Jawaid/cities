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
 $countryid= $_GET['cid'];
 $sql = "SELECT * FROM `city` where countryid=$countryid";

?>
<html>
<head>
    <title>Nordic Countries information</title>
    
</head>
<body>

<h2>Following are the cities names of selected country</h2>




<?php 
$result= $conn->query($sql);if($result->num_rows> 0) 
{  
    // output data ofeachrow
    
    while($row= $result->fetch_assoc())
     {
     
        echo " " . $row["id"] . "-". $row["cityname"]. " with population of ". $row["invanare"]." people "."<br>";}
        } 
        
        else 
        {
            echo"0 results";
            


        }$conn->close();
?>
<a href="addcity.php?cid=<?php print $countryid;?>"> Add City </a>  |  <a href="country.php"> Back</a>


</body>
</html>
