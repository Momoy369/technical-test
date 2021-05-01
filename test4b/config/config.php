<?php
//Konfigurasi DB

$hostname_momoy = "localhost";
$database_momoy = "dw7_heroes";
$username_momoy = "root";
$password_momoy = "";
$conn = mysqli_connect($hostname_momoy, $username_momoy, $password_momoy, $database_momoy) or die("Connection failed: " . mysqli_connect_error());