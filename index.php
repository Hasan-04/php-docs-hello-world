<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="check_login.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <h1>Signup</h1>
    <form action="register.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Signup">
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Game</title>
</head>
<body>
    <h1>Welcome to the Game</h1>
    <!-- Here you can add the game functionality -->
</body>
</html>
<?php
session_start();
// Database connection
$conn = new mysqli('localhost', 'username', 'password', 'database');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header('location: game.php');
} else {
    echo "Invalid username or password";
}
$conn->close();
?>
<?php
session_start();
// Database connection
$conn = new mysqli('localhost', 'username', 'password', 'database');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
