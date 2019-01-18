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

    $con = $_POST['addcountry'];
    $sql = "INSERT INTO `country` (country) values ('".$con."') ";
    
    $result= $conn->query($sql);
    echo 'New Country is added'; 
    
}

?>


<html>
<head>
    <title>Add country</title>
    <body>


    <form action="<?php print $_SERVER["PHP_SELF"];?>" method="post" name="addcountry">
  Add Country:<br>
  <input type="text" name="addcountry"><br>
  <button type="submit">Add</button>
</form>
 <a href="country.php"> Back</a>
    </body>

</head>

</html>
