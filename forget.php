
<?php

// $email=$_POST['email'];

// $conn= new mysqli('localhost','root','','speeddiv');
// if($conn->connect_error)
// {
//     die('Connection Failed'.$conn->connect_error);
// }else{
//    $select=mysqli_query("SELECT Emailid from register where Emailid=".$_POST['email']."'");
//    if(mysqli_num_rows($select))
//    {
//        echo"Succseeful";
       
//     //    alert("Email Confirmed Please Enter your New Password");
    
//    }
   
// }






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedDiv | Forget</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* background: #e4e4e4; */
            background:linear-gradient(135deg,#05073a,#06c0dcca);
        }

        .form-container {
            display: flex;
            height: 98vh;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
        
        .form-container .form-wrap {
            background: #fff;
            width: 30%;
            padding: 50px 20px;
            border-radius: 10px;
        }
        .form-container .form-wrap:hover{
            box-shadow: 2px -3px 22px 2px rgb(29, 16, 16);
            transition: 0.5s ease all;
        }

        .form-container .form-wrap h2 {
            text-align: center;
            margin: 0px 0px 20px;
            font-size: 19px;
        }

        .form-container .form-wrap .form-box {
            margin: 0px 0px 15px;
        }

        .form-container .form-wrap .form-box input[type="text"] {
            padding: 5px 8px;
            border-radius: 3px;
            border: 1px solid #353535;
            width: 100%;
            margin: 0px 0px 18px;
        }

        .form-container .form-wrap .form-box input[type="password"] {
            padding: 5px 8px;
            border-radius: 3px;
            border: 1px solid #353535;
            width: 100%;
            margin: 0px 0px 18px;

        }

        .form-container .form-wrap .form-submit {
            display: flex;
            justify-content: center;
        }

        .form-container .form-wrap .form-submit input[type='submit'] {
            padding: 4px 10px;
            border: none;
            border-radius: 2px;
            /* background: #353535; */
            background: linear-gradient(135deg,#05073a,#dc0606ca);
            color: #fff;
            font-weight: 800;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container .form-wrap .form-submit input[type='submit']:hover{
            background: crimson;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="#" method="post" class="form-wrap">
            <h2>Forget Page</h2>
            <div class="form-box">
                <input type="text" name="email"placeholder="Enter Email">
            </div>
            <div class="form-submit">
                <input type="submit" value="send">
            </div>
        </form>
    </div>
</body>

</html>