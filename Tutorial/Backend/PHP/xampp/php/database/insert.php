<?php
include 'db.php';
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNummber = $_POST['phone'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
    // echo $firstName;
    // echo $lastName;
    // echo $email;
    // echo $phoneNummber;
    // echo $password;

    $query="INSERT INTO `users`(`firstName`,`lastName`,`email`,`phoneNumber`,`password`) VALUES ('$firstName','$lastName','$email','$phoneNummber','$password')";

    $query_run=mysqli_query($connection,$query);

    if(!$query_run)
    {
        echo "error";
    }

}
