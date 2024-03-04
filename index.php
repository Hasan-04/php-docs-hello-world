<!DOCTYPE html>
<html>
<head>
    <title>Hassan El Khaldi Game Website</title>
</head>
<body>
    <h1>Welcome to Hassan El Khaldi Game Website</h1>

    <?php
    // Connect to the database
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "game_website";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the user is logged in
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }

    // Get the user's score from the database
    $sql = "SELECT score FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_SESSION["username"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Display the user's score
    echo "<p>Hello, " . $_SESSION["username"] . "! Your current score is: " . $row["score"] . "</p>";

    // Close the database connection
    $stmt->close();
    $conn->close();
    ?>

    <!-- Add links to the game and other pages -->
    <a href="game.php">Play Game</a>
    <a href="leaderboard.php">Leaderboard</a>
    <a href="logout.php">Logout</a>
</body>
</html>
