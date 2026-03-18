<?php
if (isset($_GET['status']) && $_GET['status'] == "false") {
    echo "<script> alert('User or Password is Incorrect') </script>";
}



?>

<?php
include "../resources/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<body class="container">
    <div class="Loginmain">
        <h1 class="umdc">University of Mindanao Digos College</h1>
        <h2 class="library">Library Account</h2>
    </div>
    <div class="LoginFormContainer">
        <form action="functions/studentloginfunction.php" method="POST" class="LoginForm">
            <input class="Username" type="text" name="username" placeholder="Username" required>
            <input class="Password" type="password" name="password" placeholder="Password" required>
            <button class="button" type="submit">Login</button>
            <h1 class="_">_______________________________________</h1>
            <h4 class="Desc">Dont Have an account? Sign Up</h4>
            <a href="Createaccount.php" class="CA">Create Account</a>
        </form>

    </div>

</body>

</html>