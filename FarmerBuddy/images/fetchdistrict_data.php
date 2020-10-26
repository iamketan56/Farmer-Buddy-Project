<!DOCTYPE html>
<html lang="en">
    <header>
        <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To your District</title>
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
              <li class="nav-item pl-5">
              <a href="contact.html" target="_blank" style="letter-spacing:0.5rem">Contact US</a>
              </li>
            </ul>
          </div>
        </nav>
</header>
<?php
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "farmer_district_data";

foreach($db as $key => $value)
{
define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST , DB_USER , DB_PASS ,DB_NAME);
if($connection)
{
   //echo "conected bro";
}
else
{
    //echo "not contected";
}
$data =  $_POST['district'];

$select_all_districtdata_query = mysqli_query($connection,"SELECT * FROM district_data WHERE District_Name = '$data'");
while($row = mysqli_fetch_array($select_all_districtdata_query))
{
    $dist_name = $row['District_Name'];
    
    echo "<h2 style = 'color:green;text-align:center;padding:10px'>About {$dist_name}</h2>";
    $dist_about = $row['About_District'];
    echo "<div class='container'><div class='row border bg-light'><p>{$dist_about}</p></div></div>";

    echo "<h2 style = 'color:green;text-align:center;padding:10px'>Major Crops</h2>";
    $dist_crops = $row['Major_crops'];
    echo "<div class='container'><div class='row border mt-2 mb-2 bg-light'><p>{$dist_crops}</p></div></div>";

    echo "<h2 style = 'color:green;text-align:center;padding:10px'>Source of irrigation</h2>";
    $dist_water = $row['Source_of_water'];
    echo "<div class='container'><div class='row border mt-2 mb-2 bg-light'><p>{$dist_water}</p></div></div>";

    echo "<h2 style = 'color:green;text-align:center;padding:10px'>Type of Soil & Climate</h2>";
    $dist_soil = $row['Soil and climate'];
    echo "<div class='container'><div class='row border mt-2 mb-2 bg-light'><p>{$dist_soil}</p></div></div>";
    
    echo "<h2 style = 'color:green;text-align:center;padding:10px'>Current Composition</h2>";
    $dist_com = $row['current_composition'];    
    echo "<div class='container'><div class='row border mt-2 mb-2 bg-light'><p>{$dist_com}</p></div></div>";

    echo "<h2 style = 'color:green;text-align:center;padding:10px'>Required Composition For Better Production</h2>";
    $dist_rcom = $row['Required_composition'];
    echo "<div class='container'><div class='row border mt-2 mb-2 bg-light'><p>{$dist_rcom}</p></div></div>";

    echo "<h2 style = 'color:green;text-align:center;padding:10px'>Recommended Action for Better Result</h2>";
    $dist_raction = $row['Recommended_action'];
    echo "<div class='container'><div class='row border mt-2 mb-2 bg-light'><p>{$dist_raction}</p></div></div>";


}
?>

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