<?php 
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'tarkov');

$result = $mysql->query("SELECT * FROM `users` WHERE `username`= '$username' AND `password` = '$password' ");

$user = $result->fetch_assoc();
if(count((array)$user) == 0) {
	echo "Пользователь не найден";
	exit();
}

setcookie('user', $user['username'], time() + 3600 * 24, "/");

$mysql->close();

header('Location: index.php');
?>