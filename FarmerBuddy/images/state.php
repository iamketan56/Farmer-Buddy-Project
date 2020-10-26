<?php
if(isset($_POST['button']))
{
$State = $_POST['State'];
}
?>

<!DOCTYPE html>
<html lang="en">
           <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="./main.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-green pl-5" id="navigation">
    <a href="./index.html"><img src="circle-cropped (3).png" alt="" class="logo"></a>
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#myNav"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="myNav">
        <ul class="navbar-nav pr-5">
         
          <li class="nav-item pr-5 pl-5 ">
          <a href="mission.html" target="_blank" style="letter-spacing:0.5rem">Mission</i></a>
          </li>
          <li class="nav-item pr-5 pl-5">
          <a href="Aboutus.html" target="_blank" style="letter-spacing:0.5rem">About US</a>
          </li>
          <li class="nav-item pr-5 pl-5">
          <a href="blog.html" target="_blank" style="letter-spacing:0.5rem">Blog</i></a>
          </li>
          <li class="nav-item pr-5 pl-5">
          <a href="state.php" target="_blank" style="letter-spacing:0.5rem">Details</a>
          </li>
          <li class="nav-item  pl-5">
          <a href="contact.html" target="_blank" style="letter-spacing:0.5rem">Contact US</a>
          </li>
        </ul>
      </div>
    </nav>
    <section id="select-state">
    <h2 style=" color: darkgreen;
  font-size: 40px;
  text-align: center;
  padding: 20px;">Details</h2>
    
    <marquee width="100%" direction="left" height="100px" style="font-size:20px;color:red">
Here You can get details of your state and district (By selecting your state and then click proceed then select your district)
</marquee>
<div class="conatiner">
    <div class="states">
        
            <h3 style="color:black;padding-bottom:26px">Select State</h3><br>
            <form action="district.php" method="post" class="forms" style="padding-25px">
            <select name="State" class="indiastate">
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
        
            </select><br><br><br>
            <input type="submit" name="button" value="Proceed" class="input"/></form>
    </div>
</div>
</section>
    
<script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
</body>
</html>