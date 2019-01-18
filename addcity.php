<?php


if(!empty($_POST))
{
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

    $con = $_POST['addcity'];
    $c = $_POST['country'];
    $sql = "INSERT INTO `city` (cityname,countryid) values ('".$con."',$c) ";
        
    $result= $conn->query($sql);
    echo 'New city is added'; 
    
}
$countryid= $_GET['cid'];
?>


<html>
<head>
    <title>Add City</title>
    <body>

    

    <form action="<?php print $_SERVER["PHP_SELF"].'?cid='.$countryid;?>" method="post" name="addcity">
  Add city:<br>
  <input type="text" name="addcity"><br>
  <input type="hidden" name="country" value="<?php print $countryid?>">
  <button type="submit">Add</button>
</form>
 <a href="cityinfo.php?cid=<?php print $countryid?>"> Back</a>
    </body>

</head>

</html>
