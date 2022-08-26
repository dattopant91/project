<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SpeedDiv | Place Order </title>
  <link rel="icon" href="icon.png" type = "image/x-icon">

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    body{
      background: linear-gradient(135deg, #05073a, #dc0606ca);
    }

    header h1 {
      display: flex;
      justify-content: center;
      color:silver;

    }

    .container {
      display: flex;
      justify-content: center;
      /* max-width: 800px; */
      
    }
    
    form {
      background: linear-gradient(135deg, #05073a, #06c0dcca);
      display: flex;
      padding: 50px;
      flex-direction: column;
      align-items: center;
      border: 2px solid silver;
      border-radius: 8px;
      justify-content: center;
    }

    form label {

      font-family: 'Times New Roman', Times, serif;
      font-size: 20px;
      margin-top: 15px;
      margin-bottom: 15px;
      color: antiquewhite;

    }

    form input {
      display: flex;
      align-items: center;
      width: 500px;
      padding: 10px;
      border-radius: 10px;
    }

    .dropdown  {
      display: flex;
      align-items: center;
      width: 500px;
      padding: 10px;
      border-radius: 10px;
    }
    .dropdown select {
      display: flex;
      align-items: center;
      width: 500px;
      padding: 10px;
      border-radius: 10px;
    }
    .btn{
      display: flex;
      width:400px;
    }
    .btn input{
      display: flex;
      justify-content: center;
      font-size: 20px;
      font-family: 'Times New Roman', Times, serif;
    }
    .btn input:hover{
     background-color: rgb(234, 65, 158);
    }
  </style>
  <header>
    <h1>Place your order here!</h1>
  </header>
</head>

<body>
 
  <div class="container">
    <form action="place.php" method="post">
      <h2 style="margin-top:10px; border-bottom: 2px solid rgb(249, 186, 186);color: antiquewhite;">Senders Details</h2>
      <label for="name" id="sname">Name </label>
      <input type="text"name="sname" placeholder="Enter Senders Name" required>

      <label for="tel" id="smobileno">Mobile no</label>
      <input type="tel" maxlength=10 name="smobileno" placeholder="Enter Senders mobile no"required>

      <label for="address" id="saddress">Address </label>
      <input type="text" name="saddress" placeholder="Enter Senders address"required>

      <label for="pincode" id="spincode">pincode</label>
      <input type="number" name="spincode"maxlength=6 title="6 digit code" placeholder="Enter Senders pincode"required>
      <div class="dropdown">

        <label for="dropdown" name="deliverytype">
          <select name="deliverytype" id="deliverytype">
            <option value="standard-delivery" title="up to 50 kg" selected>standard-delivery</option>
            <option value="parcel-delivery" title="less than 2 kg">parcel-delivery</option>
            <option value="luggage-delivery" title="more than 50kg">luggage-delivery</option>
            <option value="fragile-delivery"title="Handle with care items">fragile-delivery</option>

          </select>
        </label>
      </div>
      <div class="btn">
        <input type="submit" value="submit">
      </div>




     


    </form>



  </div>


</body>


</html>