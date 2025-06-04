<?php
session_start();
include('includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = trim($_POST['username']);
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();

  $result =$stmt->get_result();
  $user = $result->fetch_asscot();

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user['username'];
    header("Location: index.php");
  } else {
    echo "Invalid login.";
  }

}
?>

<form method="post">
<h2>login</h2>
<input type="text"  name="username" placeholder="Username" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<input type="submit" value="Login">
</form>