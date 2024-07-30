<?php
session_start();
include('connection.php');
$con= new mysqli('localhost','root',' ','project');

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
   $email= $_POST['email'];
   $password=$_POST['password'];

if(!empty($email)&& !empty($password))
 {
    //read from database
    $query="SELECT * FROM register where email = '$email' limit 1";
    $result= mysqli_query($con,$query);

    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
            $data=mysqli_fetch_assoc($result);
            
            if($data['password'] === $password)
            {
                $_SESSION['id'] = $data['id'];
                header("location: index.php");
                die;
            }
        }
    }
 }
 else
 {
    echo "Wrong Email adress or Password. Try again!!";
 }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <body>
            <style type="text/css">
                #text{
                    height: 25px;
                    border-radius: 5px;
                    padding: 4px;
                    border: solid thin #aaa;
                    width:100%;
                }
                #boutton{
                    padding: 10px;
                    width: 100px;
                    color: white;
                    background-color: greenyellow;
                    border:none;
                }
                #box{
                    background-color:maroon;
                    margin:auto;
                    width: 300px;
                    padding: 30px;
                }
            </style>
            <div id="box">
                <form method="post">
                    <div style="margin:20px;color:white;">WELCOME TO AYA!!</div>

                    Email:<input id="text" type="text" name="email"><br><br>
                    Passowrd:<input id="text" type="password" name="password"><br><br>

                    <input id="boutton" type="submit" value="LOGIN"><br>
                    <a href="Signup.php"  style="color:Black;">Create New Account</a>
                </form>
            </div>
        </body>
    </head>