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

<body class="container">

    <div class="Loginmain">
        <h1 class="umdc">University of Mindanao Digos College</h1>
        <h2 class="library">Library Account</h2>
    </div>

    <div class="LoginFormContainer">
        <form action="functions/studentloginfunction.php" method="POST" class="LoginForm">
            <input class="Username" type="text" name="username" placeholder="Username">
            <input class="Password" type="password" name="password" placeholder="Password">
            <button class="button" type="submit">Login</button>
            <h1 class="_">_______________________________________</h1>
            <h4 class="Desc">Don't Have an account? Sign Up</h4>
            <a href="Createaccount.php" class="CA">Create Account</a>
        </form>
    </div>

</body>

</html>