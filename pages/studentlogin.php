<?php
if (isset($_GET['status']) && $_GET['status'] == "false") {
    echo "<script> alert('User and Pass Incorrect') </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMDC LIBRARY ACCOUNT</title>
    <link rel="stylesheet" href="../css/studentlogin.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="login-header">
                <h1>University of Mindanao Digos College</h1>
                <h2>Library Account</h2>
            </div>

            <form action="functions/loginfunction.php" method="POST" class="login-form">
                <input type="text" name="username" placeholder="Username" class="input-field" required>
                <input type="password" name="password" placeholder="Password" class="input-field" required>
                <button type="submit" class="login-button">Login</button>
            </form>

            <div class="signup-section">
                <span class="desc">Don't have an account?</span>
                <a href="Createaccount.php" class="create-account-button">Create Account</a>
            </div>
        </div>
    </div>
</body>
</html>