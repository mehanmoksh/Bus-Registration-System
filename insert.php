<html>
<head></head>
<body bgcolor="aqua"><center></b><br><br>
<?php
$name = filter_input(INPUT_POST, 'name');
$uname = filter_input(INPUT_POST, 'uname');
$password = filter_input(INPUT_POST, 'password');
$gender = filter_input(INPUT_POST, 'gender');
$phone = filter_input(INPUT_POST, 'phone');

if (!empty($name)){
if (!empty($uname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bus";
// Create connection
$conn = new mysqli ("localhost", "root", "", "bus");


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register (name, uname, password, gender, phone)values ('$name','$uname', '$password', '$gender', '$phone')";
if ($conn->query($sql)){
echo "Signing sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "User name should not be empty";
die();
}
}
else{
echo "Password should not be empty";
die();
}
?>
</b><br><br>
<div password="btn-group">
	<button onclick="window.location.href = 'register.html';">Home</button>
</div>
</center>
</body>
</html>