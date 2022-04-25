<?php

$server = "localhost";
$user = "root";
$pass = "";
$book_db = "login_register_pure_coding";
// $conn = mysqli_connect($server, $user, $pass, $users);
$conn = mysqli_connect('localhost', 'root', '', 'restaurentms');

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
