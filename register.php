
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regstyle.css">
    <title>Registration Form</title>
    <link rel="icon" href="icon.png" type = "image/x-icon">
</head>
<style>
.details .details-box .detail {
    width:auto;
}
form .button input {
    background: white;
    border-radius: 10px;
}
form .button input:hover{
    background-color: rgb(8, 160, 97) ;
}
</style>
<body>
    <div class="container">
        <div class="heading">Registration</div>
        <form action="config.php" method="post">
            <div class="details">
                <div class="details-box">
                    
                    <label for="id">ID:-</label>
                    <input type="number" id="id"class="detail" name="id"required>

                    <label for="nameid">Full Name:-</label>
                    <input type="text" id="nameid"class="detail" placeholder="Enter Your Full Name" name="Name"required>
                </div>
                <div class="details-box">
                    <label for="emailid"> Email-id:-</label>
                    <input type="email" id="emailid"class="detail" placeholder="xyz@gmail.com" name="Emailid">
                </div>
                <div class="details-box">
                    <label for="mobid">Mobile no:-</label>
                    <input type="tel" id="mobid"class="detail" maxlength="10" placeholder="Enter your no here" name="mobile_no">
                </div>
                <div class="details-box">
                    <label for="addid">Enter Address</label>
                    <input type="text" class="detail" id="addid" placeholder="Enter your Address" name="address">
                </div>
                <div class="details-box">
                    <label for="inputusername">Username</label>
                    <input type="text"placeholder="eg:-A01" autocomplete="off" class="detail"name="username" id="inputusername">
                </div>
                <div class="details-box">
                    <label for="inputpassword">Password</label>
                    <input type="password" class="detail" placeholder="Ram@123" name="password" id="inputpassword"> 
                </div>
                <div class="details-box">
                    <label for="inputcpassword">Confirm_Password</label>
                    <input type="password" class="detail" placeholder="Confirm Password" name="confirm_password" id="imputcpassword">
                </div>
            </div>
            <div class="circle-form">
                <label for="m">Male</label>
                <input type="radio" class="gender" name="Gender" id="m"value="m">&nbsp;
                <label for="f">Female</label>
                <input type="radio" name="Gender" class="gender"id="f" value="f">

            </div>
            <div class="button">
                <input type="submit" value="Register">&nbsp;
                <input type="reset" value="Reset">
            </div><br>
            <a href="login.php" style="color:white">If already registered click here</a>
        </form>
    </div>
</body>
</html>
     
