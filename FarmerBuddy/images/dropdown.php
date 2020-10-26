<?php

if(isset($_POST['button']))
{
$Select_name=$_POST['Select_name'];
echo $Select_name;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
   <img src="./" alt="">
     <form action="" method="post">
  
<p>How would you like to pay?<br>
<select name="Select_name">
<option value="No Payment Options Selected">[Choose Option Below]</option>
<option value="Credit Card">Credit Card</option>
<option value="Debit">Debit</option>
<option value="Check">Check</option>
</select><br>
<input type="submit" name="button" value="Submit"/></form>
  </body>
</html>
