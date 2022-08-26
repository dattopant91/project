<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedDiv | Home</title>
    <link rel="icon" href="icon.png" type = "image/x-icon">
    
    <style>
        * {
            margin: 0;
            padding: 0;
        }
            
        #preloader{
        background: #000 url(images/giphy.gif) no-repeat center center;
        background-size: 15%;
        height: 100vh;
        left: 0;
        top: -6px;
        width: 100%;
        position: fixed;
        z-index: 100;
        }
        .bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(background.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .title {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
        }

        .title h1 {
            color: white;
            font-size: 70px;
            text-shadow: 2px 2px 5px rgb(155, 151, 97);
            margin: 20px 0 10px 0;
        }

        .title h3 {
            color: white;
            font-weight: 200;
            letter-spacing: 3px;
            font-size: 40px;
            text-shadow: 1px 1px 2px rgb(226, 36, 11);
        }

        .title h1 span {
            font-family: 'Clicker Script', cursive;
            color: rgb(233, 92, 92);
        }

        .button {
            position: absolute;
            top: 130%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .btn {
            border-radius:8px;
            text-decoration: none;
            padding: 10px 30px;
            border: 1px solid white;
            color: white;
            transition: 0.6s ease;
        }

        .btn:hover {
            background-color: white;
            color: black;
        }


        section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: linear-gradient(#DA22FF, #9733EE); */
            clip-path: circle(30% at right 70%);
        }

        section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: linear-gradient(#E55D87, #5FC3E4); */
            clip-path: circle(20% at 10% 10%);
        }
        @media screen and (max-width:700px) {
            .bg{
                background-position: revert;
            }
            .title{
                margin-left: -60px;
                font-size: 3rem;
            }
            .title h3{
                font-size:2rem;
                 /* margin-left: -77px; */
            }
            .title h1{
                font-size:2rem;
                /* margin-left: -77px; */
            }
            .button{
                display: flex;
                font-size:1rem;
            }
        }
    </style>
</head>

<body onload="myFunction()">
  <div id="preloader"></div>
    <?php include 'nav1.php'?>
    <div class="bg">
        <div class="title">
            <h3>Welcome to SpeedDiv...</h3>
            <h1><span> Speed</span>Div Courier</h1>
            <div class="button">
                <a href="login.php" class="btn">Login</a>
                <a href="register.php" class="btn">Signup</a>
            </div>
        </div>
    </div>
    <!--Footer-->
    <div style="height:auto; background-color:#090908;">
        <h1 style="color:rgb(236, 224, 224); padding:16px; margin:0; font-size: 15px; text-align:center;">Copyright ©
            2022-2023 www.SpeedDiv.com</h1>
    </div>
</body>

<script>
    var loader = document.getElementById('preloader');

    function myFunction(){
      loader.style.display = 'none';
    }

  </script>
</html>