<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Facebook Login</h1>
        <?php
        // Predefined credentials
        $valid_email = "test@example.com";
        $valid_password = "12345";

        // Logic to handle login
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($email === $valid_email && $password === $valid_password) {
                echo '<p class="message success">Login successful! Welcome!</p>';
            } else {
                echo '<p class="message">Invalid email or password.</p>';
            }
        }
        ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email or Phone</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Log In</button>
        </form>
    </div>
</body>
</html>
