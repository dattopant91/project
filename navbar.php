<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>SpeedDiv</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        li,
        a,
        button {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: white;
            text-decoration: none;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px;
            background-color: #24252A;
        }
        .main .logo {
            font-family: 'Poppins', sans-serif;
            position: absolute;
            top: 05px;
            font-size: 30px;
            text-transform: capitalize;
        }
        .main .logo a span {
            font-family: 'Clicker Script', cursive;
            font-size: 35px;
            color: white;
        }
        .main .logo a {
            text-decoration: none;
            color: white;
            font-weight: 700;
            padding: 15px 20px;
            font-size: 30px;
            letter-spacing: 5px;
            position: relative;
            color: rgb(208, 255, 0);
        }

        .main .logo a::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border-bottom: 5px solid red;
            border-left: 5px solid red;
            bottom: 0;
            left: 0;
        }

        .main .logo a::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border-top: 5px solid red;
            border-right: 5px solid red;
            top: 0;
            right: 0;
        }
        .nav_links {
            list-style: none;
        }

        .nav_links li {
            display: inline-block;
            padding: 10px;
        }
        .nav_links li a:hover {
            color:grey;
        }
        button {
            padding: 9px 25px;
            background-color: rgba(0, 136, 169, 1);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        button:hover {
            background-color: rgba(0, 136, 169, 0.8);

        }

        header ul ul {
            width: 8%;
            position: absolute;
            background: #2e2e2b;
            top: 8%;
            left: 36%;
            display: none;
            padding: 4px;
            flex-direction: column;
        }


        header ul ul li {
            float: none;
            width: 160px;
            border-left: 3px solid #f1c40f;
        }

        header ul ul li:hover {
            border-left: 3px solid black;
            transition: 0.6 ease;

        }

        header ul li:hover>ul {
            display: block;
        }

        .fa {
            padding: 0px 10px;
        }
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        button {
            background-color: #04AA6D;
            color: white;
            padding: 9px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }
        .container {
            padding: 16px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: #474e5d;
            padding-top: 50px;
        }

        /*Search box css start */
        .search-box {
            position: absolute;
            top: 2%;
            right: 8%;
            height: 59px;
            border-radius: 40px;
            padding: 10px;
        }

        .search-box:hover>input {
            width: 200px;
            padding: 0 10px;
            background: #24252A;
            border: 1px solid #ff6;
            border-radius:8px;
        }

        .search-box:hover> .icon {
            background: #536179;
        }

        .icon.hover {
            transform: rotate(360deg) scale(0.8);
        }

        .search-box input {
            width: 0;
            border: none;
            outline: none;
            padding: 0;
            background: none;
            font-size: 1.1rem;
            transition: 0.5s ease;
            line-height: 35px;
            color: white;
        }

        .icon {
            color: #21DFCD;
            float: right;
            width: 40px;
            font-size: 1.3rem;
            height: 40px;
            border-radius: 50%;
            background: #2f3640;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.4s;
            cursor: pointer;
            text-decoration: none;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 80%;
        }
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        @media screen and (max-width: 300px) {
            
            .cancelbtn,
            .signupbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="main">
            <div class="logo">
                <a href="home.php"><span>Speed</span>Div</a>
            </div>
        </div>
        <nav>
            <ul class="nav_links">
                <li><a href="home.php">Home</a>
                   
                </li>
                <li><a href="about.php">About</a>

                </li>
                <li>
                    <a href="branches.html">Branches</a>
                </li>


            </ul>
        </nav>
        </form>
        <div class="search-box">
            <input type="text" placeholder="search...">
            <a href=" ##" class="icon">
                <i class="fas fa-search"></i>
            </a>
        </div>

        </div>

        <a href="contactus.html" class="cta"><button>Contact</button></a>
    </header>
  
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>