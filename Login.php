<?php
if(!empty($_POST['email']) && !empty($_POST ['password']));


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Below</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1>Log in</h1>
<span> or <a href="register.php">register here</a></span>

<form action="login.php" metod="POST">
<input type="text" placeholder="Enter your email" name="email">
<input type="password" placeholder="and password" name="password">
<input type="submit">





</form>

</body>
</html>