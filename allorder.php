<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "speeddiv";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
   // echo "successful<br>";
}

$sql = "SELECT * FROM `orderplace`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num> 0){
     // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['id']."<br>" . $row['sname'] ."<br>". $row['saddress']."<br>". $row['spincode']."<br>". $row['diliverytype']."<br>". $row['date']."<br>";
        echo "<br>";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myorders</title>
</head>
<style>
    body {
      background-image: url(img3.jpg);
    
      background-repeat:repeat;
      height: 95vh;
      background-size: cover;
      background-position: center;
      font-size: 25px;
      font-family: cursive;
      color: rgb(92, 10, 10);
    }
</style>
<body>
    
</body>
</html>