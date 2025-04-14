<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === "admin" && $password === "1234") {
    echo "<p>Login successful!</p>";
  } else {
    echo "<p>Invalid login credentials.</p>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login - Bike Shop</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Login</h1>
    <nav>
       <a href="index.html">Home</a>
      <a href="bikes.html">Bikes</a>
      <a href="contact.html">Contact</a>
      <a href="about.html">About</a>
      <a href="login.php">Login</a>
    </nav>
  </header>
  <main>
    <form method="POST">
      <label>Username: <input type="text" name="username"></label><br><br>
      <label>Password: <input type="password" name="password"></label><br><br>
      <input type="submit" value="Login">
    </form>
  </main>
</body>
</html>
