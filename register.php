<?php
if(!empty($_POST['email']) && !empty($_POST ['password']));
// Enter the new user in the database

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Below</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1>Register</h1>
<span> or <a href="login.php">login here</a></span>
<form action="register.php" metod="POST">
<input type="text" placeholder="Enter your email" name="email">
<input type="password" placeholder="and password" name="password">
<input type="submit">





</form>
</body>
</html>