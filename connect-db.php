<?php
/*
 *   Allows PHP to connect to your database
 *   Database Variables (edit with your own server information)
 */
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'records';

// Connect to Database
$connection = mysqli_connect($server, $user, $pass)
    or die ("Could not connect to server ... \n" . mysqli_error ());
mysqli_select_db($connection, $db)
    or die ("Could not connect to database ... \n" . mysqli_error ());

?>