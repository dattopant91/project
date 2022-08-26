<?php
$cname=$_POST['cname'];
$cnumber=$_POST['cnumber'];
$cmessage=$_POST['cmessage'];

$conn= new mysqli('localhost','root','','speeddiv');
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into contact(cname,cnumber,cmessage)values(?,?,?)");
    $stmt->bind_param("sis",$cname, $cnumber,$cmessage);
    $stmt->execute();
    echo "
        <script>
        alert('Complain Sent Successfully');
        window.location.href='welcome.php';
        </script>
    ";
    
    $stmt->close();
    $conn->close();
}
?>