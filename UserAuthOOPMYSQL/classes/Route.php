<?php
include_once 'UserAuth.php';

function Dbh.php($fullname, $email, $password, $confirmPassword, $country, $gender, $conn) {
    $fullname = "fullname";
    $password = "password";
    $confirmPassword = "confirmPassword";
    $country = "country";
	$gender = 'gender'
    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
        echo "<script> alert('Error connecting to the database') </script>";
    }
    return $conn;
	
if (isset($_POST['submit']))
{
    if ((!isset($_POST['fullname'])) || (!isset($_POST['country'])) || 
        (!isset($_POST['password'])) || (!isset($_POST['gender'])) || 
        (!isset($_POST['confirmPassword'])) || (!isset($_POST['gender'])))
    {
        $error = "*" . "Please fill all the required fields";
    }
    else
    {
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];
    }
}
?>

