<!DOCTYPE html>
<?php
    session_start();
    if(!ISSET($_SESSION['admin'])){
        // header('location:index.php');
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Welcome</title>
  <link rel="icon" href="icon.png" type="image/x-icon">
  <link rel="stylesheet" href="navbar.php">
  <style>
    * {
      transition: all 0.3s ease-in-out;
    }

    /* .container{
  clear:both;
  overflow:auto;
} */
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

    }


    ul li:hover {
      border: 2px solid rgb(177, 28, 167);
      border-radius: 10px;
      color: rgb(59, 41, 7);

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

      /* color: black;  */
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
      font-size: 60px;
      font-weight: 700;
      letter-spacing: 8px;
      margin-bottom: 20px;
      position: relative;
      animation: text 3s 1;

    }

    .text2 {
      font-size: 60px;
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

    /* body p {
      font-family: cursive;
      font-size: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid rgb(177, 28, 167);


    } */
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
  </style>
</head>

<body onload="myFunction()">
  <!-- <div id="preloader">
  </div>
  <hr id="hr"> -->
  <div class="container">
    <div class="logo">
      <img src="logo2.png" alt="" width="130" />
    </div>
    <nav>
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
            <a href="#">All Orders</a>
            <a href="#">Delete Account</a>
          </div>
          <div>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "speeddiv");
         
            if(!$conn){
                die("Error: Failed to connect to database!");
            }
            $query = mysqli_query($conn, "SELECT * FROM `register` WHERE `username`='$_SESSION[username]'") or die(mysqli_error());
            $fetch = mysqli_fetch_array($query);
            
            echo "<h2 class='text-success'>".$fetch['username']."</h2>";
            ?>
          </div>
        </div>
        <li> <a href="complainfeedback.php" style="text-decoration: none;color: black;"> Complain and feedback</li></a>
        <div class="Logout">


          <a href="home.php"><input type="submit" value="Logout"></a>
        </div>
      </ul>
    </nav>
  </div>
  <hr />


  <div class="insidefont">

    <span class="text1">Wel-Come to </span>
    <span class="text2">SpeedDiv </span>



  </div>

  <footer>
    <h1>Copyright ©
      2022-2023 www.SpeedDiv.com</h1>
  </footer>
  <!-- <p> Wel-Come User <br> We are happy to serve you !</p> -->



  <script>
    // var loader = document.getElementById('preloader');

    // function myFunction(){
      // }
      // let loader = setInterval(updated, 40);
      // let upto = 0;
      // let width = 0;
      // function updated(){
      //   const load = document.getElementById("preloader");
      //   const hr = document.getElementById("hr");
      //   ++upto;
      //   load.innerHTML = "Loading " + upto + "%";
      //   hr.style.width = upto + "%";
      //   if (upto === 50){
      //     clearInterval(loader);
      //     load.innerHTML = "Done";
      //       load.style.display = 'none';
      // }
      //   }

  </script>
</body>
<!--Footer-->

</html>
            <h1>WELCOME:</h1>
            <?php
             $conn = mysqli_connect("localhost", "root", "", "speeddiv");
 
             if(!$conn){
                 die("Error: Failed to connect to database!");
             }
 
 
                $query = mysqli_query($conn, "SELECT * FROM `register` WHERE `username`='$_SESSION[username]'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query);
 
                echo "<h2 class='text-success'>".$fetch['username']."</h2>";
            ?>
            <a href="logout.php">Logout</a>
        
        </div>
    </div>
</body>	
</html>