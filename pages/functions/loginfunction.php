<?php

include '../../config/include.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $Password = $_POST['password'];

    $result = loginAuth($username, $Password);

    if ($result == 1) {
        echo "<script> window.location.href = '../dashboard.php'</script>";
    } else {
        echo "<script> window.location.href = '../login.php?status=false'</script>";
    }

    // echo "Your username is " .  $username . " and your password is " . $Password;
}
?>