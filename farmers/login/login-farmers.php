<!DOCTYPE html >
<html>
<head>
    <link rel="icon" href="../../img/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <style>

    </style>
</head>

<body>
<nav class="grey darken-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="../../index.php">Welcome</a></li>
        <li><a href="../../public/reports.php">Reports</a></li>
        <li><a href="../../public/graphs.php">Graphs</a></li>
    </ul>
    <ul id="nav-mobile" class="right hide-on-med-and-down">

    </ul>
    </div>
</nav>

<div class="container" style="width: 400px; text-align: center;">
<br><br><br><br><br><br>
    <form id="login-form" method="post" action="#" >
        <h4 id="l1" class="center-align">Login</h4>
 
            <br><br><br>
            <input type="text" name="email" id="user_id" placeholder="Email">    
            <br><br><br>
            <input type="password" name="password" id="user_pass" placeholder="Password"></input>    
            <br><br><br><br><br>
            <input type="submit" class="center-align btn" name="submit" class="submit" value="login" id="sub">
            <br><br>
            <a href="../signup/register.html">Register</a>

        
    </form>






<?php
ob_start();
session_start();

//error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dd4aw06xob";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if (isset($_POST["email"]) AND isset($_POST["password"])) {
$email= $_POST['email'];
$password= $_POST['password'];

$sql = "SELECT `email`, `password` FROM `farmers` WHERE `email` = '$email' AND `password` = '$password';";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
//echo $row['email'];
//echo $row['password'];
$ses_email = $row['email'];
$ses_password = $row['password'];
}

//echo $ses_email;
//echo $ses_password;

if ($email = $ses_email && $password = $ses_password)
{
   $_SESSION['femail'] = $ses_email;
   $_SESSION['fpassword'] = $ses_password;
   echo 'You have entered valid email and password';
   header("Location: ../reports/farmer-view-reports.php");
}
else
{
   echo '<script type="text/javascript">alert("You have entered an invalid email or password");</script>';
}
}
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
