
<?php

$first_name = $_POST['first_name'];
$second_name = $_POST['second_name'];
$email = $_POST['email'];
$number = $_POST['number'];
$username = $_POST['username'];
$password = $_POST['password'];
$password_again = $_POST['password_again'];

if($password == $password_again){
$query = "INSERT INTO users(first_name, second_name, email, number, username, password) VALUES ('$first_name', '$second_name', '$email', '$number', '$username', '$password')";

$result = mysqli_query($connection, $query);

if($result){
echo "Registration Successful";
} else {
echo "Error: " . mysqli_error($connection);
}
} else {
echo "Passwords do not match";
}
?>