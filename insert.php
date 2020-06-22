<?php
$username = filter_input(INPUT_POST, 'username');
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$phonenum = filter_input(INPUT_POST, 'phonenum');
$email= filter_input(INPUT_POST, 'email');
$address= filter_input(INPUT_POST, 'address');
$password= filter_input(INPUT_POST, 'password');

if (!empty($username)){
if (!empty($password)){
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
$sql = "INSERT INTO register (username,first_name,last_name,phone_num,email,address, password)
values ('$username','$firstname','$lastname','$phonenum','$email','$address','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>