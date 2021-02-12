<?php
$server = 'localhost';
$user    = 'root';
$password = '';
$db    = 'dbInfo';
$con = mysqli_connect($server, $user, $password);
if (empty($con)) {
    die("Connection failed");
} else {
}
