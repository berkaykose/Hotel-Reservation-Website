<?php
$startdate = filter_input(INPUT_POST, 'startdate');
$enddate = filter_input(INPUT_POST, 'enddate');
$cardnumber = filter_input(INPUT_POST, 'cardnumber');
$cardccv = filter_input(INPUT_POST, 'cardccv');
$cardowner= filter_input(INPUT_POST, 'cardowner');
$expiration= filter_input(INPUT_POST, 'expiration');
$username= filter_input(INPUT_POST, 'username');

if (!empty($cardccv)){
if (!empty($username)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO booking (sdate,edate,cnumber,ccv,cowner,exdate,username)
values ('$startdate','$enddate','$cardnumber','$cardccv','$cardowner','$expiration','$username')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully. You are redirecting.";
header("Refresh:2; url=index.php");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "username should not be empty";
die();
}
}
else{
echo "cardccv should not be empty";
die();
}
?>