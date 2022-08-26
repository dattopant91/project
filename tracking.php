<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedDiv | Tracking</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #05073a, #dc0606ca);
        padding: 10px;
    }
    form {
        background: linear-gradient(135deg, #05073a, #06c0dcca);

        padding: 85px;
        display: block;
        border: 3px solid silver;
        border-radius: 8px;
    }

    form h1 {
        color: antiquewhite;
        position: relative;
        top: -50px;
        display: block;
    }

    .form-group input {
        display: block;
        width: 300px;
        height: 35px;
        border-radius: 8px;
    }


    .btn {
        position: absolute;
        padding: 10px;
        left: 48%;
        margin-top: 11px;
        border-radius: 8px;

    }
    .btn:hover {
        background: rgb(129, 218, 176);
    }
    .print {
    display: flex;
    position: absolute;
    bottom: 130px;
    left: 528px;
    border: 3px solid white;
    padding: 16px;
    width: 471px;
    background: linear-gradient(135deg, #05073a, #06c0dcca);
    justify-content: center;
    border-radius: 8px;
    font-size: 22px;
    color:white;
}
</style>

<body>

    <form class="form" role="search" action="<?php $_SERVER['PHP_SELF'];?>"method="POST">
        <h1>Track Your Courier</h1>
        <div class="form-group">
            <input type="search" name="trackingid" autocomplete="off" placeholder="Enter tracking number"
                title="Enter your tracking number here" id="trackingNumber" autofocus required>
             
        </div>

        <button class="btn" title="Track courier"target="_blank" type="submit"><b>Track<b></button>
    </form>
<div class="mystatus">
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $conn= mysqli_connect('localhost','root','','speeddiv') or die("Connection Failed");
         $tid=$_POST['trackingid'];
    //    echo"$tid";
        $sql="SELECT orderstatus FROM orderplace WHERE id=$tid";

        $status=mysqli_query($conn,$sql) or die("Invalid Tracking id  ");
        while ($row = $status->fetch_assoc()) {
            ?>
            <div class="print">
                <?php
                echo $row['orderstatus']."<br>";
                ?>
            </div><?php
        }
            // echo "$status";
         
         }
             ?> 

 
 


</div>

</body>

</html>