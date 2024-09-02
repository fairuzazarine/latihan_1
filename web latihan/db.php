<?php
$servername = "localhost";
$username = "tabel_pegawai"; // ganti dengan username database kamu
$password = ""; // ganti dengan password database kamu
$dbname = "tabel_pegawai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>