<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedDiv | Contact us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* background: #e4e4e4; */
            background: linear-gradient(135deg, #05073a, #dc0606ca);

        }

        .form-container {
            display: flex;
            height: 98vh;
            width: 100%;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        
        .form-container .form-wrap {
            /* background: #fff; */
            background: linear-gradient(135deg, #05073a, #06c0dcca);
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
            font-size: 30px;
        }

        .form-container .form-wrap .form-box {
            margin: 0px 0px 15px;
        }
        .form-container .form-wrap .form-box p{
            padding: 0px 1px 4px 2px;
            font-family: cursive;
        }

        .form-container .form-wrap .form-box input[type="text"] {
            padding: 5px 8px;
            border-radius: 3px;
            border: 1px solid #353535;
            width: 100%;
            margin: 0px 0px 18px;
            color:black;
        }

        .form-container .form-wrap .form-box input[type="tel"] {
            padding: 5px 8px;
            border-radius: 3px;
            border: 1px solid #353535;
            width: 100%;
            margin: 0px 0px 18px;
        }
            
        
        .form-container .form-wrap .form-box textarea {
            border: 1px solid rgba(146, 145, 161, 0.5);
            border-radius: 8px;
            font-weight: 300;
            /* background-color: transparent; */
            padding:5px,5px;
            border-color: #AFAEBC !important;
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
            background: linear-gradient(135deg,#d142b2,#e4c662ca);
            color: #fff;
            font-weight: 800;
            font-size: 16px;
            cursor: pointer;
        }
        /* .form-container .form-wrap .form-submit input[type='submit']:hover{
            
        } */
    </style>
</head>

<body>
    <div class="form-container">
        <form action="cont.php" method="post" class="form-wrap">
            <h2>Complain & Feedback</h2>
            <div class="form-box">
                <p>Enter your name</p>
                <input type="text" name="cname" placeholder="Enter your name" required>
                <p>Enter your number</p>
                <input type="tel" name="cnumber" maxlength="10" placeholder="Enter your number" required>
                <p>Send your Message</p>
                <textarea name="cmessage" id="cmessage" cols="55" rows="10" placeholder="Send message"></textarea required>
            </div>
            <div class="form-submit">
                <input type="submit" value="send">
            </div>
        </form>
    </div>
</body>

</html>