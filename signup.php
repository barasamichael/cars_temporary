<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <body>
            <style type="text/css">
                #text{
                    height: 25px;
                    border-radius: 10px;
                    padding: 3px;
                    border: solid thin #aaa;
                    width:100%;
                }
                #boutton{
                    padding: 10px;
                    width: 100px;
                    color: white;
                    background-color: Green;
                    border:none;
                }
                #box{
                    background-color:maroon;
                    margin:auto;
                    width: 300px;
                    padding: 20px;
                }
            </style>
            <div id="box">
                <form action="connection.php" method="post">
                    <div style="margin:10px;color:white;">CREATE YOUR ACCOUNT</div>

                    Name: <input id="text" type="text" name="name"><br><br>
                    Email: <input id="text" type="text" name="email"><br><br>
                    Gender:<input id="text" type="text" name="gender"><br><br>
                    Phone Number:<input id="text" type="text" name="number"><br><br>
                    Password: <input id="text" type="password" name="password"><br><br>
                    <input id="boutton" type="submit" value="REGISTER"><br>
                    <a href="Login.php" style="color:black;">Click here to signup</a>
                </form>
            </div>
        </body>
    </head>