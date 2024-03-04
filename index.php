<!DOCTYPE html>
<html>
<head>
    <h1>  hassan - youness -salim </h1>
    <title> LOGIN </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        main {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
        }
        main div {
            flex: 1;
            text-align: center;
        }
        main div h2 {
            margin: 10px 0;
        }
        main div p {
            margin: 0;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Website</h1>
    </header>
    <main>
        <div>
            <h2>Login</h2>
            <form action="login.php" method="post">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>
                <input type="submit" value="Login">
            </form>
        </div>
        <div>
            <h2>Sign Up</h2>
            <form action="signup.php" method="post">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>
                <input type="submit" value="Sign Up">
            </form>
        </div>
    </main>
    <footer>
        &copy; 2023 Website
    </footer>
</body>
</html>
