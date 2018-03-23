<?php
// include('session.php');
session_start();    
include('connect-db.php');
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        // $connection = mysql_connect("localhost", "root", "");
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        // SQL query to fetch information of registerd users and finds user match.

        $query = mysqli_query($connection, "SELECT * FROM login where password='$password' AND user='$username'");
        echo "here";
        $rows = mysqli_num_rows($query);
        print_r($rows);
        if ($rows == 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: show.php"); // Redirecting To Other Page
        } else {
            echo "</h1>Username or Password is invalid</h1><br>";
            echo "<h1 class='button'><a href='index.php'>Try to login again</a></h1>";
        }
        mysqli_close($connection); // Closing Connection
    }
}
?>

