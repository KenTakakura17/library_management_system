<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMDC LIBRARY ACCOUNT</title>
    <link rel="stylesheet" href="../css/studentlogin.css">
</head>

<body class="container">
    <div class="Loginmain">
        <h1 class="umdc">University of Mindanao Digos College</h1>
        <h2 class="library">Library Account</h2>
    </div>
    <div class="LoginFormContainer">
        <form action="../php/studentlogin.php" method="POST" class="LoginForm">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>