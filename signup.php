<?php
include('includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
$username = trim($_POST['username']);
$password = password_hash($POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    header("Location: login.php");
} else {
    echo "Error: " . $stmt->error;
}
?>

<form method="post">
    <h2>Register</h2>
    <input type="text" name="username" placceholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="submit" value="Register">
</form>