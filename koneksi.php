<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama', '$username', '$email', $password)");
