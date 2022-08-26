<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $name= $_POST['sname'];
    $mobileno = $_POST['smobileno'];  
    $address = $_POST['saddress'];
    $pincode = $_POST['spincode'];
  $conn = new mysqli('localhost','root','','speeddiv');
  if($conn->connect_error){
    die('Conection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into orderplace(sname, smobileno,saddress,spincode) values(?,?,?,?)");
    $stmt->bind_param("sisi",$name,$mobileno,$address,$pincode);
    $stmt->execute();
    echo"
    <script>
      alert('Record successful');
      window.location.href='welcome.php';
    </script>
    ";
    $stmt->close();
    $conn->close();
  }
}
?>