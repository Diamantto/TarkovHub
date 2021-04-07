<?php 
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'tarkov');
$mysql->query("INSERT INTO `users` (`username`, `email`, `password`) VALUES('$username', '$email', '$password')");
$mysql->close();

setcookie('user', $username, time() + 3600 * 24, "/");

header('Location: index.php');
?>