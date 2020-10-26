<?php
$connection = mysqli_connect('localhost' , 'root' ,'', 'state' );
if($connection)
{
    echo "connected";
}
else{
    echo "fails";
}
?>
<?php
$query = "SELECT * FROM state-data";
$result = mysqli_query($connection, $query);
if(!$result)
{
    die('DAta base connection falied' . mysqli_error());
}

while($row = mysqli_fetch_row($result))
{
    var_dump($row);
    echo "<hr/>";
}
?>