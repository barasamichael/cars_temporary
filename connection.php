<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){

    $name = $_POST['name'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $number= $_POST['number'];
    $password=$_POST['password'];


if(!empty($name) && !empty($email)&& !empty($gender)&& !empty($number)&& 
!empty($password))
 {

$con= new mysqli('localhost','root',' ','project');

if($con)
{

    $query="INSERT INTO register (name,email,gender,number,password) 
    VALUES ('$name','$email','$gender','$number','$password')";
    
    $result = mysqli_query($con,$query);

    header("location:Login.php");
    die;
 }
 else
 {
    echo "Kindly fill out your Form!!";
 }

}
}


?>