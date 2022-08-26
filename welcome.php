<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="icon" href="icon.png" type="image/x-icon">
  <!-- <link rel="stylesheet" href="navbar.php"> -->
  <style>
    * {
      transition: all 0.3s ease-in-out;
    }
    body {
      background-image: url(img3.jpg);
      background-repeat: no-repeat;
      height: 95vh;
      background-size: cover;
      background-position: center;
    }

    nav {
      float: center;
    }

    .logo img {
      float: left;
    }

    ul li {
      display: inline-block;
      padding: 10px;
      font-size: 20px;
      font-family: raleway;
      cursor: pointer;
      
    }

    ul li:hover {
      border-radius: 10px;
      background: grey;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .Logout {
      position: absolute;
      display: inline-block;

      right: 10px;
      align-items: right;

    }

    .Logout input {
      width: 80px;
      height: 35px;
      border-radius: 8px;
      background-color: darkseagreen;
    }
    .insidefont span {
      display: block;
    }

    .insidefont {
      background-color: #640f0f;
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 60%;
      height: 200px;
      border-radius: 10px;
    }

    .text1 {
      text-transform: uppercase;
      color: antiquewhite;
      font-size: 3rem;
      font-weight: 700;
      letter-spacing: 8px;
      margin-bottom: 20px;
      position: relative;
      animation: text 3s 1;
    }
    .text2 {
      font-size: 3rem;
      color: #e7f127;
    }

    @keyframes text {
      0% {
        color: antiquewhite;
        margin-bottom: -40px;
      }
      30% {
        letter-spacing: 25px;
        margin-bottom: -40px;
      }

      85% {
        margin-bottom: -40px;
        letter-spacing: 8px;
      }
    }
    footer {
      position: absolute;
      /* height:auto;   */
      padding: 0;
      margin: -8px;
      background-color: #090908;
      bottom: 0;
      width: 100%;
      margin-bottom: 0;
    }

    footer h1 {
      color: rgb(236, 224, 224);
      padding: 16px;
      font-size: 15px;
      text-align: center;
    }

    #preloader {
      background: #000 url(images/giphy.gif) no-repeat center center;
      background-size: 15%;
      height: 100vh;
      left: 0;
      top: -6px;
      width: 100%;
      position: fixed;
      z-index: 100;
    }

    @media(max-width:700px) {
      .text1 {
        font-size: 3rem;
      }

      .text2 {
        font-size: 2rem;
      }

      .insidefont {
        width: 90%;
      }
    }

    .container nav .logout {
      cursor: pointer;
      font-size: 16px;
    }

    .container nav .logout:hover {
      background: white;
      color: black;
    }

    .sidenav,
    span {
      display: none;
    }

    @media screen and (max-width:730px) {

      .sidenav,
      span {
        display: block;
      }

      .nn {
        display: none;
      }

      .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }

      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }

      .sidenav a:hover {
        color: #f1f1f1;
      }

      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }

      .container nav .logout {
        cursor: pointer;
        font-size: 16px;
        position: absolute;
        top: 400px;
        right: 100px;
      }
      ul li {
        display: inline-block;
        padding: 10px;
        font-size: 20px;
        font-family: raleway;
        cursor: pointer;
        color: gray;
      }
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }

    }
  </style>

</head>

<body onload="myFunction()">
  <div class="container">
    <div class="logo">
      <img src="logo2.png" alt="" width="130" />
    </div>
    <nav class="nn">
      <ul>
        <li> <a href="home.php" style="text-decoration: none;color: black;">Home</a></li>
        <div class="dropdown">
          <!-- <button class="dropbtn">manage Orders</button> -->
          <li> Manage Orders</li>
          <div class="dropdown-content">
            <a href="placeorder.php">Place order</a>
            <a href="tracking.php">Track Order</a>
            <a href="cancelorder.html">Cancel Order</a>
          </div>
        </div>
        <div class="dropdown">
          <li> Manage account</li>
          <div class="dropdown-content">
            <a href="#">Edit Profile</a>
            <a href="allorder.php">All Orders</a>
            <a href="#">Delete Account</a>
          </div>
        </div>
        <li> <a href="complainfeedback.php" style="text-decoration: none;color: black;"> Complain and feedback</li></a>
        <div class="Logout">
          <a href="logout.php"><input type="submit" value="Logout" class="logout"></a>
        </div>
      </ul>
    </nav>
    <nav>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul>
          <li> <a href="home.php" >Home</a></li>
          <div class="dropdown">
            <!-- <button class="dropbtn">manage Orders</button> -->
            <li> Manage Orders</li>
            <div class="dropdown-content">
              <a href="placeorder.php">Place order</a>
              <a href="tracking.php">Track Order</a>
              <a href="cancelorder.html">Cancel Order</a>
            </div>
          </div>
          <div class="dropdown">
            <li> Manage account</li>
            <div class="dropdown-content">
              <!-- <a href="#">Edit Profile</a> -->
              <a href="allorder.php">All Orders</a>
              <!-- <a href="#">Delete Account</a> -->
            </div>
          </div>
          <li> <a href="complainfeedback.php"> Complain and feedback
          </li></a>
          <div class="Logout">
            <a href="logout.php"><input type="submit" value="Logout" class="logout"></a>
          </div>
        </ul>
      </div>
    </nav>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>
  </div>
  <hr />
  <marquee behavior="scroll" direction="right">
    <h1> Welcome -
      <?php echo $_SESSION['username']?>
    </h1>
  </marquee>
  <div class="insidefont">
    <span class="text1">Wel-Come to </span>
    <span class="text2">SpeedDiv </span>
  </div>

  <footer>
    <h1>Copyright ©
      2022-2023 www.SpeedDiv.com</h1>
  </footer>
</body>

</html>