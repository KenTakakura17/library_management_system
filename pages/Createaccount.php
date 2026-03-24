<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link rel="stylesheet" href="../css/Createaccount.css">
</head>
<body>
    <div class="CreateAccountContainer">
        <h1 class="createuser">Create User</h1>
        <form action="functions/studentloginfunction.php" method="POST">
            <label class="usna">First Name</label>
            <input type="text" name="first_name" class="usnas" placeholder="First Name" required>

            <label class="email">Last Name</label>
            <input type="text" name="last_name" class="emails" placeholder="Last Name" required>

            <label class="mnum">Department</label>
            <input type="text" name="department" class="mnums" placeholder="Department" required>

            <label class="bdate">ID Number</label>
            <input type="text" name="id_number" class="bdates" placeholder="ID Number" required>

            <label class="fname">Username</label>
            <input type="text" name="username" class="fnames" placeholder="Username" required>

            <label class="password">Password</label>
            <input type="password" name="password" class="passwords" placeholder="Password" required>

            <label class="cpassword">Confirm Password</label>
            <input type="password" name="confirm_password" class="passwords" placeholder="Confirm Password" required>

            <button type="submit" class="savebutton">Save</button>
        </form>
    </div>
</body>

</html> 