<?php
$username=$_POST['username'];
$password=$_POST['password'];

$conn=new mysqli('localhost','root','','speeddiv');
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}else{
    $stmt=$conn->prepare("select * from register where username=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows > 0){
           $data= $stmt_result->fetch_assoc();
           if($data['password']=== $password){
            //    echo"login Successfull";
               header("location:welcome.php");
           }else{ 
               echo"
                    <script>
                    alert('Invalid Email Id or Password');
                    window.location.href='login.php';
                    </script>
                    ";
        }
    }else{
        echo"<h1> invalid username or password</h1>";
    }
}
?>