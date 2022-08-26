<?php
$id=$_POST['id'];
$name=$_POST['Name'];
$Emailid=$_POST['Emailid'];
$mobile_no=$_POST['mobile_no'];
$address=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$gender=$_POST['Gender']; 

if($password != $confirm_password)
{
    echo"<h1>Password Does not match</h1>";
}
else{
  password_hash($password,PASSWORD_DEFAULT);
}

$conn= new mysqli('localhost','root','','speeddiv');
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into register(id,name,Emailid,mobile_no,address,username,password,confirm_password,Gender)values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ississsss",$id,$name, $Emailid,$mobile_no, $address, $username, $password, $confirm_password, $gender);
    $stmt->execute(); 
    echo"
    <script>
      alert('Registration successful');
      window.location.href='login.php';
    </script>
    ";;
    $stmt->close();
    $conn->close();
}