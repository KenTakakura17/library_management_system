<!DOCTYPE html>
<link rel="stylesheet" href="../css/createaccount.css">

<?php
include "../resources/header.php";
?>

<body>
    <div class="">
        <h1 class="createuser">Create User</h1>
        <form action="functions/studentloginfunction.php" method="POST">
            <label for="" class="usna">First Name</label>
            <input type="text" name="first_name" class="usnas" placeholder="First Name">
            <label for="" class="email">Last Name</label>
            <input type="text" name="last_name" class="emails" placeholder="Last Name">
            <label for="" class="mnum">Department</label>
            <input type="text" name="department" class="mnums" placeholder="Department">
            <label for="" class="bdate">ID_Number</label>
            <input type="text" name="id_number" class="bdates" placeholder="ID Number">
            <label for="" class="fname">Username</label>
            <input type="text" name="username" class="fnames" placeholder="Username">
            <label for="" class="password">Password</label>
            <input type="password" name="password" class="passwords" required placeholder="Password">
            <input type="password" name="confirm_password" placeholder="Confirm Password" class="passwords" required>
            <button type="submit" class="savebutton">Save</button>
        </form>
    </div>
</body>

</html>